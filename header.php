<?php include 'php/settings.php'; ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="de"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title>Bachelor Thesis<?php echo $contentInfo[$contentInfoId][3]; ?></title>
  <meta name="description" content="<?php echo $contentInfo[$contentInfoId][4]; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <link rel="stylesheet" href="assets/css/app.css">

  <!-- Search Engine -->
  <meta name="description" content="<?php echo $contentInfo[$contentInfoId][4]; ?>">
  <meta name="image" content="<?php echo $contentInfo[$contentInfoId][6]; ?>">

  <!-- Schema.org for Google -->
  <meta itemprop="name" content="<?php echo $contentInfo[$contentInfoId][5]; ?> - <?php echo $contentInfo[$contentInfoId][3]; ?>">
  <meta itemprop="description" content="<?php echo $contentInfo[$contentInfoId][4]; ?>">
  <meta itemprop="image" content="<?php echo $contentInfo[$contentInfoId][6]; ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="<?php echo $contentInfo[$contentInfoId][5]; ?> - <?php echo $contentInfo[$contentInfoId][3]; ?>">
  <meta name="twitter:description" content="<?php echo $contentInfo[$contentInfoId][4]; ?>">
  <meta name="twitter:site" content="@intenser_">
  <meta name="twitter:creator" content="@intenser_">
  <meta name="twitter:image:src" content="<?php echo $contentInfo[$contentInfoId][6]; ?>"><?php // Maximum dimension: 1024px x 512px; minimum dimension: 440px x 220px ?>
  <?php // <meta name="twitter:player" content="VIDEOURL"> ?>

  <!-- Twitter - Article -->
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="<?php echo $contentInfo[$contentInfoId][5]; ?> - <?php echo $contentInfo[$contentInfoId][3]; ?>">
  <meta name="og:description" content="<?php echo $contentInfo[$contentInfoId][4]; ?>">
  <meta name="og:image" content="<?php echo $contentInfo[$contentInfoId][6]; ?>"><?php // Recommended dimension: 1200px x 630px; minimum dimension: 600px x 315px ?>
  <meta name="og:url" content="<?php echo $url; ?>">
  <meta name="og:site_name" content="Intenser Graphics">
  <meta name="og:locale" content="de_DE">
  <?php //<meta name="og:video" content="VIDEOURL"> ?>
  <meta name="fb:admins" content="intenser">
  <meta name="og:type" content="article">

  <!-- Open Graph - Article -->
  <meta name="article:section" content="Technology">
  <meta name="article:published_time" content="2017-03-30T22:00:00+01:00">
  <meta name="article:author" content="<?php echo $contentInfo[$contentInfoId][5]; ?>">

  <!--[if lt IE 9]>
    <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
  <![endif]-->
</head>
<body class="<?php echo $class_body; ?>">
  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
