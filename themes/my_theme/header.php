<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href='http://fonts.googleapis.com/css?family=Rajdhani' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<div class="container">
  <div class="header clearfix">
    <div class="name">Kim Reid-Kuhn</div>
    <nav><?php if( has_nav_menu( 'top-nav' ) ) { /* if menu location 'primary-menu' exists then use custom menu */
        wp_nav_menu( array( 'theme_location' => 'top-nav', 'menu_class' => 'top-nav') ); 
      } ?></nav>
  <div class="clearfix"></div>
</div>

<body>
  