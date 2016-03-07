<?php //index.php is the last resort template, if no other templates match ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



<header class="front-page-header" style="background: url('<?php the_post_thumbnail_url('full'); ?>') no-repeat center; background-size: cover; background-position: fixed; ">
 
  
      <div class="front_nav_container">
        <?php wp_nav_menu( array(
          'container' => 'ul',
          'theme_location' => 'front_nav'
        )); ?>
        
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
        </h1>

      </div> <!-- /.front_nav_container -->
 
</header><!--/.header-->

<section class="aboutusBg">
  <div class="aboutUs-container">

      
      <?php the_content(); ?>
      </div>


    <?php endwhile; // end the loop?>
  </section> <!-- /.container-->

  <section class="recent-post">
    <h1>Recent Posts</h1>
    <div class="recent-post-container">
      <div class="text-container">
        <h2>Great shoot with Kayo</h2>
        <h4>March 12, 2016</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis atque culpa libero iure perferendis odio eos nostrum deserunt et aliquam ex vitae repudiandae autem, ea, facere ducimus. Perferendis aliquam, aperiam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis atque culpa libero iure perferendis odio eos nostrum deserunt et aliquam ex vitae repudiandae autem, ea, facere ducimus. Perferendis aliquam, aperiam.</p>
      </div>
       <div class="text-container">
        <h2>Great shoot with Kayo</h2>
        <h4>March 12, 2016</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis atque culpa libero iure perferendis odio eos nostrum deserunt et aliquam ex vitae repudiandae autem, ea, facere ducimus. Perferendis aliquam, aperiam.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis atque culpa libero iure perferendis odio eos nostrum deserunt et aliquam ex vitae repudiandae autem, ea, facere ducimus. Perferendis aliquam, aperiam.</p>
      </div>
      
    </div>

  </section>

<?php get_footer(); ?>