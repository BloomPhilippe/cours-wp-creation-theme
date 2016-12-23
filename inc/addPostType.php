<?php

add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'formation',
        array(
            'labels' => array(
                'name' => __( 'Formations' ),
                'singular_name' => __( 'Formation' )
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}