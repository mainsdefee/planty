<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent twenty twenty
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

} 
 // Gestion des menus
function enregistre_mon_menu() {
    register_nav_menu( 'menu_principal', __( 'Menu principal' ) );
}
add_action( 'init', 'enregistre_mon_menu' );

//ajouter une nouvelle zone de menu à mon thème
function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Menu Footer' ));
}
add_action( 'init', 'register_my_menu' );
