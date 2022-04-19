<?php
get_header();
get_template_part('template-parts/nav');

?>

<div class="container-fluid mt-3">
  <div class="row">
    
    <div class="col-lg-2 col-sm-3">
      <?php 
      $query = new WP_Query( array( 
        'post_type' => 'html5',
        'orderby'   => array(
          'date' =>'asc',
        )
      )); 
      
      ?>

        <a href="javascript:void(0);" class="burger-menu" id="burger-menu">
          <i class="fa fa-bars"></i>
        </a>

        <ul class="lesson-sidebar-container">

          <li>
            <h4 style="font-weight:bold;">HTML5 TUTORIAL</h4>
            <i class="fa fa-times close-icon"></i>
          </li>

        <?php if ( $query->have_posts() ) : ?>
          <?php while($query->have_posts()): $query->the_post(); ?>

            <li><a id="html5-sidebar" class="sidebar-link-lesson" href="<?= $home.the_permalink() ?>" style="<??>"><i class="fas fa-arrow-alt-circle-right" style="margin-right:.3rem"></i><?= the_title(); ?></a></li>
        <?php endwhile; endif; wp_reset_query();?>
        </ul>
    </div>
    <div class="col-lg-7 col-sm-8 p-3" style="background-color:#fff;">

      <?php if ( have_posts() ) : ?>
        <?php while( have_posts()): the_post(); ?>

        <!-- Pagination Top -->
        <div class="top-pagination">
          <ul class="list-pag">
            <li>
              <?php next_post_link('%link', 'Next →'); ?>
            </li>
            <li>
              <?php previous_post_link('%link', '← Prev'); ?>
            </li>
          </ul>
        </div>

        <h2><?php the_title()?></h2>
        <p><?php the_content()?></p>
        
        
        <?php endwhile; endif; ?>

        
        <div>
          <?php if(get_next_post_link()): ?>
            <div class="next-topic">Next Topic:<?php next_post_link(); ?></div>
          <?php endif; ?>
        </div>
        <div class="clearfix"></div>

        <!-- Pagination Bottom -->
        <div class="bottom-pagination">
          <ul class="list-pag">
            <li>
              <?php next_post_link('%link', 'Next →'); ?>
            </li>
            <li>
              <?php previous_post_link('%link', '← Prev'); ?>
            </li>
          </ul>
        </div>
        
      
    </div>

  </div>  

  
</div>
  
<?php get_footer(); ?>