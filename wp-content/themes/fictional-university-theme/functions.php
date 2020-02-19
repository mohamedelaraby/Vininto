<?php 
/***
 * fire up some actions 
 */


/**
 *  Load front end files
 *  @return styles and scripts
 */
function university_files(){
    
    // Loads custom google fonts
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

    // Loads font-awesome file
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    
    //  Loads css stylesheet file
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), Null, microtime());

    //  Loads javscript main file
    wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(),true );
}

 // Hooks a function to a Specific action
 // Hooks frontend files
 add_action( 'wp_enqueue_scripts','university_files');


/**
 *  Setup different theme features
 * @return features
 * 
 */
 function university_features(){
     // Setup dynamic title for each  page
    add_theme_support('title-tag');
}


//  Hooks page`s title
add_action( 'after_setup_theme', 'university_features' );

?>

