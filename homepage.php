<?php
/* 
 * template name: Home Page
 * 
 * 
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- SLIDESHOW -->
<div class="container slideshow wow fadeInUp">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    
      <div id="owl-demo" class="owl">        
        
        <?php

          if( have_rows('imagens') ):

              while ( have_rows('imagens') ) : the_row();

                   $linkDestino = get_sub_field('link_de_destino_ao_clicar');           

        ?>
        
        <div class="item" <?php if($linkDestino!=""): ?> onclick="location.href='<?php echo $linkDestino; ?>';" <?php endif; ?>><img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('alt_da_imagem'); ?>" />&nbsp;</div>

        <?php          

              endwhile;

          endif;

        ?>

     </div> 
    </div>

  </div>
</div>
<!-- SLIDESHOW -->

<!-- DESTAQUES HOME -->
<div class="container destaques-home">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 coluna-1">
      <a href="https://www.carolsantini.com.br/shop/" title="Clique para ir para a sessão de produtos">
        <img src="<?php the_field("imagem_de_destaque_a_esquerda"); ?>" alt="imagem">
      </a>  
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 coluna-2">
      <?php the_field("texto_de_destaque_a_direita"); ?>
    </div>
  </div>
</div>
<!-- DESTAQUES HOME -->

<!-- NEWSLETTER -->
<div class="container newsletter wow fadeInUp">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="caixa-newsletter">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 coluna-1">
          <p style="line-height:1.4em;"> Coloque seu e-mail ao lado para <b>GANHAR</b> UM PDF com <u>27 dicas para harmonizar quadros na parede</u> e também ficar por dentro das novidades.</p>
        
        </div>
        <div class="col-lg-1 col-md-1 hidden-sm hidden-xs coluna-2">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" alt="arrow">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 coluna-3">
          <form id="register-newsletter" class="form-inline" method="post" action="https://www.carolsantini.com.br/email.php" target="_blank">
              <div class="form-group">
                         <input type="email" name="newsletter" class="form-control" required placeholder="Digite seu endereço de e-mail">
                      </div>
                      <div class="form-group">
                         <button type="submit" class="btn btn-custom-3">Ok</button>
                      </div>
                  </form>
        </div>
      </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <hr />
    </div>
  </div>
</div>
<!-- NEWSLETTER -->

<!-- CHAMADA CATEGORIAS -->
<div class="container chamadas-categorias">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>MAIS VENDIDOS</h2>
      </div>
    </div>

  <div class="row" style="display:none !important;">
    
   <?php
          // LISTAR TODAS AS CATEGORIAS DE PRODUTOS
          $taxonomy = 'product_cat';
          $tax_terms = get_terms($taxonomy);
          $controle =0;
          foreach ($tax_terms as $tax_term) {

                    $thumbnail_id = get_woocommerce_term_meta( $tax_term->term_id, 'thumbnail_id', true );
                    $image = wp_get_attachment_url( $thumbnail_id );
                    if($controle<=2):

          ?>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 coluna-1" onclick="location.href='<?php echo esc_attr(get_term_link($tax_term, $taxonomy)); ?>';">
            <div class="caixa-categoria" style="background:url('<?php echo $image; ?>') no-repeat;background-size:cover;background-position:center center;">
              &nbsp;
            </div>
          <a href="<?php echo esc_attr(get_term_link($tax_term, $taxonomy)); ?>" class="cat-in-header" data-toggle="tooltip" data-placement="top" title="<?php echo $tax_term->name; ?>" style="text-decoration:none !important;">
             
                <?php echo $tax_term->name; ?>
                
          </a><p>&nbsp;</p></div>
          <?php
            endif; $controle++;
          }

   ?>

  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
       <?php echo do_shortcode('[recent_products per_page="4" columns="4"]'); ?>
    </div>
  </div>
</div>
<!-- CHAMADAS CATEGORIAS -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>