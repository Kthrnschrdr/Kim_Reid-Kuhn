<?php get_header(); ?>

<?php if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
<div class="content">
  <?php the_content(); ?>
</div>
<?php
   endwhile;
endif;

 $args = array('child_of' => 0); $pages = get_pages($args); 
 foreach ( $pages as $page ) {
   echo $page;
   }
   
get_footer(); ?>