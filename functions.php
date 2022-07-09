<!-- can override or initiate functions to change how Wordpress works -->

<?php 
    // register stylesheets
    function mytutorialtheme_register_styles() {

        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style( 'mytutorialtheme-style', get_template_directory_uri() . '/style.css', array('mytutorialtheme-bootstrap','mytutorialtheme-fontawesome'), $version, 'all' );
        wp_enqueue_style( 'mytutorialtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
        wp_enqueue_style( 'mytutorialtheme-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );

    }
    // add a action for when workpress runs wp_enqueue_scripts, it will call this function
    add_action( 'wp_enqueue_scripts', 'mytutorialtheme_register_styles' );

    // register scripts
    function mytutorialtheme_register_scripts() {
        
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_script( 'mytutorialtheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
        wp_enqueue_script( 'mytutorialtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('mytutorialtheme-jquery'), '4.4.1', true );
        wp_enqueue_script( 'mytutorialtheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array('mytutorialtheme-jquery'), $version, true );
        wp_enqueue_script( 'mytutorialtheme-script', get_template_directory_uri() . '/js/main.js', array('mytutorialtheme-jquery'), $version, true );
        

    }

    // add a action for when workpress runs wp_enqueue_scripts, it will call this function
    add_action( 'wp_enqueue_scripts', 'mytutorialtheme_register_scripts' );
?>