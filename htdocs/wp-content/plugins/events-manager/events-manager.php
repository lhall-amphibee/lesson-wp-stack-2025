<?php

/**
 * Plugin Name:       Events Manager
 * Plugin URI:        https://amphibee.fr
 * Description:       Manage your events.
 * Version:          1.0.0
 * Requires PHP:      7.4
 * Requires at least: 5.8
 * Author:           Loïc Hall
 * Author URI:       https://amphibee.fr
 * License:          GPL v2 or later
 * License URI:      https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:      events-manager
 * Domain Path:      /languages
 *
 * @package MyCustomPlugin
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Custom Post Type Evenement
 */
function register_evenement_post_type() {
    $labels = array(
        'name'                  => 'Évènements',
        'singular_name'         => 'Évènement',
        'menu_name'            => 'Évènements',
        'add_new'              => 'Ajouter un évènement',
        'add_new_item'         => 'Ajouter un nouvel évènement',
        'edit_item'            => 'Modifier l\'évènement',
        'new_item'             => 'Nouvel évènement',
        'view_item'            => 'Voir l\'évènement',
        'search_items'         => 'Rechercher des évènements',
        'not_found'            => 'Aucun évènement trouvé',
        'not_found_in_trash'   => 'Aucun évènement trouvé dans la corbeille',
        'all_items'            => 'Tous les évènements',
        'archives'             => 'Archives des évènements',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'show_in_rest'        => true, // Enable Gutenberg editor
        'menu_icon'           => 'dashicons-calendar-alt',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'custom-fields'
        ),
        'has_archive'         => true,
        'rewrite'             => array(
            'slug' => 'evenements'
        ),
        'menu_position'       => 5,
    );

    register_post_type('evenement', $args);
}
add_action('init', 'register_evenement_post_type');

/**
 * Register Custom Taxonomy Catégorie
 */
function register_categorie_taxonomy() {
    $labels = array(
        'name'              => 'Catégories',
        'singular_name'     => 'Catégorie',
        'search_items'      => 'Rechercher des catégories',
        'all_items'         => 'Toutes les catégories',
        'parent_item'       => 'Catégorie parente',
        'parent_item_colon' => 'Catégorie parente:',
        'edit_item'         => 'Modifier la catégorie',
        'update_item'       => 'Mettre à jour la catégorie',
        'add_new_item'      => 'Ajouter une nouvelle catégorie',
        'new_item_name'     => 'Nom de la nouvelle catégorie',
        'menu_name'         => 'Catégories',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'           => true,
        'show_ui'          => true,
        'show_admin_column' => true,
        'show_in_rest'     => true,
        'rewrite'          => array(
            'slug' => 'categorie-evenement'
        ),
    );

    register_taxonomy('categorie-evenement', 'evenement', $args);
}
add_action('init', 'register_categorie_taxonomy');
