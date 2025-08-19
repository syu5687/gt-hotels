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

// ページ名からCSSを自動で決定する関数
function pageCss() {
  $script = basename($_SERVER['SCRIPT_NAME'], '.php'); // 例: gtn.php → gtn
  $cssPath = "/_assets/css/{$script}.css";
  $fullPath = $_SERVER['DOCUMENT_ROOT'].$cssPath;

  // 該当CSSファイルが存在する場合だけlinkタグを返す
  if (file_exists($fullPath)) {
    return '<link rel="stylesheet" href="'.asset($cssPath).'">';
  }
  return '';
}