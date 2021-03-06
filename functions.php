<?php
require_once dirname( __FILE__ ) . '/helpers/TGM-Plugin-Activation-2.6.1/class-tgm-plugin-activation.php';

require_once dirname( __FILE__ ) . '/helpers/required-plugins.php';
require_once dirname( __FILE__ ) . '/helpers/rest_custom_endpoints.php';
require_once dirname( __FILE__ ) . '/helpers/theme-settings.php';

require_once dirname( __FILE__ ) . '/helpers/CPT/slide-cpt.php';
require_once dirname( __FILE__ ) . '/helpers/CPT/slide-metabox.php';

require_once dirname( __FILE__ ) . '/helpers/CPT/staff-cpt.php';
require_once dirname( __FILE__ ) . '/helpers/CPT/staff-metabox.php';

require_once dirname( __FILE__ ) . '/helpers/CPT/plans-cpt.php';

require_once dirname( __FILE__ ) . '/helpers/CPT/benefits-cpt.php';

add_theme_support( 'post-thumbnails' );

function emamut_setup() {
  load_theme_textdomain( 'emamut' );
}
add_action( 'after_setup_theme', 'emamut_setup' );

function add_theme_scripts() {
  wp_enqueue_style('fontawesome', '//use.fontawesome.com/releases/v5.2.0/css/all.css', array(), '1.1', 'all');
  wp_enqueue_style('bootstrap-vue', '//unpkg.com/bootstrap-vue@2.0.0-rc.11/dist/bootstrap-vue.css', array(), '1.1', 'all');
  wp_enqueue_style('main', get_template_directory_uri() . '/main.css');

  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', array (), 1.1, true);
  wp_enqueue_script('popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array (), 1.1, true);
  wp_enqueue_script('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array (), 1.1, true);

  wp_enqueue_script('vue', '//cdn.jsdelivr.net/npm/vue/dist/vue.js', array (), 1.1, true);
  wp_enqueue_script('axios', '//cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array (), 1.1, true);
  wp_enqueue_script('bootstrap-vue', '//unpkg.com/bootstrap-vue@latest/dist/bootstrap-vue.js', array (), 1.1, true);
  wp_enqueue_script('vue-carousel', '//ssense.github.io/vue-carousel/js/vue-carousel.min.js', array (), 1.1, true);

  if ( is_front_page() || is_page('contacto') ) {
    wp_enqueue_style('leaflet', '//unpkg.com/leaflet@1.6.0/dist/leaflet.css', array(), '1.1', 'all');
    wp_enqueue_script('leaflet', '//unpkg.com/leaflet@1.6.0/dist/leaflet.js', array (), 1.1, true);
    wp_enqueue_script('leaflet-provider', '//cdnjs.cloudflare.com/ajax/libs/leaflet-providers/1.9.1/leaflet-providers.min.js', array (), 1.1, true);

    wp_enqueue_script('map.js', get_template_directory_uri() . '/src/js/map.js', array (), 1.1, true);
  }

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

function my_sidebar() {
  register_sidebar(
    array (
      'name' => __( 'Sidebar', 'emamut' ),
      'id' => 'custom-side-bar',
      'description' => __( 'Custom Sidebar', 'emamut' ),
      'before_widget' => '<div class="widget-content">',
      'after_widget' => "</div>",
      'before_title' => '<h3 class="widget-title">',
      'after_title' => '</h3>',
    )
  );
}
add_action( 'widgets_init', 'my_sidebar' );

if (!is_admin()) {
  function wpb_search_filter($query) {
    if ($query->is_search)
      $query->set('post_type', 'post');
    return $query;
  }
  add_filter('pre_get_posts','wpb_search_filter');
}

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
  return 'class="page-link"';
}

function emamut_numeric_posts_nav() {
  if( is_singular() )
    return;

  global $wp_query;

  /** Stop execution if there's only 1 page */
  if( $wp_query->max_num_pages <= 1 )
    return;

  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $wp_query->max_num_pages );

  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;

  /** Add the pages around the current page to the array */
  if ( $paged >= 3 ) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }

  if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<nav aria-label="Blog navigation"><ul class="pagination pagination-sm">' . "\n";

  /** Previous Post Link */
  if ( get_previous_posts_link() )
    printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link('<i class="fas fa-chevron-left"></i>') );

  /** Link to first page, plus ellipses if necessary */
  if ( ! in_array( 1, $links ) ) {
    $class = 1 == $paged ? 'active' : '';

    printf( '<li class="page-item %s"><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if ( ! in_array( 2, $links ) )
      echo '<li class="page-item">…</li>';
  }

  /** Link to current page, plus 2 pages in either direction if necessary */
  sort( $links );
  foreach ( (array) $links as $link ) {
    $class = $paged == $link ? 'active' : '';
    printf( '<li class="page-item %s"><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }

  /** Link to last page, plus ellipses if necessary */
  if ( ! in_array( $max, $links ) ) {
    if ( ! in_array( $max - 1, $links ) )
      echo '<li class="page-item">…</li>' . "\n";

    $class = $paged == $max ? ' class="active"' : '';
    printf( '<li class="page-item"%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  /** Next Post Link */
  if ( get_next_posts_link() )
    printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link('<i class="fas fa-chevron-right"></i>') );

  echo '</ul></nav>' . "\n";
}

add_action('wp_head', 'myplugin_ajaxurl');
function myplugin_ajaxurl() {
  echo "<script type=\"text/javascript\">
          let siteURL = '" . get_site_url() . "',
          themePath = '" . get_template_directory_uri() ."',
          mapCoordinates = '" . get_option('coordinates') . "',
          contactForm = `" . do_shortcode('[contact-form-7 id="6" title="Principal"]') . "`
        </script>";
}