<?php

function wp_base_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Bloc de texte exemple', 'wp-theme-base-translate' ),
        'id'            => 'text-bloc-exemple',
        'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wp_base_theme_widgets_init' );