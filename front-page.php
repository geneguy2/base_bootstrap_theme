<?php get_header(); ?>

<!-- =========================
     HOMEPAGE SLIDER   
============================== -->
<section class="sliderArea">
 <div class="container-fluid">
<?php putRevSlider("homeSlider") ?>
</div>
</section>
<!-- =============================================
       MARKETING MESSAGING AND FEATURETTES
================================================== --> 

<!-- SECTION MARKETING MESSAGE -->

  <div class="container">
  <!-- SECTION COLUMN -->
  <div class="row">
    <div class="col-md-12"> 
    	
       <!-- SECTION HEADER -->
    
      
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <?php the_content(); ?>
    
        <?php endwhile; endif; ?>

    
    </div>
   <!-- /SECTION COLUMN -->
   
</div>  <!-- /.ROW --> 
</div><!-- /.CONTAINER --> 
 
 <!-- /.SECTION MARKETING MESSAGE -->
 
 

  
 <?php get_footer(); ?>