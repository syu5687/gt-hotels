<?php
// アセットのキャッシュバスター
define('ASSET_VER', '2025.08.19');

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

/**
 * ページ名からCSSを自動決定（gtn.php→gtn.css / gts.php→gts.css）
 * - フロントコントローラ環境でも動くよう REQUEST_URI を優先
 * - DOCUMENT_ROOT が未設定な環境のフォールバックも用意
 */
function pageCss(){
   // 例: /foo/bar/gtn.php → gtn
   $reqPath = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? '';
   $name    = pathinfo($reqPath, PATHINFO_FILENAME) ?: 'index';
 
   // index.php の場合は CSS を読み込まない
   if ($name === 'index') {
     return '';
   }
 
   $cssPathWeb = "/_assets/css/{$name}.css";
 
   // 実ファイルパスの解決（DOCUMENT_ROOT が無い環境用の保険込み）
   $docRoot = rtrim($_SERVER['DOCUMENT_ROOT'] ?? '', '/');
   $try1    = $docRoot ? ($docRoot.$cssPathWeb) : null;
   $try2    = realpath(__DIR__.'/../..').$cssPathWeb; // config/ からプロジェクトルート想定
 
   $exists  = ($try1 && is_file($try1)) || is_file($try2);
 
   if ($exists){
     return '<link rel="stylesheet" href="'.asset($cssPathWeb).'">';
   }
   return '';
 }
 