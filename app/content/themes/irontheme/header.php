<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="format-detection" content="telephone=no">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper">
  <header class="header">
    <div class="container">

      <a href="<?php echo home_url( '/' ); ?>" class="logo header__logo">
        <img src="<?php echo THEME_URL; ?>/images/general/logo.svg" width="120" alt="Boss">
      </a>
      
      <p class="header__descr">Центр притяжения успеха</p>

      <nav class="nav header__nav">
        <button type="button" class="nav__close"></button>

        <ul class="nav-list">
          <li><a href="/#about">О нас</a></li>
          <li><a href="/#offices">Обзор сервисных офисов</a></li>
          <li><a href="/#on-maps">Мы на карте</a></li>
          <li><a href="/#advantages">Ваши преимущества</a></li>
          <li><a href="/#contact">Контакты</a></li>
        </ul>

        <div class="phone nav__phone">
          <?php $phone = get_field( 'phone', 'option' ); ?>
          <a href="tel:<?php echo preg_replace( '![^0-9\+]+!', '', $phone); ?>" class="phone__tel">
            <?php ith_the_icon( 'phone' ); ?>
            <?php echo $phone; ?>
          </a><br>
          <a href="#" class="phone__callback callback_open">Заказать обратный звонок</a>
        </div>
        
      </nav>

      <div class="nav-overlay"></div>

      <div class="phone header__phone">
        <?php $phone = get_field( 'phone', 'option' ); ?>
        <a href="tel:<?php echo preg_replace( '![^0-9\+]+!', '', $phone); ?>" class="phone__tel">
          <?php ith_the_icon( 'phone' ); ?>
          <?php echo $phone; ?>
        </a><br>
        <a href="#" class="phone__callback callback_open">Заказать обратный звонок</a>
      </div>

      <button type="button" class="nav-toggle">
        <span class="nav-toggle__line"></span>
      </button>

    </div>
  </header><!-- /.header-->

  <div class="content">