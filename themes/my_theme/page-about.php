<?php get_header();

if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
<div class="content">
  <?php the_content(); ?>
</div>
<?php
   endwhile;
endif;
   
get_footer(); ?>