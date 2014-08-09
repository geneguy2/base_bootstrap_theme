<?php
/*
  Template Name: Full Width Template
*/

?>

<?php get_header(); ?>


<!-- =============================================
       PAGE CONTENT
================================================== --> 

<!-- SECTION FULL WIDTH PAGE CONTENT -->
<section class="pageFullWidth"> 
  <div class="container">
  <!-- SECTION COLUMN -->
  <div class="row">
    <div class="col-md-12"> 
    	
       <!-- SECTION HEADER -->
       
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          
            <h1><?php the_title(); ?></h1>
         

          <p><?php the_content(); ?></p>

        <?php endwhile; else: ?>
          
          
            <h1>Oh no!</h1>
       

          <p>No content is appearing for this page!</p>

        <?php endif; ?>

     
    </div>
   <!-- /SECTION COLUMN -->
   
</div>  <!-- /.ROW --> 
</div><!-- /.CONTAINER --> 
 </section> 
 <!-- /.SECTION MARKETING MESSAGE -->
 
 
 
   <?php get_footer(); ?>
