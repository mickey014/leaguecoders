<nav class="navbar navbar-expand-lg leaguecoder-navbar navbar-light">
      <div class="container-fluid">
        
        <div class="d-flex">
          <a href="<?= home_url()?>" id="lc_home_url"><i class="fa fa-home"></i></a>
          <?php
            wp_nav_menu(array(
              'theme_location' => 'header_nav_menu',
              'container' => '',
              'menu_class' => 'leaguecoder-menu',
              'walker' => new WPDocs_Walker_Nav_Menu()
            ));
          ?> 
        </div>
      </div>
    </nav>

</header>