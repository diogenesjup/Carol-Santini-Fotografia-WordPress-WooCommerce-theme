<?php get_header(); ?>


<!-- BREADCRUMB -->
<div class="breadcrumb-paginas">
     <div class="container">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2><?php if(is_page()): woocommerce_page_title(); endif; if(is_archive()): woocommerce_page_title(); endif; if(!is_archive() && !is_page() && !is_single()): the_title(); endif; 


                    if(is_single()): 

                      $product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );

                        if ( $product_cats && ! is_wp_error ( $product_cats ) ){

                            $single_cat = array_shift( $product_cats ); 
                            echo $single_cat->name;

                         }   

                     endif; ?></h2>
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
<div class="work woocommerce">
     <div class="container">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">         

        <?php woocommerce_content(); ?>   

               </div>
          </div>
     </div>
</div>
<!-- WORK -->

<?php get_footer(); ?>