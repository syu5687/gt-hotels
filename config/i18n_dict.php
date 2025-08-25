<?php
// /config/i18n_dict.php
return [
  // 全言語共通で守りたい固有名詞（そのまま出したいとき）
  '*' => [
    'GARDEN TERRACE NAGASAKI' => 'GARDEN TERRACE NAGASAKI',
    'GARDEN TERRACE SAGA'     => 'GARDEN TERRACE SAGA',
    'GARDEN TERRACE FUKUOKA'  => 'GARDEN TERRACE FUKUOKA',
    'URARI TAKEO GARDEN TERRACE SPA RESORTS' => 'URARI TAKEO GARDEN TERRACE SPA RESORTS',
    'ROYAL CHESTER NAGASAKI HOTEL & RETREAT' => 'ROYAL CHESTER NAGASAKI HOTEL & RETREAT',
    'HOTEL FLAGS SASEBO KUJUKUSHIMA'         => 'HOTEL FLAGS SASEBO KUJUKUSHIMA',
    'HOTEL FLAGS ISAHAYA NAGASAKI'           => 'HOTEL FLAGS ISAHAYA NAGASAKI',
    'HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN' => 'HOTEL FLAGS SASEBO KUJUKUSHIMA the BEKKAN',
    'GOTO KON-KANA KINGDOM WINERY & RESORT'  => 'GOTO KON-KANA KINGDOM WINERY & RESORT',
  ],

  // ───── 英語：DeepLが出す英語をキーに → 望む最終表記へ上書き ─────
  'en' => [
    // FOREST を必ず大文字に・引用符ゆらぎ対応
    'Restaurant "Forest"'  => 'Restaurant “FOREST”',
    'Restaurant “Forest”'  => 'Restaurant “FOREST”',
    "Restaurant 'Forest'"  => 'Restaurant “FOREST”',

    // TAKESAI（またはCHIKUSAIにしたいならこっちを使う）
    'Teppanyaki dining "Takesai"' => 'Teppanyaki Dining “CHIKUSAI”',
    'Teppanyaki Dining "Takesai"' => 'Teppanyaki Dining “CHIKUSAI”',
    'Teppanyaki Dining “Takesai”' => 'Teppanyaki Dining “CHIKUSAI”',

    // DeepL の大文字小文字ゆらぎ吸収
    'Teppanyaki dining “Chikusai”' => 'Teppanyaki Dining “CHIKUSAI”',
    'Teppanyaki Dining “Chikusai”' => 'Teppanyaki Dining “CHIKUSAI”',

    // TENKU / AKIZUKI
    'Sushi dining "Tenku"' => 'Sushi Dining “TENKU”',
    'Sushi Dining "Tenku"' => 'Sushi Dining “TENKU”',
    'Sushi Dining “Tenku”' => 'Sushi Dining “TENKU”',

    'Kaiseki Cuisine and Tempura "Akizuki"' => 'Kaiseki Cuisine and Tempura “AKIZUKI”',
    'Kaiseki cuisine and tempura "Akizuki"' => 'Kaiseki Cuisine and Tempura “AKIZUKI”',
    'Kaiseki Cuisine and Tempura “Akizuki”' => 'Kaiseki Cuisine and Tempura “AKIZUKI”',

    // Kyushu / Senzan Mansui の表記を正す
    'Kyusyu' => 'Kyushu',
    'Senzan Bansui' => 'Senzan Mansui',
    'Kyusyu Creative "Senzan Bansui"' => 'Kyushu Creative “Senzan Bansui”',
    'Kyushu Creative "Senzan Bansui"' => 'Kyushu Creative “Senzan Bansui”',
    'Kyushu Creative “Senzan Bansui”' => 'Kyushu Creative “Senzan Bansui”',
  ],

  // ───── 繁体字（tc）：FORESTなどを大文字で固定 ─────
  'tc' => [
    '餐廳「Forest」' => '餐廳「FOREST」',
    '餐廳“Forest”'   => '餐廳「FOREST」',
    'Forest'          => 'FOREST',

    '竹彩' => 'CHIKUSAI',
    '天空' => 'TENKU',
    '秋月' => 'AKIZUKI',

    // 任意：表記ブレ補正
    '千山萬水' => 'SENZAN BANSUI',
  ],

  // ───── 簡体字（sc） ─────
  'sc' => [
    '餐厅“Forest”' => '餐厅“FOREST”',
    '餐廳“Forest”' => '餐厅“FOREST”',
    'Forest'        => 'FOREST',

    '竹彩' => 'CHIKUSAI',
    '天空' => 'TENKU',
    '秋月' => 'AKIZUKI',
    '千山万水' => 'SENZAN BANSUI',
  ],

  // ───── 韓国語（ko） ─────
  'ko' => [
    '레스토랑 “Forest”' => '레스토랑 “FOREST”',
    'Forest'            => 'FOREST',

    '竹彩' => 'CHIKUSAI',
    '天空' => 'TENKU',
    '秋月' => 'AKIZUKI',
    '千山万水' => 'SENZAN BANSUI',
  ],
];