<?php get_header(); ?>


<!-- BREADCRUMB -->
<div class="breadcrumb-paginas">
     <div class="container">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2><?php if(is_page()): woocommerce_page_title(); endif; if(is_archive()): echo "<small style='color:#fff;'>categoria: </small>";woocommerce_page_title(); endif; if(!is_archive() && !is_page()): the_title(); endif; ?></h2>
               </div>
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