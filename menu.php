<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-transparent" id="navbar-main" role="navigation">
  <div class="container position-relative">
    <a class="navbar-brand" href="<?php echo get_site_url() ?>">
      <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" id="logo" alt="" class="img-fluid">
    </a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
      <img src="<?php echo get_template_directory_uri() ?>/img/mobile-icon.png" alt="" class="img-fluid">
    </button>
    <?php
      wp_nav_menu( array(
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav ml-auto',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
    ?>
  </div>
</nav>