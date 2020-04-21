<?php
function theme_option_page()
{ ?>
  <div class="wrap">
    <h1>Personalización del tema</h1>
    <form method="post" action="options.php">
      <?php settings_fields("theme-options-grp");
      do_settings_sections("theme-options");
      submit_button(); ?>
    </form>
  </div>
<?php }

function add_theme_menu_item()
{
  add_theme_page("Personalización del tema", "Personalización del tema", "manage_options", "theme-options", "theme_option_page", null, 99);
}
add_action("admin_menu", "add_theme_menu_item");


function display_instagram()
{ ?>
  <input name="instagram" id="instagram" placeholder="https://www.instagram.com/" value="<?php echo get_option('instagram'); ?>">
<?php }

function display_facebook()
{ ?>
  <input name="facebook" id="facebook" placeholder="https://web.facebook.com/" value="<?php echo get_option('facebook'); ?>">
<?php }

function display_whatsapp()
{ ?>
  <input name="whatsapp" id="whatsapp" placeholder="https://wa.me/" value="<?php echo get_option('whatsapp'); ?>">
<?php }

function theme_settings()
{
  add_settings_section( 'first_section', 'Redes Sociales', '', 'theme-options');

  add_settings_field('facebook', 'Facebook', 'display_facebook', 'theme-options', 'first_section');
  add_settings_field('instagram', 'Instagram', 'display_instagram', 'theme-options', 'first_section');
  add_settings_field('whatsapp', 'Whatsapp', 'display_whatsapp', 'theme-options', 'first_section');

  register_setting( 'theme-options-grp', 'facebook');
  register_setting( 'theme-options-grp', 'instagram');
  register_setting( 'theme-options-grp', 'whatsapp');
}
add_action('admin_init', 'theme_settings');

// function my_admin_scripts()
// {
//   wp_enqueue_media();
//   wp_register_script('my-admin-js', get_template_directory_uri() . '/helpers/my-admin.js', array('jquery'));
//   wp_enqueue_script('my-admin-js');
// }
// add_action('admin_enqueue_scripts', 'my_admin_scripts');