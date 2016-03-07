<?php get_header();  ?>

  
  <div class="bg-contact">
    <div class="container">
  
      <div class="content">
        <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  
          <h2><?php get_the_title(); ?></h2>
          <?php the_content(); ?>
  
        <?php endwhile; // end the loop?>
      </div> <!-- /,content -->
  
    
  
    </div> <!-- /.container -->
  </div> <!-- /.main -->
  
  
  <?php get_footer(); ?>