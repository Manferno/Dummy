<?php
// Theme config
add_theme_support('post-thumbnails');
add_theme_support('menus');

// Registro de menú principal
function wpb_custom_menu()
{
    register_nav_menus(
        array(
            'menu-principal' => __('Menú Principal'),
            'menu-footer' => __('Menú Footer')
        )
    );
}

add_action('init', 'wpb_custom_menu');

// Eliminar barra de admin
show_admin_bar(false);

// Registro de archivos estáticos
function pp_scripts()
{
    // Styles
    wp_enqueue_style('pp_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), '5.2.3', 'all');
    wp_enqueue_style('pp_aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css', array(), '2.3.1', 'all');
    wp_enqueue_style('pp_fontawesome', get_stylesheet_directory_uri() . '/static/vendor/fontawesome/all.min.css', array(), '5.0.0', 'all');
    wp_enqueue_style('pp_owlcarousel', get_stylesheet_directory_uri() . '/static/vendor/owlcarousel/owl.carousel.min.css', array(), '2.0', 'all');
    
    wp_enqueue_style('pp_theme', get_stylesheet_directory_uri() . '/static/css/main.css?v=' . rand(1,9999), array(), '1.0', 'all');

    // Scripts    
    wp_enqueue_script('js_bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), '5.2.3', true);
    wp_enqueue_script('js_lazy', 'https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.5/dist/lazyload.min.js', array(), '5.2.3', true);
    wp_enqueue_script('js_aos', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), '2.3.1', true);
    wp_enqueue_script('js_jpuaj', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', true);
    wp_enqueue_script('js_owlcarousel', get_stylesheet_directory_uri() . '/static/vendor/owlcarousel/owl.carousel.min.js', array('jquery'), '2.0', true);

    wp_enqueue_script('js_main', get_stylesheet_directory_uri() . '/static/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'pp_scripts');

# Adición de página de opciones
if( function_exists('acf_add_options_page') )
{
    acf_add_options_page(array(
        'page_title'    => 'Opciones del tema',
        'menu_title'    => 'Customización',
        'menu_slug'     => 'theme-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

# Activación de cookies
add_action('init', 'web_session_start', 1);
function web_session_start() {
    if( !session_id() ) {
        session_name('BIOF');
        session_start();
    }
}

// Helpers
require_once('lib/shortcuts.php');
require_once('lib/cpt-productos.php');

# Helper
/*add_action('wp_enqueue_scripts', function()
{
    wp_enqueue_script('js_lyd', get_stylesheet_directory_uri() . '/static/js/lyd.js', array('jquery'), '2.2', true);
}, 14);

add_action('wp_enqueue_scripts', 'pp_scripts');

// Conector API
require_once('lib/core/api.php');

// Clases
require_once('lib/core/classes/gld.php');
require_once('lib/core/classes/cuenta.php');
require_once('lib/core/classes/integrantes.php');
require_once('lib/core/classes/debates.php');
require_once('lib/core/classes/formularios.php');

// Transportadores
require_once('lib/core/procedures.php');
require_once('lib/core/shortcuts.php');

// CPT
require_once('lib/cpt/cpt-sala-prensa.php');
require_once('lib/cpt/cpt-publicaciones.php');
require_once('lib/cpt/cpt-recomendaciones.php');
require_once('lib/cpt/cpt-pubpublicaciones.php');*/



// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
add_action('wp_enqueue_scripts', 'add_normalize_CSS');

// Register a new sidebar simply named 'sidebar'
function add_widget_support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_widget_support' );

// Register a new navigation menu
function add_Main_Nav() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  // Hook to the init action hook, run our navigation menu function
  add_action( 'init', 'add_Main_Nav' );



// Check rows exists.
if( have_rows('repeater_field_name') ):

    // Loop through rows.
    while( have_rows('repeater_field_name') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('sub_field');
        // Do something, but make sure you escape the value if outputting directly...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;



$rows = get_field('repeater_field_name');
if( $rows ) {
    echo '<ul class="slides">';
    foreach( $rows as $row ) {
        $image = $row['image'];
        echo '<li>';
            echo wp_get_attachment_image( $image, 'full' );
            echo wp_kses_post( wpautop( $row['caption'] ) );
        echo '</li>';
    }
    echo '</ul>';
}