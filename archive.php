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
       
       <div class="page-header">
          <h1><?php wp_title(''); ?></h1>
        </div>

         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><em>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y');?>
              in <?php the_category( ', ' ); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </em></p>

            

            <?php the_excerpt(); ?>
            
            <hr>

          </article>

         
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

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
