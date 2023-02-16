<?php

//ajout du titre de la page
function firsttheme_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');

    add_image_size('card-header', 720, 270);

    add_image_size('banner', 100, 200);
}

add_action('acf/init', 'my_register_blocks');
function my_register_blocks()
{

    // check function exists.
    if (function_exists('acf_register_block_type')) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'slider',
            'title'             => __('Slider'),
            'description'       => __('A custom slider block.'),
            'render_template'   => '/blocks/slider/slider.php',
            'category'          => 'formatting',
            'icon'              => 'images-alt2',
            'align'             => 'full',
            'enqueue_assets'    => function () {
                wp_enqueue_style('slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1');
                wp_enqueue_style('slick-theme', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1');
                wp_enqueue_script('slick', 'http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true);

                wp_enqueue_style('block-slider', get_template_directory_uri() . '/blocks/slider/slider.css.map', array(), '1.0.0');
                wp_enqueue_script('block-slider', get_template_directory_uri() . '/blocks/slider/slider.min.js', array(), '1.0.0', true);
            },
        ));
    }
}

add_action( 'acf/init', 'example_register_acf_block' );
function example_register_acf_block()
{
    if( function_exists( 'acf_register_block_type' ) ) {
        $data = acf_register_block_type( array(
            'name'              => 'hero',                                         // Unique slug for the block
            'title'             => __( 'Compétences', 'example' ),                  // Diplay title for the block
            'description'       => __( 'A simple hero block to use as header for a page.', 'example' ), // Optional
            'category'          => 'layout',                                       // Inserter category
            'icon'              => 'carrot',                                       // Optional. Custom SVG or dashicon slug.
            'example'           => 'true',                                         // Determines whether to show an example in the inserter or not
            'keywords'          => array( __( 'hero', 'example' ), __( 'header', 'example' ) ), // Optional. Useful to find the block in the inserter
            'post_types'        => array( 'post', 'page' ),                        // Optional. Default posts, pages
            'mode'              => 'preview',                                      // Optional. Default value of 'preview'
            'align'             => 'full',                                         // Default alignment. Default empty string
            'render_template'   => plugin_dir_path( __FILE__ ) . 'hero/block.php', // Path to template file. Default false
            // 'render_callback'   => 'example_block_markup',                      // Callback function to display the block if you prefer.
            'enqueue_style'     => plugins_url( '/hero/block.css', __FILE__ ),     // URL to CSS file. Enqueued on both frontend and backend
            'enqueue_script'    => plugins_url( '/hero/block.js', __FILE__ ),      // URL to JS file. Enqueued on both frontend and backend
            // 'enqueue_assets'    => 'example_block_assets',                      // Callback to enqueue your scripts
            'supports'          => array(                                          // Optional. Array of standard editor supports
                'align'           => array( 'wide', 'full' ),                      // Toolbar alignment supports
                'anchor'          => true,                                         // Allows for a custom ID.
                'customClassName' => true,                                         // Allows for a custom CSS class name
                'mode'            => true,                                         // Allows for toggling between edit/preview modes. Default true.
                'multiple'        => true,                                        // Allows for multiple instances of the block. Default true.
            ),
        ) );
        return $data;
    }
}

//ajout de bootstrap avec la fonction
function firsttheme_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', ['popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', [], false, true);
    wp_register_style('icons', 'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('icons');
    wp_enqueue_script('bootstrap');
}

function firsttheme_title($title)
{
    return 'Portfolio' . $title;
}

require_once 'widgets/YoutubeWidget.php';

function montheme_register_widget()
{
    register_sidebar([
        'id' => 'homepage',
        'name' => 'Sidebar Accueil',
    ]);
}

function firsttheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function firsttheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function firsttheme_init()
{
    register_taxonomy('projet', 'post', [
        'labels' => [
            'name' => 'Projet',
            'singular_name' => 'Projet',
            'plural_name' => 'Projets',
            'all_item' => 'Tous les projets',
            'edit_item' => 'Editer un projet',
            'update_item' => 'Mettre à jour un projet',
            'menu_name' => 'Projet'
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true
    ]);
}



add_action('init', 'firsttheme_init');
//les hook appellent les fonctions au dessus
add_action('after_setup_theme', 'firsttheme_supports');
add_action('wp_enqueue_scripts', 'firsttheme_register_assets');
add_action('widgets_init ', 'montheme_register_widget');
add_filter('wp_title', 'firsttheme_title');
add_filter('nav_menu_css_class', 'firsttheme_menu_class');
add_filter('nav_menu_link_attributes', 'firsttheme_menu_link_class');
