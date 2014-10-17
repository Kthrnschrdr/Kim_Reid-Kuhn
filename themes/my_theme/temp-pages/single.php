<?php get_header(); ?>

<div class="content">
<? if (have_posts()) :
   while (have_posts()) :
      the_post();
?>
<div class="content">
  <?php the_content(); ?>
</div>
<?php
   endwhile;
endif;
</div>

<?php get_footer(); ?>
