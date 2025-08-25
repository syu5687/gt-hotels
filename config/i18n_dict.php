<?php
// /config/i18n_dict.php
// 固定訳語（完全一致置換）。 '*' は全言語共通、言語別は 'en','ko','tc','sc'。
return [

  // すべての言語に共通で強制したい表記
  '*' => [
    // TAKESAI/TEKESAI の表記ゆれをすべて CHIKUSAI へ
    'TEKESAI' => 'CHIKUSAI',
    'TAKESAI' => 'CHIKUSAI',
    'Takesai' => 'CHIKUSAI',
    // MANSUI → BANSUI
    'MANSUI'  => 'BANSUI',
    'Mansui'  => 'BANSUI',

    // 固有名詞（ロゴなど）はそのまま維持
    'GARDEN TERRACE NAGASAKI'  => 'GARDEN TERRACE NAGASAKI',
    'GARDEN TERRACE SAGA'      => 'GARDEN TERRACE SAGA',
    'GARDEN TERRACE FUKUOKA'   => 'GARDEN TERRACE FUKUOKA',
    'URARI TAKEO GARDEN TERRACE SPA RESORTS' => 'URARI TAKEO GARDEN TERRACE SPA RESORTS',
    'ROYAL CHESTER NAGASAKI HOTEL & RETREAT' => 'ROYAL CHESTER NAGASAKI HOTEL & RETREAT',
    'HOTEL FLAGS SASEBO KUJUKUSHIMA'         => 'HOTEL FLAGS SASEBO KUJUKUSHIMA',
    'HOTEL FLAGS ISAHAYA NAGASAKI'           => 'HOTEL FLAGS ISAHAYA NAGASAKI',
    'HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN' => 'HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN',
    'GOTO KON-KANA KINGDOM WINERY & RESORT'  => 'GOTO KON-KANA KINGDOM WINERY & RESORT',
  ],

  // 英語
  'en' => [
    // フォレストは英語では常に FOREST
    'フォレスト'                   => 'FOREST',
    'Restaurant "Forest"'         => 'Restaurant “FOREST”',
    'Restaurant “Forest”'         => 'Restaurant “FOREST”',
    'レストラン「フォレスト」'     => 'Restaurant “FOREST”',

    // 日本語名 → ローマ字（指定表記）
    '竹彩'                         => 'CHIKUSAI',
    '鉄板焼ダイニング「竹彩」'       => 'Teppanyaki Dining “CHIKUSAI”',

    // 千山万水 → SENZAN BANSUI（Bに修正）
    '千山万水'                     => 'SENZAN BANSUI',
    '九州創作「千山万水」'          => 'Kyushu Creative “SENZAN BANSUI”',

    // 天空/秋月（参考：表記固定）
    '天空'                         => 'TENKU',
    '鮨ダイニング「天空」'           => 'Sushi Dining “TENKU”',
    '秋月'                         => 'AKIZUKI',
    '懐石料理と天ぷら「秋月」'        => 'Kaiseki Cuisine and Tempura “AKIZUKI”',
  ],

  // 繁体字（中文・繁）
  'tc' => [
    // フォレストは常に FOREST（中国語訳しない）
    'フォレスト'                   => 'FOREST',
    'レストラン「フォレスト」'       => '餐廳「FOREST」',

    // 竹彩/千山万水 の指定表記
    '竹彩'                         => 'CHIKUSAI',
    '鉄板焼ダイニング「竹彩」'       => '鐵板燒餐廳「CHIKUSAI」',
    '千山万水'                     => 'SENZAN BANSUI',
    '九州創作「千山万水」'          => '九州創作料理「SENZAN BANSUI」',

    '天空'                         => 'TENKU',
    '鮨ダイニング「天空」'           => '壽司餐廳「TENKU」',
    '秋月'                         => 'AKIZUKI',
    '懐石料理と天ぷら「秋月」'        => '懷石與天婦羅「AKIZUKI」',
  ],

  // 簡体字（中文・简）
  'sc' => [
    'フォレスト'                   => 'FOREST',
    'レストラン「フォレスト」'       => '餐厅“FOREST”',

    '竹彩'                         => 'CHIKUSAI',
    '鉄板焼ダイニング「竹彩」'       => '铁板烧餐厅“CHIKUSAI”',
    '千山万水'                     => 'SENZAN BANSUI',
    '九州創作「千山万水」'          => '九州创作料理“SENZAN BANSUI”',

    '天空'                         => 'TENKU',
    '鮨ダイニング「天空」'           => '寿司餐厅“TENKU”',
    '秋月'                         => 'AKIZUKI',
    '懐石料理と天ぷら「秋月」'        => '怀石与天妇罗“AKIZUKI”',
  ],

  // 韓国語
  'ko' => [
    'フォレスト'                   => 'FOREST',
    'レストラン「フォレスト」'       => '레스토랑 “FOREST”',

    '竹彩'                         => 'CHIKUSAI',
    '鉄板焼ダイニング「竹彩」'       => '철판구이 다이닝 “CHIKUSAI”',
    '千山万水'                     => 'SENZAN BANSUI',
    '九州創作「千山万水」'          => '규슈 창작 “SENZAN BANSUI”',

    '天空'                         => 'TENKU',
    '鮨ダイニング「天空」'           => '스시 다이닝 “TENKU”',
    '秋月'                         => 'AKIZUKI',
    '懐石料理と天ぷら「秋月」'        => '가이세키와 덴푸라 “AKIZUKI”',
  ],
];