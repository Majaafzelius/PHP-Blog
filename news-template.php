<?php /* Template Name: News Template */
get_header();
?>

<h2><?php the_title()?></h2>
<div class="container">
<?php 
the_content();
if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;
?>
</div>
<?php

get_footer(); 
?>