<?php 

//ajout du titre de la page
function firsttheme_supports () {
    add_theme_support('title-tag');
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

//les hook appellent les fonctions au dessus
add_action('after_setup_theme','firsttheme_supports' );
add_action('wp_enqueue_scripts', 'firsttheme_register_assets');
add_filter('wp_title', 'firsttheme_title');