<?php

$url = explode('/',home_url( $wp->request ));
$pages = get_pages(array(
  'sort_column' => 'menu_order'
));

$page_title = [];

if($pages) {
  foreach($pages as $page) {
    $page_title[] = $page->post_title;
  }
}

if($url[5] === $page_title[0] || $url[5] === $page_title[1] || $url[5] === $page_title[2] ||$url[5] === $page_title[3] || $url[5] === $page_title[4]) {
  require get_template_directory() . '/404.php';
  die;
} 

get_header();
get_template_part('template-parts/nav');

?>

<?php if($pages):?>
  <?php foreach($pages as $page):?>

    <section class="section-<?=$page->post_title?> section">
      <div class="container-fluid">
	
      
        <div class="page-wrapper">
          <h2 class="page-title"><?=$page->post_title?></h2>
          <p class="page-content"><?=$page->post_content?></p>
          <a class="btn btn-block lesg-btn" href="<?= $home.$page->post_title .'/home'?>">Let's Go</a>
        </div>

        
        
      </div>
    </section>


  <?php endforeach;?>
<?php endif;?>
<?php get_footer(); ?>