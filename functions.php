<?php
// Tady začíná PHP kód

function equispinedoc_scripts() {
    // Načtení CSS
    wp_enqueue_style( 'equispinedoc-style', get_template_directory_uri() . '/assets/css/style.css' );

    // Načtení JS - správně umístěno uvnitř funkce
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
}
// Jedna akce pro obojí
add_action( 'wp_enqueue_scripts', 'equispinedoc_scripts' );

?>