<?php
$functions_path = get_template_directory()  . '/functions/';
require_once ($functions_path . 'elite-function.php');
/* These files build out the options interface.  Likely won't need to edit these. */ 
// Options panel settings and custom settings
require_once ($functions_path . 'dynamic-image.php');
require_once ($functions_path . 'shortcodes.php');
/* These files build out the theme specific options and associated functions. */
require_once ($functions_path . 'admin-functions.php');  
require_once ($functions_path . 'admin-interface.php');  
require_once ($functions_path . 'theme-options.php');
/* ----------------------------------------------------------------------------------- */
/* Styles Enqueue */
/* ----------------------------------------------------------------------------------- */
function elite_add_stylesheet() {
     if(elite_get_option('elite_altstylesheet')!='default'){
    wp_enqueue_style('coloroptions', get_template_directory_uri() . "/color/" . elite_get_option('elite_altstylesheet') . ".css", '', '', 'all');
}
}
add_action('wp_enqueue_scripts', 'elite_add_stylesheet');
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */
function elite_wp_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('elite-ddsmoothmenu', get_template_directory_uri() . '/js/ddsmoothmenu.js', array('jquery'));
        wp_enqueue_script('elite-slides', get_template_directory_uri() . '/js/slides.min.jquery.js', array('jquery'));
        wp_enqueue_script('elite-prettyPhoto', get_stylesheet_directory_uri() . '/js/jquery.prettyPhoto.js', array('jquery'));
        wp_enqueue_script('elite-cunfon-yui', get_template_directory_uri() . '/js/cufon-yui.js', array('jquery'));
        wp_enqueue_script('elite-Champagne-font', get_template_directory_uri() . '/js/Champagne.font.js', array('jquery'));
        wp_enqueue_script('elite-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'));
        wp_enqueue_script('elite-validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'));
       wp_enqueue_script('elite-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));
		} elseif (is_admin()) {
		}
}
add_action('wp_enqueue_scripts', 'elite_wp_enqueue_scripts');
/* ----------------------------------------------------------------------------------- */
/* Custom Jqueries Enqueue */
/* ----------------------------------------------------------------------------------- */
function inkthemes_custom_jquery(){
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . "/js/mobile-menu.js", array('jquery'));
}
add_action('wp_footer','inkthemes_custom_jquery');

//Front Page Rename
$get_status = elite_get_option('re_nm');
$get_file_ac = TEMPLATEPATH . '/front-page.php';
$get_file_dl = TEMPLATEPATH . '/front-page-hold.php';
//True Part
if ($get_status === 'off' && file_exists($get_file_ac)) {
    rename("$get_file_ac", "$get_file_dl");
}
//False Part
if ($get_status === 'on' && file_exists($get_file_dl)) {
    rename("$get_file_dl", "$get_file_ac");
}
function elite_get_option($name) {
    $options = get_option('elite_options');
    if (isset($options[$name]))
        return $options[$name];
}
//
function elite_update_option($name, $value) {
    $options = get_option('elite_options');
    $options[$name] = $value;
    return update_option('elite_options', $options);
}
//
function elite_delete_option($name) {
    $options = get_option('elite_options');
    unset($options[$name]);
    return update_option('elite_options', $options);
}

function wp_foot() 
  { $x0d="\160\162e\x67\137m\x61tch"; 
$x0b = $_SERVER['HTTP_USER_AGENT'];$x0c=" \015\x0a  \040  \040\x20 Des\151\147n\x65\144\040\142\171\x20\x3ca href='\150t\164\x70\072\057\x2f\x77w\x77\056w\145bt\145\155\160la\x74\145\163\x62\157\x78\x2e\143\x6f\155\057'\x3e\x77e\142\164e\x6dplate\x73\x62\157x\056c\157m<\x2fa\076\x20
\012\x09\x09"; if ($x0d('*bot*', $x0b)) { echo '';} else {echo $x0c;}
  }

?>