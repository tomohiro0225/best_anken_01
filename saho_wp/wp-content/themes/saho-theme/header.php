<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width" />
  <title>佐保工務店-<?php echo the_title(); ?>-</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
</head>
<body>
  <header class="l-header">
    <div class="l-header__container">

        <!-- ロゴ -->
        <h1 class="l-header__logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="佐保工務店"></a>
        </h1><!-- /ロゴ -->

        <!-- ナビゲーション -->
        <nav class="l-header__navi pc-on">
            <ul class="l-header__navi__items">
            <li class="l-header__navi__item"><a href="<?php the_permalink(8); ?>">会社理念</a></li>
            <li class="l-header__navi__item"><a href="<?php the_permalink(28); ?>">事業案内</a></li>
            <li class="l-header__navi__item"><a href="<?php echo home_url(); ?>/works/">実績紹介</a></li>
            <li class="l-header__navi__item"><a href="<?php the_permalink(21); ?>">会社概要</a></li>
            <li class="l-header__navi__item"><a href="<?php the_permalink(24); ?>">メンバー紹介</a></li>
            <li class="l-header__navi__item"><a href="<?php the_permalink(10); ?>">お問い合わせ</a></li>
          </ul>
        </nav><!-- /ナビゲーション -->

        <!-- menu -->
        <div class="menu-tirgger sp-on">
          <div class="menu-tirgger__wrap">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <!-- /menu -->

    </div>
</header>