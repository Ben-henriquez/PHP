<?php

add_theme_support('post-thumbnails'); //imagen destacada
add_theme_support('custom-logo'); //logotipo en personalizar
add_theme_support('custom-header'); //imagen en cabecera

function agregar_font(){
    echo('<link href="https://use.typekit.net/gdz8bnd.css">');
}
add_action('wp_head','agregar_font');


/*LIMITAR CARACTERES EN EXCERPT */
function custom_excerpt_length( $length ) {
    return 3;//55 por defecto
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

$menus = array ('superior'=>'Menú barra de navegación',
                'footer'=>'Menú Footer');

register_nav_menus($menus);


$formulario_contacto = array('name'=>'Formulario de Contacto',
                            'before_widget'=>'<article class="col-lg-6 album"><ul>',
                            'after_widget'=>'</ul></article>');

register_sidebar($formulario_contacto);

$mapa = array('name'=>'Mapa',
            'before_widget'=>'<section class="col-lg-6 mt-5 d-none d-md-block">',
            'after_widget'=>'</section>');

register_sidebar($mapa);


$redes_sociales = array ('name'=>'Widget Footer',
                        'before_widget'=>'<div class"col-lg-4">',
                        'after_widget'=>'</div>');

register_sidebar($redes_sociales);


?>