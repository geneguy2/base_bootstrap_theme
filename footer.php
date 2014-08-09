
  
  <!-- SECTION WIDGETS -->
  <section class="widgetArea">
  <div class="container">
      <div class="row">
      
          <!-- COLUMN 1-->
           <section class="widgetColumn">
          <div class="col-md-3">
     <?php if ( dynamic_sidebar( 'front-column1' ) ); ?>
           </div>
           </section>
           <!-- END COLUMN 1-->
           
        <!-- COLUMN 2-->
         <section class="widgetColumn">
       <div class="col-md-3">
      <?php if ( dynamic_sidebar( 'front-column2' ) ); ?>
      </div>
      </section>
      <!-- END COLUMN 2-->
      
       <!-- COLUMN 3-->
        <section class="widgetColumn">
       <div class="col-md-3">
    <?php if ( dynamic_sidebar( 'front-column3' ) ); ?>
      </div>
      </section>
      <!-- END COLUMN 3-->
      
       <!-- COLUMN 4-->
        <section class="widgetColumn">
       <div class="col-md-3">
     <?php if ( dynamic_sidebar( 'front-column4' ) ); ?>
      </div>
      </section>
      <!-- END COLUMN 4-->
      
      </div><!-- /.ROW --> 
  </div><!-- /.CONTAINER --> 
  </section>
  <!-- /END SECTION WIDGETS -->

<!-- =========================
     FOOTER
============================== -->  
  <!-- FOOTER -->
 <footer>
 <section class="footerArea"> 
 <!-- CONTAINER --> 
<div class="container">   

 <div class="row"> 
 <!-- END COLUMN 1-->
     <section class="copyrightColumn"> 
     <div class="col-md-4"> 
    <p class="copyright">&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>
    
    </div>
    </section>
    <!-- END COLUMN 1-->
    
    <!-- END COLUMN 2-->
    <div class="col-md-8"> 
     <div class="footerLinks"> 
   
 <?php if ( has_nav_menu( 'secondary_menu' ) ) { ?>
	<?php $defaults = array(
	  'theme_location'  => 'secondary_menu',
	  'menu'            => '', 
	  'container'       => false, 
	  'echo'            => true,
	  'fallback_cb'     => false,
	  'items_wrap'      => '<ul class="list-inline text-right"> %3$s</ul>',
	  'depth'           => 0 );
	  wp_nav_menu( $defaults );
	?>
<?php } else { ?>
	<ul>
	  <?php wp_list_pages('title_li='); ?>
	</ul>
<?php } ?>

</div>
</div>
   <!-- END COLUMN 2--> 
     </div>
    
    
    
   </div><!-- /.ROW --> 
 </div><!-- /.CONTAINER --> 
 </section>
</footer><!-- /.FOOTER --> 

<!-- BOOTSTRAP CORE JAVASCRIPT
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 



	
			
<?php wp_footer(); ?>	  
</body>
</html>
