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
  <link rel="stylesheet" id="my_theme-style-css" href="http://localhost:8888/kim_reid-kuhn/wp-content/themes/my_theme/style.css" type="text/css" media="all">
	<?php wp_head(); ?>
</head>
<div class="container">
  <div class="header clearfix">
    <div class="name">Kim Reid-Kuhn</div>
    <nav><select name="page-dropdown"
         onchange='document.location.href=this.options[this.selectedIndex].value;'> 
         <option value="">

        <?php echo esc_attr( __( 'Select page' ) ); ?></option> 
         <?php 
          $args = array('child_of' => 0); $pages = get_pages($args); 
          foreach ( $pages as $page ) {
            $option = '<option value="' . get_page_link( $page->ID ) . '">';
          $option .= $page->post_title;
          $option .= '</option>';
          echo $option;
          }
         ?>
        </select></nav>
  <div class="clearfix"></div>
</div>

<body>
  