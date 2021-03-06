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

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/style.css?v=2" />
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
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

<?php wp_head(); ?>
<style type="text/css">
  
.wizard>.steps .done a, .wizard>.steps .done a:active, .wizard>.steps .done a:hover {
    background: #efefef !important;
    color: #000 !important;
}






</style>
<?php if(!is_front_page()): ?> 
  <style type="text/css">
    header{
      margin-top: 18px;
    }
  </style>
<?php endif; ?>

<?php if(is_front_page()): ?> 
  <style type="text/css">
    header{
      padding-top: 0px;
      padding-bottom: 14px;
    }

.owl-pagination{
    display: none;
  }

.owl-buttons{
  position: absolute;
  top:-250px;
  left: 0;
  width: 100%;
  z-index: 9999;
}

  .owl-prev{
    position: absolute;
    top:0;
    left:-410px;
    font-size: 1.5em;
    z-index: 9999;
    color:#eb839e;
    background: rgba(255,255,255,0.90);
    width: 32px;
    height: 32px;
    text-align: center;
    padding-top: 0px;
  }


  .owl-next{
    position: absolute;
    top:0;
    right:-410px;
    font-size: 1.5em;
    z-index: 9999;
    color:#eb839e;
    background: rgba(255,255,255,0.90);
    width: 32px;
    height: 32px;
    text-align: center;
    padding-top: 0px;
  }

  @media (max-width: 991px) {
    .owl-buttons{
      display: none !important;
    }
  }

  ul.products {
    margin-top: 41px !important;
}




  </style>
<?php endif; ?>
<style type="text/css">
  @media(min-width: 980px){
    .woocommerce ul.products li.product, .woocommerce-page ul.products li.product {
      float: left;
      margin: 0 3.2% 2.992em 0;
      padding: 0;
      position: relative;
      width: 30% !important;
  }
    .woocommerce .products ul, .woocommerce ul.products {
      margin: 0 0 1em;
      padding: 0;
      list-style: none;
      clear: both;
      width: 104%;
  }
}
.owl-controls .owl-page, .owl-controls .owl-buttons div {
    cursor: pointer;
    border-radius: 100px;
}

</style>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-85966703-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
    

<?php if(is_front_page()): ?>    
<!-- BARRA TOP -->
<div class="barra-top">
  <div class="container visible-lg visible-md">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-lg-offset-9 col-md-offset-9">
        <form method="get" action="/">
                       <div id="custom-search-input" style="margin-right:-12%;">
                            <div class="input-group">                            
                                <input type="text" class="search-query form-control input-sm" name="s" placeholder=" cor/palavra-chave" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                                
                            </div>
                        </div>
        </form>                


      </div>
    </div>
  </div>
  <div class="container visible-sm visible-xs">
    <div class="row">
      <div class="col-sm-12 col-xs-12 text-right">
       <!-- <span onclick="$('#menuMobile').fadeIn('500');">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </span>
        -->
      </div>
    </div>
  </div>
</div>
<!-- BARRA TOP -->
<?php endif; ?>


<?php if(!is_front_page()): ?>    
<!-- BARRA TOP -->
<div class="barra-top visible-sm visible-xs">
  <div class="container visible-lg visible-md">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-lg-offset-9 col-md-offset-9">
        <form method="get" action="/">
                       <div id="custom-search-input" style="margin-right:-12%;">
                            <div class="input-group">                            
                                <input type="text" class="search-query form-control input-sm" name="s" placeholder=" cor/palavra-chave" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                                
                            </div>
                        </div>
        </form>                


      </div>
    </div>
  </div>
  <div class="container visible-sm visible-xs">
    <div class="row">
      <div class="col-sm-12 col-xs-12 text-right">
      <!--  <span onclick="$('#menuMobile').fadeIn('500');">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </span> -->
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
              <a href="https://www.carolsantini.com.br/carrinho/"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </p>
            <form method="get" action="/">
                       <div id="custom-search-input">
                            <div class="input-group">                            
                                <input type="text" class="search-query form-control input-sm" name="s" placeholder="cor/palavra-chave" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                                
                            </div>
                        </div>
        </form>  

</div>
<!-- MENU MOBILE -->


<!-- HEADER -->
<header>
  <div class="container">
    <div class="row">

        <!-- LOGO -->
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 logo">
         
        <a href="https://www.carolsantini.com.br">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo3.png?v=2" alt="Carol Santini Logo">
        </a>
        
        <!--<h2><a href="https://www.carolsantini.com.br">CAROL SANTINI <br><small>PHOTOGRAPHER</small></a></h2>-->
      </div>
      <!-- LOGO -->

      <!-- MENU -->
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 menu-desktop visible-lg visible-md">
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
            
            
            <a href="https://www.facebook.com/carolsantiniphotographer" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/carolsantini/" target="_blank" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/carol_santini" target="_blank" class="pinterest"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.carolsantini.com.br/carrinho/" class="carrinho"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>

                       

          </div>
      <!-- MENU -->

    </div>
  </div>
</header>
<!-- HEADER -->