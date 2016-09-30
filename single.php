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
               </div>
          </div>
     </div>
</div>
<!-- WORK -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>