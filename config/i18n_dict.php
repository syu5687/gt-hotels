<?php
// 固定訳語を指定（完全一致置換）
// '*' は全言語共通、言語別は 'en','ko','tc','sc' キーに記述
return [
  '*' => [
    // 共通で守りたい固有名詞など
    'GARDEN TERRACE NAGASAKI' => 'GARDEN TERRACE NAGASAKI',
  ],
  'en' => [
    'レストラン「フォレスト」' => 'Restaurant “FOREST”',
    'フォレスト' => 'FOREST',
  ],
  'tc' => [
    'レストラン「フォレスト」' => '餐廳「FOREST」',
    'フォレスト' => 'FOREST',
  ],
  'sc' => [
    'レストラン「フォレスト」' => '餐厅“FOREST”',
    'フォレスト' => 'FOREST',
  ],
  'ko' => [
    'レストラン「フォレスト」' => '레스토랑 “FOREST”',
    'フォレスト' => 'FOREST',
  ],
];