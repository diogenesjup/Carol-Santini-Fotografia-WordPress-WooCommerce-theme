<?php
/* 
 * template name: Categorias
 * 
 * 
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- BREADCRUMB -->
<div class="breadcrumb-paginas">
     <div class="container">
          <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <h2><?php the_title(); ?></h2>
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
     <div class="container">
     <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php the_content(); ?>
                    <p>&nbsp;</p>
               </div>
          </div>
          <div class="row">
          <?php
          // LISTAR TODAS AS CATEGORIAS DE PRODUTOS
          $taxonomy = 'product_cat';
          $tax_terms = get_terms($taxonomy);
          foreach ($tax_terms as $tax_term) {

                    $thumbnail_id = get_woocommerce_term_meta( $tax_term->term_id, 'thumbnail_id', true );
                    $image = wp_get_attachment_url( $thumbnail_id );

          ?>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 coluna-1" onclick="location.href='<?php echo esc_attr(get_term_link($tax_term, $taxonomy)); ?>';">
            <div class="caixa-categoria" style="background:url('<?php echo $image; ?>') no-repeat;background-size:cover;background-position:center center;">
              &nbsp;
            </div>
          <a style="color:#212121;" href="<?php echo esc_attr(get_term_link($tax_term, $taxonomy)); ?>" class="cat-in-header" data-toggle="tooltip" data-placement="top" title="<?php echo $tax_term->name; ?>" style="text-decoration:none !important;">
             
                <?php echo $tax_term->name; ?>
                
          </a><p>&nbsp;</p></div>
          <?php
          
          }

   ?>
     </div>
     </div>
</div>
<!-- WORK -->


<?php endwhile; endif; ?>

<?php get_footer(); ?>