<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="/favicon.ico" rel="icon" type="image/x-icon">
  
  <?php if ($page->isHomePage()): ?>
  <title>Colin Johnston - Product Design, Visual Design, UX Strategy, Brand Development - San Francisco Web Design</title>
  <?php else: ?>
  <title><?= $page->title() . ' – ' . $site->title() ?></title>
  <?php endif ?>

  <?php echo $page->metaTags(['link', 'og', 'twitter']) ?>

  <link rel="stylesheet" href="/assets/css/halkaBox.min.css" >
  <link rel="stylesheet" href="/assets/css/main.min.css" >
  <!-- <script src="/assets/js/modernizr.foundation.js"></script> -->
  <script defer src="/assets/js/picturefill.min.js"></script>
  <script defer src="/assets/js/halkaBox.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script> -->
  <script async src="/assets/js/app.min.js"></script>
  <?php snippet('fathom') ?>

</head>
<body>
