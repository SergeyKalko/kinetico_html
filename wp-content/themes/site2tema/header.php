<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php bloginfo (); ?></title>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo (template_url); ?>/css/main.css">
</head>
<body>
  <div class="main-wrap">
    <div class="header">
      <ul class="main-menu">
        <li><a href="#">Login</a></li>
        <li><a href="#">Register</a></li>
        <li><img title="cart" src="<?php bloginfo (template_url); ?>/img/cart.png" alt="tut cart)"><a href="#"><span>4</span>items in cart</a></li>
      </ul>
    </div>
    <div class="menu-wrap">
      <p class="gear"><img title="gear" src="<?php bloginfo (template_url); ?>/img/gear.png" alt="tut gear)"></p>
      <?php 
        wp_nav_menu( array(
          'menu_class'=>'menu-top',
          'theme_location'=>'top',
          'after'=>' '
        ) );
      ?>
    </div>
    <div class="blog">
      <p class="big-blog">BLOG</p>
      <p class="text-blog">Writing about awesomness</p>
    </div>