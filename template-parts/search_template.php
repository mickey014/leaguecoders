<?php
if($_GET['s'] && !empty($_GET['s'])) {
  $search_val = $_GET['s'];
}

$site_name = explode('/', get_template_directory_uri());

// $site_name[7] - Site Name

$pages = get_pages(array(
  'sort_column' => 'menu_order'
));

if($pages) {
  foreach($pages as $page) {
    $page_title[] = $page->post_title;
  }
}
$args = [
  'post_type' => $page_title,
  'numberposts'	=> -1,
  'orderby'   => 'menu_order title',
  's' => $search_val
];


$search_query = new WP_Query($args); 

?>


<?php
if($search_query->found_posts <= 0 ) {
  ?>
  <div class="col-12 col-md-8 p-5 search_res" style="background-color:#fff;"> 
  <?php
  get_template_part('template-parts/404_template');

}  else {
?>

<div class="col-12 col-md-8 p-5 search_res" style="background-color:#fff;">

  <h3 class="search-heading"> 
    <?= $search_query->found_posts; ?>
    Search Results Found For: <strong><?= $search_val;?></strong>
  </h3>
  <?php } ?>
    <ul class="list-unstyled mt-5 mx-auto search-ul">
    



  <?php if ( $search_query->have_posts() ) :

    // if($_GET['s'] == $search_query_html5->title):
    while($search_query->have_posts()): $search_query->the_post(); 
      
    $title = get_the_title(); $keys= explode(" ",$s); $title = preg_replace('/('.implode('|', $keys) .')/iu', '<strong class="search-excerpt">\0</strong>', $title);
      
      ?>

    <li class="mb-5">
      <p class="folder_dir"><?= home_url();?></p>
      <p>
        <a class="site_name" href="<?php $home. the_permalink()?>">
        <?php echo $site_name[7]; ?>
        <span>-</span>
        <?=$title; ?>
      </a>
      </p>
      <p>
        <small><?= wp_trim_words( get_the_content(), 20 ); ?></small>
      </p>
      
    </li>
    
<?php endwhile; endif; wp_reset_postdata(); ?>
        
      </ul>

    </div>

<?php get_template_part('template-parts/right_sidebar'); ?>
