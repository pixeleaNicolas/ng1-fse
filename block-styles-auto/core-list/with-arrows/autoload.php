<?php
    if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/list',
        array(
            'name'         => 'arrows',
            'label'        => __( 'avec flèches', 'ng1' ),
            'is_default'   => false,
            'style_handle' => 'core-list-arrow'
        )
    );
    wp_register_style(
        'core-list-arrow', // Même handle que vous avez spécifié ci-dessus
        get_stylesheet_directory_uri() . '/block-styles/core-list/with-arrows/style.css', // Chemin absolu vers votre fichier CSS
        array(), // Dépendances (peut être vide si vous n'avez pas de dépendances)
        '', // Version du fichier (peut être une chaîne vide)
        'all' // Type de média (peut être 'all', 'screen', 'print', etc.)
    );
}