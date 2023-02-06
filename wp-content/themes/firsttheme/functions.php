<?php 

//ajout du titre de la page
function firsttheme_supports () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');

    add_image_size('card-header', 350, 215);

}

//ajout de bootstrap avec la fonction
function firsttheme_register_assets () {
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', ['popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function firsttheme_title ($title) {
    return 'Portfolio' . $title;
}

require_once 'widgets/YoutubeWidget.php';

function montheme_register_widget ()
{
    register_sidebar([
        'id' => 'homepage',
        'name'=> 'Sidebar Accueil',
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
add_action('after_setup_theme','firsttheme_supports' );
add_action('wp_enqueue_scripts', 'firsttheme_register_assets');
add_action('widgets_init ', 'montheme_register_widget');
add_filter('wp_title', 'firsttheme_title');
add_filter('nav_menu_css_class', 'firsttheme_menu_class');
add_filter('nav_menu_link_attributes', 'firsttheme_menu_link_class');