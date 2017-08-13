<?php get_header(); ?>

<?php 

$query_string = $_GET["s"];



$search = new WP_Query(array( 's' => $query_string ));

?>
     
<!-- BREADCRUMB -->
<div class="breadcrumb-paginas">
     <div class="container">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2>RESULTADO DE PESQUISA <br><small style="text-transform:none !important;color:#fff;">você pesquisou por: <b><?php echo $query_string; ?></b></small></h2>
               </div>
          </div>
     </div>
</div>

<div class="container">
     <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcrumb-d" typeof="BreadcrumbList" vocab="http://schema.org/">
               <?php if(function_exists('bcn_display')){
                       bcn_display();
                     }
               ?>
          </div>
     </div>
</div>
<!-- BREADCRUMB -->     


<!-- WORK -->
<div class="work">
     <div class="container woocommerce">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:-45px;">
              <ul class="products">
                                                 <?php 
                                                 // LOOP SOLUÇÕES
                                                 ?>
                                                 <?php if ( $search->have_posts() ) : ?>   
                                                 <!-- the loop -->
                                                 <?php while ( $search->have_posts() ) : $search->the_post();                                                  
                                                 ?>
                             
               
                                                  <?php wc_get_template_part( 'content', 'product' ); ?>
                          

                                                <?php  endwhile; endif; 
                                                // FINAL LOOP SOLUÇÕES
                                                ?>
                                                </ul>
                </div>
          </div>
                               
                                                <?php if ( !$search->have_posts() ) : ?>
                                                  <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center;">
                                                      <h3>Nenhum resultado encontrado :(</h3>
                                                    </div>
                                                  </div>  
                                                <?php endif; ?>  
                                                <?php wp_reset_postdata(); ?>
          
               </div>
</div>
<!-- WORK -->  
         
  
<?php get_footer(); ?>