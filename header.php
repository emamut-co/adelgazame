<!DOCTYPE html>
  <html lang="<?php language_attributes(); ?>" class="no-js">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); wp_title(); ?></title>

    <?php wp_head(); ?>
  </head>
  <body>
    <script>
      let siteURL = '<?php echo get_site_url() ?>',
        themePath = '<?php echo get_template_directory_uri() ?>',
        mapCoordinates = '<?php echo get_option('coordinates') ?>';
    </script>

    <?php include('menu.php') ?>
    <div class="container-fluid px-0" id="app" v-cloak>
      <ul id="social" class="d-none d-md-block">
        <li>
          <a href="<?php echo get_option('facebook') ?>" target="_blank"><i class="fab fa-facebook fa-2x text-white"></i></a>
        </li>
        <li>
          <a href="<?php echo get_option('instagram') ?>" target="_blank"><i class="fab fa-instagram fa-2x text-white"></i></a>
        </li>
        <li>
          <a href="<?php echo get_option('whatsapp') ?>" target="_blank"><i class="fab fa-whatsapp fa-2x text-white"></i></a>
        </li>
      </ul>

      <button class="btn btn-dark py-2 px-3 d-none d-md-block" data-toggle="modal" data-target="#schedule-modal" id="schedule-button">
        <img src="<?php echo get_template_directory_uri() ?>/img/schedule-icon.png" alt="" class="img-fluid"> <strong class="ml-2"> Agenda tu cita</strong>
      </button>