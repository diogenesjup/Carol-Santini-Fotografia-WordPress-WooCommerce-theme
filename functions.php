<?php
/* WIDGETS */
//SUPORTE PARA FEATURED IMAGES
add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
//DEFINIÇÃO DO TAMANHO DA IMAGEM
set_post_thumbnail_size(100, 75, true);
//SUPORTE PARA THEMES FORMAT
add_theme_support( 'post-formats', array( 'aside', 'gallery','status','video') );
if (function_exists('register_sidebar'))
{
    register_sidebar(array(
		'name'			=> 'Sidebar',
        'before_widget'	=> '<div class="widget">',
        'after_widget'	=> '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>',
    ));
}


add_theme_support( 'woocommerce' );

// ALTERAR BOTÃO COMPRAR, POR QUE USANDO VARIAÇÕES ESTÁ FICANDO COMO "VER OPÇÕES"
function custom_woocommerce_product_add_to_cart_text( $text ) {
	return __( 'Comprar' );
}
add_filter( 'woocommerce_product_add_to_cart_text', 'custom_woocommerce_product_add_to_cart_text' );