<?php
// アセットのキャッシュバスター
define('ASSET_VER', '2025.08.18');

// ルート相対URL（/_assets/...）をそのまま返す想定
function url($path){ return $path; }

// アセットURL（?v= 付き）
function asset($path){
  $q = (strpos($path,'?')!==false) ? '&' : '?';
  return url($path).$q.'v='.ASSET_VER;
}

// 現在ページ判定（ナビ用）
function is_active($filenames = []){
  $current = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  foreach((array)$filenames as $n){ if($current === $n) return 'aria-current="page" class="is-active"'; }
  return '';
}