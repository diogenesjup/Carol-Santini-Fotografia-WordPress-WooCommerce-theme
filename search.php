<?php get_header(); ?>

<!-- Content Wrapper
================================================== -->
<div id="content-wrapper">

<!-- Parallex Page Title -->
     <div id="parallex-inner" class="parallex">
          <div class="container">
               <div class="eight columns"  data-animated="fadeInUp">
                    <h1>Resultado de pesquisa</h1>
                    <p>Você procurou por:
<?php 

$query_string = $_GET["s"];

echo $query_string;

$search = new WP_Query(array( 's' => $query_string ));

?></p>
               </div>
               <div class="eight columns">
                    <nav id="breadcrumbs">
                         <ul>
                              <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
                             
                              <li><a href="<?php echo get_option('home'); ?>/insights/">Insights</a></li>

                              <li>Resultado de Pesquisa</li>
                         </ul>
                    </nav>
               </div>
          </div>
     </div>
     <!-- Container -->
     <div class="container">
     
     
<!-- Left Side Content -->
          <div class="twelve alt columns" style="margin-top: 30px;">
              
              
               
              
           <?php 
                                                 // LOOP SOLUÇÕES
                                                 ?>
                                                 <?php if ( $search->have_posts() ) : ?>   
                                                 <!-- the loop -->
                                                 <?php while ( $search->have_posts() ) : $search->the_post();


                                                  $foto_destaque = get_field("imagem_de_destaque");
 ?>
                             
               


   <!-- Post -->
               <article class="post">
                    <figure class="post-img media">
                         <div class="mediaholder"> <a href="<?php the_permalink(); ?>"> <img src="<?php the_field("imagem_de_destaque"); ?>" alt="<?php the_title(); ?>"/>
                                   <div class="hovercover">
                                        <div class="hovericon"><i class="hoverlink"></i></div>
                                   </div>
                              </a> </div>
                    </figure>
                   <div class="post-format">
                             <h4><?php 
                             $mes = get_the_time("m"); 

if($mes=="01") echo "JAN";
if($mes=="02") echo "FEV";
if($mes=="03") echo "MAR";
if($mes=="04") echo "ABR";
if($mes=="05") echo "MAI";
if($mes=="06") echo "JUN";
if($mes=="07") echo "JUL";
if($mes=="08") echo "AGO";
if($mes=="09") echo "SET";
if($mes=="10") echo "OUT";
if($mes=="11") echo "NOV";
if($mes=="12") echo "DEZ";


                             ?></h4>
                             <h2><?php the_time("d"); ?></h2>
                             
                         </div>
                    <section class="post-content">
                         <header class="meta">
                             
                              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                         </header>
                         <p><?php the_field("resumo"); ?> [...]</p>
                         <a href="<?php the_permalink(); ?>" class="button line-color">Ver post</a> </section>
                    <div class="clearfix"></div>
               </article>
               <!-- Post -->




                                                <?php  endwhile; endif; 
                                                // FINAL LOOP SOLUÇÕES
                                                ?>
                                                <?php if ( !$search->have_posts() ) : ?>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px;">
                                                      <p>Nenhum resultado encontrado :(</p>
                                                    </div>
                                                <?php endif; ?>  
                                                <?php wp_reset_postdata(); ?>
              
              
              
              
           
          </div>
          
<?php require("sidebar.php"); ?>

     </div>
     <!-- Container / End -->
  
          <!-- Container -->
          
          <!-- Container / End -->
     </div>
</div>
<!-- Content Wrapper / End -->
            
  
<?php get_footer(); ?>