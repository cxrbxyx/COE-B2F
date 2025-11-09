<?php
/*
 * Función para cargar los estilos del tema padre e hijo.
 */
function mi_tema_hijo_enqueue_styles() {
    
    // Cargar la hoja de estilos principal del tema PADRE
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Cargar la hoja de estilos del tema HIJO
    // Depende del 'parent-style' y se carga después.
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        wp_get_theme()->get('Version') // Esto ayuda a evitar problemas de caché
    );
}

// Añadir la función al 'hook' de WordPress
add_action( 'wp_enqueue_scripts', 'mi_tema_hijo_enqueue_styles' );