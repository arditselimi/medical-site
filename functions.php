<?php 

    function medicia_files() {
        wp_enqueue_style('medicia_main_styles', get_theme_file_uri('/files/style/style.css'));
        wp_enqueue_style('font_awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
        wp_enqueue_script('medicia_main_script', get_theme_file_uri('/files/script/script.js'), array(), 1.0, true);

        
        wp_localize_script('medicia_main_script', 'theme_data' , array(
            'base_url' => get_template_directory_uri(),
        ));
    }

    add_action('wp_enqueue_scripts' ,'medicia_files');

    // Custom Post Types -> mu-plugins folder


