<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <title><?php wp_title('|', true, 'right'); bloginfo('name') ?></title>
  </head>
  <body <?php body_class(); ?>>
    <!----------------------------------------------------------------- Header -->
    <header class="header section__padding">
      <a href="/" class="header__logo">
        <i class="fa-solid fa-tooth"></i>
        <h2 class="header__logo--title">Medicia</h2>
      </a>

      <ul class="header__nav">
        <li <?php if (is_page('about-us')) echo 'class="current-link"' ?>>
          <a class="header__nav--link" href="<?php echo site_url('about-us'); ?>">About us</a>
        </li>
        <li <?php if (is_page('doctors')) echo 'class="current-link"' ?> ><a class="header__nav--link" href="<?php echo site_url('doctors'); ?>">Doctors</a></li>
        <li <?php if (is_page('booking')) echo 'class="current-link"' ?>><a class="header__nav--link" href="<?php echo site_url('booking'); ?>">Book An Appointment</a></li>
        <li <?php if (is_page('services')) echo 'class="current-link"' ?>><a class="header__nav--link" href="<?php echo site_url('services'); ?>">Services</a></li>
        <li <?php if (is_page('faq')) echo 'class="current-link"' ?>><a class="header__nav--link" href="<?php echo site_url('faq'); ?>">FAQ</a></li>
      </ul>
    </header>