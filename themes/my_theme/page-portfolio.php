<?php get_header();

 $args = array('child_of' => 0); $pages = get_pages($args); 
 foreach ( $pages as $page ) {
   echo $page;
   }
   
get_footer(); ?>

