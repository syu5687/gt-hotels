export const HOTEL_CODE = '019c5598-a32d-73ec-88a7-e74591c94c12';
export function japanToday(now = new Date()) {
  const parts = new Intl.DateTimeFormat('en-CA', { timeZone: 'Asia/Tokyo', year: 'numeric', month: '2-digit', day: '2-digit' }).formatToParts(now);
  const value = type => parts.find(part => part.type === type).value;
  return `${value('year')}-${value('month')}-${value('day')}`;
}
export function addDays(iso, days) {
  if (!/^\d{4}-\d{2}-\d{2}$/.test(iso)) throw new Error('日付を選択してください。');
  const date = new Date(`${iso}T00:00:00Z`);
  if (Number.isNaN(date.valueOf()) || date.toISOString().slice(0, 10) !== iso) throw new Error('日付を確認してください。');
  date.setUTCDate(date.getUTCDate() + days);
  return date.toISOString().slice(0, 10);
}
function count(value, max) {
  const n = Number(value);
  if (!Number.isInteger(n) || n < 1 || n > max) throw new Error('人数・泊数・部屋数を確認してください。');
  return String(n);
}
function validStart(date, today) {
  addDays(date, 0);
  if (date < today) throw new Error('本日以降の日付を選択してください。');
}
const slashDate = date => date.replaceAll('-', '/');
export function stayParams({ checkin, checkout, adults, rooms }, today = japanToday()) {
  validStart(checkin, today);
  addDays(checkout, 0);
  if (checkout <= checkin) throw new Error('チェックアウトはチェックインの翌日以降を選択してください。');
  return { code: HOTEL_CODE, checkin: slashDate(checkin), checkout: slashDate(checkout), adults: count(adults, 3), room_count: count(rooms, 9), kids_tiers: '[]', type: 'plan', is_day_use: 'false' };
}
export function airParams({ checkin, nights, adults, airport }, today = japanToday()) {
  validStart(checkin, today);
  const numberOfNights = count(nights, 7);
  if (!/^[A-Z]{3}$/.test(airport)) throw new Error('出発空港を選択してください。');
  const checkout = addDays(checkin, Number(numberOfNights));
  return { hc: 'HSG15', cid: 'builtingadget_HSG15', cIn: slashDate(checkin), cOut: slashDate(checkout), depAirDate: slashDate(checkin), arrAirDate: slashDate(checkout), goDepAirPort: airport, rtnArrAirPort: airport, goArrAirPort: 'HSG', rtnDepAirPort: 'HSG', dpPerson: count(adults, 5) };
}
