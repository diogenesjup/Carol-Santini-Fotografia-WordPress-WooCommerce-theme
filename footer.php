
<!-- FORMAS DE PAGAMENTO -->
<div class="formas-de-pagamento">
     <div class="container">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mastercard.png" alt="Aceitamos Master Card">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/visa.png" alt="Aceitamos Visa">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/elo.png" alt="Aceitamos Elo">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/boleto.png" alt="Aceitamos Boleto bancário">
               </div>
          </div>
     </div>

</div>
<!-- FORMAS DE PAGEMENTO -->

<?php 

// CARREGAR MENUS
$menu_items = wp_get_nav_menu_items("footer");

  $total_menu = 0;

  foreach ( (array) $menu_items as $key => $menu_item ) {
      
      $id_menu[$total_menu] = $menu_item->ID;
      $title[$total_menu] = $menu_item->title;
      $url[$total_menu] = $menu_item->url;
      $parent[$total_menu] = $menu_item->menu_item_parent;      
      $total_menu++;

  }

?>

<!-- RODAPE -->
<footer>
     <div class="container">
          <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 coluna-1">
                    &copy; <?php echo date("Y"); ?> Carol Santini
                    <span>&nbsp;</span>                    

                    <?php             
                    $numero_menu = 0;
                    while($numero_menu<$total_menu):            
                    ?>            
                      <a href="<?php echo $url[$numero_menu]; ?>"><?php echo $title[$numero_menu]; ?></a> <span>|</span>
                    <?php             
                    $numero_menu++;
                    endwhile;
                    ?>

               </div>
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 coluna-2">

               <a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>

                <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               
               <a href="#" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>


               </div>
          </div>
     </div>
</footer>
<!-- RODAPE -->
    
    <?php if(!is_page("finalizar-compra")): ?>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>                                  
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>  

    

     <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/sweetalert2.min.js"></script> 
     <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
     <script>
          new WOW().init();
     </script>

     <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/owl.carousel.min.js"></script>  
    <script type="text/javascript">
    jQuery(document).ready(function ($) {      
 

          $(".owl").owlCarousel({
         
              navigation : true, // Show next and prev buttons
              //navigation:true,
              //navigationText: [
              //"<",
              //">"
              //],
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem:true,
              autoPlay:true,
              autoPlayTimeout:200,
              autoPlayHoverPause:false
         
          });         

          $(".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
          $(".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
      
    });    


      
    
    </script>
    <?php endif; ?>

    <?php if(is_page("contato")): ?>
    
    <script type="text/javascript">
      

      // SCRIPT FORMULÁRIO DE CONTATO
            var ajaxSubmit = function(form) {                
                var url = $(form).attr('action');
                var flag = 9;              
                var data = $(form).serializeArray();
              
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });
             
                swal("Obrigado!", 'Sua mensagem foi enviada com sucesso', "success");
                         
                return false;
            }
      

    </script>
    <?php endif; ?>
    
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    <?php wp_footer(); ?>

</body>
</html>