<?php
// Plugin name: Configuración para imagenes
// Descripction: Soporte para Thumbnails, titulos SEO y creación de tamaños para las imagenes.
// Version: 1.0.0
// Author: Kenny Poncio
// Author URI: https://github.com/kenpoc4

function k_conf_img(){
    // habilitar imagen destacada
    add_theme_support('post-thumbnails');

    // Titulos SEO
    add_theme_support('title-tag');

    // Agragando tamaño de images
    add_image_size( 'pequeño', '350', '350', true);
    add_image_size( 'm_largo', '350', '750', true);
    add_image_size( 'm_ancho', '750', '350', true);
    add_image_size( 'caja', '400', '375', true);
    add_image_size( 'mediano', '700', '400', true);
    add_image_size( 'blog', '966', '644', true);
}
add_action( 'after_setup_theme', 'k_conf_img');