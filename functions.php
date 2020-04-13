<?php
require_once dirname( __FILE__ ) . '/helpers/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';

require_once dirname( __FILE__ ) . '/helpers/required-plugins.php';
require_once dirname( __FILE__ ) . '/helpers/rest_custom_endpoints.php';

require_once dirname( __FILE__ ) . '/helpers/CPT/slide-cpt.php';
require_once dirname( __FILE__ ) . '/helpers/CPT/slide-metabox.php';

require_once dirname( __FILE__ ) . '/helpers/CPT/staff-cpt.php';
require_once dirname( __FILE__ ) . '/helpers/CPT/staff-metabox.php';

add_theme_support( 'post-thumbnails' );

function emamut_setup() {
  load_theme_textdomain( 'emamut' );
}
add_action( 'after_setup_theme', 'emamut_setup' );

function add_theme_scripts() {
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array (), 1.1, true);
  wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array (), 1.1, true);
  wp_enqueue_script('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array (), 1.1, true);

  wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.2.0/css/all.css', array(), '1.1', 'all');

  wp_enqueue_script('vue', '//cdn.jsdelivr.net/npm/vue/dist/vue.js', array (), 1.1, true);
  wp_enqueue_script('axios', '//cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array (), 1.1, true);

  if ( is_home() ) {
    wp_enqueue_style('leaflet', '//unpkg.com/leaflet@1.6.0/dist/leaflet.css', array(), '1.1', 'all');
    wp_enqueue_script('leaflet', '//unpkg.com/leaflet@1.6.0/dist/leaflet.js', array (), 1.1, true);
    wp_enqueue_script('leaflet-provider', '//cdnjs.cloudflare.com/ajax/libs/leaflet-providers/1.9.1/leaflet-providers.min.js', array (), 1.1, true);

    wp_enqueue_script('map.js', get_template_directory_uri() . '/src/js/map.js', array (), 1.1, true);
  }

  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');

  $components_folder = '/src/js/components/';
  $files = array_diff(scandir(dirname( __FILE__ ) . $components_folder), array('.', '..'));

  foreach($files as $key => $file)
    wp_enqueue_script($file, get_template_directory_uri() . $components_folder . $file, array (), 1.1, true);

  wp_enqueue_script('app.js', get_template_directory_uri() . '/src/js/app.js', array (), 1.1, true);
  wp_enqueue_script('helpers.js', get_template_directory_uri() . '/src/js/helpers.js', array (), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'adelgazame' ),
) );

function register_navwalker() {
	require_once get_template_directory() . '/helpers/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function my_favicon() { ?>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/img/favicon.ico' ?>" >
<?php }
add_action('wp_head', 'my_favicon');