<?php 
    /**
     * Register Post Type PAGE Name CPT
     *
     * @return void
     **/
    function thulur_type() {
        $labels = array(
            'name'               => 'Þulur',
            'singular_name'      => 'Þula',
            'add_new'            => 'Bæta við þulu',
            'add_new_item'       => 'Bæata við nýrri þulu',
            'edit_item'          => 'Breyta þulu',
            'new_item'           => 'Þula',
            'view_item'          => 'Skoða þulu',
            'search_items'       => 'Finna þulu',
            'not_found'          => 'Not found',
            'not_found_in_trash' => 'Not found in trash',
        );
        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'query_var'          => true,
            'rewrite'            => array(
                'slug'       => 'thulur',
                'with_front' => false,
            ),
            'has_archive'        => true,
            'capability_type'    => 'page',
            'hierarchical'       => true,
            'menu_position'      => 5,
            'menu_icon'          => 'dashicons-smiley',
            'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
        );
        register_post_type( 'thulur', $args );
    }
    add_action( 'init', 'thulur_type' );

?>