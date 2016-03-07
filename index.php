<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="blogs-main">
  <div class="blog-container">

    <div class="blogPost-content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.c -->

   

  </div> <!-- /.blogPost-content -->
</div> <!-- /.blog-main -->

<?php get_footer(); ?>