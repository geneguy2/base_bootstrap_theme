<?php
/*
  * The template for displaying 404 pages (Not Found)

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
    <div class="col-md-12 text-center"> 
    	
       <!-- SECTION HEADER -->
       
      

          
            <h1><?php _e( 'Not Found', 'bdc' ); ?></h1>
            
             <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'bdc' ); ?></h2>
                    <p><?php _e( 'It looks like nothing was found at this location.', 'bdc' ); ?></p>
                    <p class="text-center"> <a class="btn btn-danger btn-lg" role="button" href="<?php echo home_url(); ?>">Take me home &raquo; </a></p>
         

         

       
          
          
          

     
    </div>
   <!-- /SECTION COLUMN -->
   
</div>  <!-- /.ROW --> 
</div><!-- /.CONTAINER --> 
 </section> 
 <!-- /.SECTION MARKETING MESSAGE -->
 
 
 
   <?php get_footer(); ?>
