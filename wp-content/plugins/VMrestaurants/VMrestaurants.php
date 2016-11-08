<?php
/*
Plugin Name: V&M Restaurants
Description: hihi
Version: 1.0
Author: Van PHAN & Marie CHU

*/

// INTEGRATION DES STYLES ET SCRIPTS
add_action( 'wp_enqueue_scripts', 'VM_scripts' );
function VM_scripts(){

    // Isotope styles
    wp_enqueue_style( '_tk-bootstrap-wp', plugins_url() . '/VMrestaurants/css/isotope.css' );

    // Isotope script
    wp_enqueue_script('isotope-script', plugins_url() . '/VMrestaurants/libs/isotope/isotope.min.js', array('jquery'), '1.0.0');

    // Main js
    wp_enqueue_script('main-script', plugins_url() . '/VMrestaurants/js/main.js', array('jquery'), '1.0.0');

}


// CREATION DE CUSTOM POST TYPE
add_action( 'init', 'register_posttype' );
function register_posttype() {
    $labels = array(
        'name'               => 'Plats',
        'singular_name'      => 'Plat',
        'menu_name'          => 'Plats',
        'name_admin_bar'     => 'Plats',
        'add_new'            => 'Ajouter un plat',
        'add_new_item'       => 'Ajouter un nouveau plat',
        'new_item'           => 'Nouveau plat',
        'edit_item'          => 'Modifier le plat',
        'view_item'          => 'Voir le plat',
        'all_items'          => 'Voir tout les plats',
        'search_items'       => 'Rechercher des plats',
        'parent_item_colon'  => '',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de plats trouvé dans la corbeille'
    );

    $args = array(
        'labels'             => $labels,
        'description'        => 'Un des plats à la carte',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'plat' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-carrot'
    );
    register_post_type( 'plat', $args );
    register_taxonomy( 'plat-category', 'plat', array ('hierarchical' => true, 'label' => 'Catégories de plat'));
}