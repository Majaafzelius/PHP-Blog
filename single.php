
<?php 
get_header();
// skriver ut inlägg i sin helhet
if (have_posts()) : while (have_posts()) : the_post(); ?>
  <h2><?php the_title(); ?></h2>
  <?php the_content();
  endwhile; endif; 
get_footer();
?>
