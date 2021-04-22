<?php



function nkululeko_one_register_styles()

{



    $version = wp_get_theme()->get('Version');

    wp_enqueue_style('nkululeko-styles', get_template_directory_uri() . "/style.css", array(), $version, 'all');

    wp_enqueue_style('nkululeko-roboto-font', "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,900&display=swap", array(), '1.0', 'all');

    wp_enqueue_style('nkululeko-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css", array(), '5.0.0', 'all');

    wp_enqueue_style('nkululeko-fontawesome', "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all');

}



add_action('wp_enqueue_style', 'nkululeko_one_register_styles');





?>