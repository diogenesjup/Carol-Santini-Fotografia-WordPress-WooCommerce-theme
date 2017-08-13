<?php
/* 
 * template name: Contato
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
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <form id="form" method="post" action="<?php bloginfo('stylesheet_directory'); ?>/enviarmsg.php" onSubmit="return ajaxSubmit(this);">

                         <div class="form-group">
                           <input type="text" name="nome" class="form-control" required placeholder="Nome:">
                         </div>

                         <div class="form-group">
                           <input type="email" name="email" class="form-control" required placeholder="E-mail:">
                         </div>

                         <div class="form-group">
                           <input type="tel" name="telefone" class="form-control" required placeholder="Telefone:">
                         </div>

                         <div class="form-group">
                           <textarea name="msg" class="form-control" rows="8" placeholder="Sua Mensagem"></textarea>
                         </div>

                         <div class="form-group">
                           <button type="submit" class="btn btn-primary">ENVIAR</button>
                         </div>

                         </form>    
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <?php the_content(); ?>
               </div>
          </div>
     </div>
</div>
<!-- WORK -->


<?php endwhile; endif; ?>

<?php get_footer(); ?>