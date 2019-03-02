<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if (!is_single()) { ?>
    <meta name="description"
          content="Shravan Kumar Kasagoni is a web developer, designer, and writer who breaks down complex concepts for all skill levels.">
  <?php } ?>
  <?php wp_head(); ?>
</head>

<body>

  <h1 class="screen-reader-text">Shravan Kumar Kasagoni</h1>
  <a class="screen-reader-text" href="#main-content">Skip Navigation</a>

  <nav class="nav">
    <div class="nav-container">
      <div class="brand">
        <a href="<?php echo site_url(); ?>">
          <img src="<?php echo site_url(); ?>/wp-content/uploads/site-icon-150x150.png" class="brand-icon">
          <span>Shravan Kumar Kasagoni</span>
        </a>
      </div>
      <div class="links">
        <a href="http://theshravan.net">About me</a>
        <a href="http://theshravan.net/blog/">Blog</a>
        <a href="http://theshravan.net#publications">Publications</a>
<!--        <a href="--><?php //echo site_url(); ?><!--/newsletter">Newsletter</a>-->
      </div>
      <div class="extra">
        <a href="https://twitter.com/techieshravan" class="nav-icon" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://github.com/techieshravan" class="nav-icon" target="_blank"><i class="fab fa-github"></i></a>
      </div>
    </div>
  </nav>

  <main id="main-content">