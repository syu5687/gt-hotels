<?php require_once __DIR__.'/../config/app.php'; ?>
<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <title><?= isset($pageTitle)? ($pageTitle.' | '):'' ?>Garden Terrace Hotels</title>
  <meta name="description" content="<?= isset($pageDesc)? htmlspecialchars($pageDesc) : 'Garden Terrace Hotels | Luxury / City Resort / Relax' ?>" />

  <link rel="preload" as="image" href="<?= asset('/_assets/images/hero.jpg') ?>">
  <link rel="preload" as="video" href="<?= asset('/_assets/media/hero.mp4') ?>" type="video/mp4">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= asset('/_assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= asset('/_assets/css/header-footer.css') ?>">
  <script defer src="/_assets/js/i18n.js"></script>
  <!-- ページ固有CSS -->
  <?= pageCss() ?>
</head>
<body>