<!--
#
# DIOGENES OLIVEIRA DOS SANTOS JUNIOR
# WWW.DIOGENESJUNIOR.COM.BR
# CONTATO@DIOGENESJUNIOR.COM.BR
# 
-->
<!DOCTYPE html>
<html lang="pt-br"><head>
<?php

if ( ! function_exists( '_wp_render_title_tag' ) ) {

  function theme_slug_render_title() {

?>

<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php

  }

  add_action( 'wp_head', 'theme_slug_render_title' );

}

?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="theme-color" content="#eb82a0">
   


<!-- FAVICON -->
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.jpg">    

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.css" media="all" />                   

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css" />
<link rel="stylesheet" type="text/css" media="(max-width: 900px)" href="<?php bloginfo('stylesheet_directory'); ?>/css/mobile.css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/sweetalert2.min.css">    
<!-- ICONES -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<!-- ANIMATE -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/animate.css">
<!-- OWL -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/owl.carousel.css" />

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">

<?php wp_head(); ?>

<?php if(!is_front_page()): ?> 
  <style type="text/css">
    header{
      margin-top: 30px;
    }
  </style>
<?php endif; ?>

</head>
<body>
    

<?php if(is_front_page()): ?>    
<!-- BARRA TOP -->
<div class="barra-top">
  <div class="container visible-sm visible-xs">
    <div class="row">
      <div class="col-sm-12 col-xs-12 text-right">
        <span onclick="$('#menuMobile').fadeIn('500');">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </span>
      </div>
    </div>
  </div>
</div>
<!-- BARRA TOP -->
<?php endif; ?>


<?php 

// CARREGAR MENUS
$menu_items = wp_get_nav_menu_items("principal");

  $total_menu = 0;
  foreach ( (array) $menu_items as $key => $menu_item ) {
      
      $id_menu[$total_menu] = $menu_item->ID;
      $title[$total_menu] = $menu_item->title;
      $url[$total_menu] = $menu_item->url;
      $parent[$total_menu] = $menu_item->menu_item_parent;      
      $total_menu++;

  }

?>

<!-- MENU MOBILE -->
<div id="menuMobile">
    
    <span style="float:right;color:#fff;margin-top:-20px;margin-right:-10px;font-size:2.5em;"  onclick="$('#menuMobile').fadeOut('500');"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
  
  <h2>Menu</h2>
                
           <p>
              


            <?php             
            $numero_menu = 0;
            while($numero_menu<$total_menu):            
            ?>            
              <a href="<?php echo $url[$numero_menu]; ?>"><?php echo $title[$numero_menu]; ?></a><br>
            <?php             
            $numero_menu++;
            endwhile;
            ?>
              



            </p>
            <p>&nbsp;</p>
            <p class="social">
              <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
              <a href="http://www.carolsantini.com.br/carrinho/"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </p>

</div>
<!-- MENU MOBILE -->


<!-- HEADER -->
<header>
  <div class="container">
    <div class="row">

        <!-- LOGO -->
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 logo">
        <a href="#">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Carol Santini Logo">
        </a>
      </div>
      <!-- LOGO -->

      <!-- MENU -->
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 menu-desktop visible-lg visible-md">
            <?php             
            $numero_menu = 0;
            while($numero_menu<$total_menu):            
            ?>            
              <a href="<?php echo $url[$numero_menu]; ?>"><?php echo $title[$numero_menu]; ?></a>
            <?php             
            $numero_menu++;
            endwhile;
            ?>
            <span>|</span>
            
            
            <a href="#" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#" target="_blank" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#" target="_blank" class="pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
            <a href="http://www.carolsantini.com.br/carrinho/" class="carrinho"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            

          </div>
      <!-- MENU -->

    </div>
  </div>
</header>
<!-- HEADER -->