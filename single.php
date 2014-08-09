<?php get_header(); ?>




<!-- =============================================
       PAGE CONTENT
================================================== --> 

<!-- SECTION PAGE CONTENT -->
<section class="pageMainContentArea"> 
  <div class="container">
  <!-- SECTION COLUMN -->
  <div class="row">
    
    
      <!-- SECTION LEFT COLUMN -->
      <div class="pageMainContent"> 
    	<div class="col-md-9"> 
       <!-- SECTION HEADER -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          
            <h1><?php the_title(); ?></h1>
         

          <p><?php the_content(); ?></p>
          <hr>

			<?php comments_template(); ?>
            
        <?php endwhile; else: ?>
          
          
            <h1>Oh no!</h1>
       

          <p>No content is appearing for this page!</p>

        <?php endif; ?>
    
    </div>
    </div>
     <?php get_sidebar( 'blog' ); ?>
    
   <!-- /SECTION LEFT COLUMN -->
   
</div> <!-- /.ROW --> 
</div><!-- /.CONTAINER --> 
 </section> 
 <!-- /.SECTION MARKETING MESSAGE -->
 
 
 
<?php get_footer(); ?>
