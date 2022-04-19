<div class="col-12 col-md-4 right-sidebar">
  <div>
    <h3 class="h3_sidebar" style="">Feedback</h3>
    <p class="search_feedback">
      <i class="far fa-hand-point-right" style="margin-right: .5rem;"></i>Send your feedback to kirkmendoza9@gmail.com
    </p>
  </div>
  <div>
    <h3 class="h3_sidebar">Latest Updates</h3>

    <ul class="ul_latest_updates">
    <?php 
    
    $pages = get_pages(array(
      'sort_column' => 'menu_order'
    ));

    // print_r($pages);

    if($pages) {
      foreach($pages as $page) {
        $page_title[] = $page->post_title;
      }
    }

    $right_sidebar_search_query = new WP_Query( array( 
      'post_type' => $page_title,
      'orderby'   => array(
        'date' =>'desc',
      )
    )); 
    
    

    $latest_count = 0;
    ?>
    <?php while($right_sidebar_search_query->have_posts()): $right_sidebar_search_query->the_post(); 
    $latest_count++;
    $latest_updates_title = get_the_date();
    $dt = DateTime::createFromFormat('!d/m/Y', $latest_updates_title);

    //# 24 DEC remove the 0 of the first string
    $the_time = get_the_time('dS M');
    $the_time = ltrim($the_time, '0');
    ?>
      <li>
        <span><?=$latest_count;?>.&nbsp;</span>
        <a class="latest_updates_link" href="<?= $home.the_permalink() ?>"><?= $the_time; ?> - <?= the_title(); ?></a>
      </li>
    <?php  endwhile;wp_reset_query();?>
    </ul>
  </div>
</div>