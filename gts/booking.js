import { addDays, japanToday, stayParams, airParams } from './booking-core.mjs';

const tabs = [...document.querySelectorAll('.booking-tabs [role="tab"]')];
function selectTab(tab, focus = false) {
  tabs.forEach(item => {
    const active = item === tab;
    item.setAttribute('aria-selected', String(active));
    item.tabIndex = active ? 0 : -1;
    document.getElementById(item.getAttribute('aria-controls')).hidden = !active;
  });
  if (focus) tab.focus();
}
tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => selectTab(tab));
  tab.addEventListener('keydown', event => {
    const directions = { ArrowRight: (index + 1) % tabs.length, ArrowLeft: (index + tabs.length - 1) % tabs.length, Home: 0, End: tabs.length - 1 };
    if (event.key in directions) {
      event.preventDefault();
      selectTab(tabs[directions[event.key]], true);
    }
  });
});
const stay = document.querySelector('#stay-search');
const air = document.querySelector('#air-search');
const checkin = document.querySelector('#stay-checkin');
const checkout = document.querySelector('#stay-checkout');
const airDate = document.querySelector('#air-checkin');
const today = japanToday();
checkin.min = today;
checkin.value = addDays(today, 1);
checkout.value = addDays(today, 2);
checkout.min = addDays(checkin.value, 1);
airDate.min = today;
airDate.value = addDays(today, 30);
checkin.addEventListener('change', () => {
  if (!checkin.value) return;
  checkout.min = addDays(checkin.value, 1);
  if (!checkout.value || checkout.value <= checkin.value) checkout.value = checkout.min;
  checkout.setCustomValidity('');
});
const value = id => document.getElementById(id).value;
function attachSearch(form, build, errorField) {
  form.addEventListener('input', () => errorField.setCustomValidity(''));
  form.addEventListener('submit', event => {
    try {
      const parameters = build();
      Object.entries(parameters).forEach(([name, entry]) => {
        let input = form.querySelector(`input[type="hidden"][name="${name}"]`);
        if (!input) {
          input = document.createElement('input');
          input.type = 'hidden'; input.name = name; form.append(input);
        }
        input.value = entry;
      });
    } catch (error) {
      event.preventDefault();
      errorField.setCustomValidity(error.message);
      errorField.reportValidity();
    }
  });
}
attachSearch(stay, () => stayParams({ checkin: checkin.value, checkout: checkout.value, adults: value('stay-adults'), rooms: value('stay-rooms') }), checkout);
attachSearch(air, () => airParams({ checkin: airDate.value, nights: value('air-nights'), adults: value('air-adults'), airport: value('air-airport') }), airDate);
