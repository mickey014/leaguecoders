<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description')?>">
  <title><?php bloginfo('name')?></title>
  <?php wp_head()?>
</head>
<body <?php body_class()?> >

  <?php
    wp_body_open();
    global $wp;
    $home = get_home_url() .'/';
    
    
  ?>

  <header id="header">
    
    <nav class="navbar-above">
      <div class="container">
        <?php
        if ( has_custom_logo() ) {
          the_custom_logo();
        } else { ?>   
          <a class="site-title" href="<?= get_home_url()?>">
          <?php bloginfo('name');
        } ?>

        <!-- The form -->
        <div class="wrap">
          <div class="search">
            <form action="<?= home_url();?>" method="GET">
              <input name="s" type="text" class="searchTerm" placeholder="Search Anything..." autocomplete="off">
              <button id="searchBtn" type="submit" class="searchButton"><i class="fas fa-search"></i></button>
            </form>
          </div>
        </div>


      </div>
    </nav>

    
  