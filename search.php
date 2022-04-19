<?php
get_header();
get_template_part('template-parts/nav');
global $search_query;

$args = [
  'post_type' => $page_title,
  'numberposts'	=> -1,
  'orderby'   => 'menu_order title',
  's' => $search_val
];


$search_query = new WP_Query($args); 
?>

<?php if( ! empty( $_GET['s'] ) ): ?>
  <?php if(is_search_has_results()): ?>
    <div class="p-4 justify-content-center mt-2">

      <div class="row mt-2 mx-0">
        
        <?php get_template_part('template-parts/search_template'); ?>

        
      </div>
    </div>
    
  <?php else: ?>

    <div class="p-4 justify-content-center mt-2">

      <div class="row">
        <div class="col-12 col-md-8 p-5 search_res" style="background-color:#fff;"> 
          <?php get_template_part('template-parts/404_template'); ?>
        </div>
        <?php get_template_part('template-parts/right_sidebar'); ?>
      </div>  
    </div>
  <?php endif; ?>

<?php endif;?>  

<?php get_footer(); ?>
