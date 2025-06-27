 <?php 
function relaxed_axolotl_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), null, true);
    // Your custom script
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/theme-scripts.js', [], '1.0', true);	
	
}
add_action('wp_enqueue_scripts', 'relaxed_axolotl_enqueue_scripts');

function year_shortcode() {
    return date_i18n('Y');
}
add_shortcode('year', 'year_shortcode');