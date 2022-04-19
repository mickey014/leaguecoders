<?php
get_header();

get_template_part('template-parts/nav');
?>

<div class="row p-4 mt-2 w-100 mx-0">

  <div class="col-12 col-md-8 p-5" style="background-color:#fff;"> 
    <?php get_template_part('template-parts/404_template'); ?>
  </div>

  <?php get_template_part('template-parts/right_sidebar'); ?>
  
  
  
</div>

<?php get_footer(); ?>