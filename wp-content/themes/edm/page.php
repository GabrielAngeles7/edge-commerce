<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="section section-banner-sm" id="home">
  <div class="container">
    <div class="offset-top">
      <div class="l-banner">
        <h1 class="l-banner-title"><?php the_title(); ?> </h1>
      </div>
    </div>
     
  </div>
</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="section section-l1 section-gray text-center copy separator" id="about">
		  <div class="container">

		    <div class="row">
		      
		      <div class="col-sm-12 col-md-4">
		       	<?php get_sidebar(); ?>
		        </div>
		      </div>

		      <div class="col-sm-12 col-md-8">
		        <div class="l-content">
		          <div class="section-hero">
					<?php
				// Start the loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				// End the loop.
				endwhile;
				?>
				</div>
				
		        </div>
		      </div>
		    </div>
		  </div>

		

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
