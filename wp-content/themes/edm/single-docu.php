<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); 

?>
<div class="section section-banner-sm" id="home">
  <div class="container">
    <div class="offset-top">
      <div class="l-banner">
        <h1 class="l-banner-title"><?php the_title(); ?> </h1>
      </div>
    </div>
     
  </div>
</div>

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
			 <?php while ( have_posts() ) : the_post();?>
			<div class="panel-group" id="accordion">
	          <div class="panel panel-default">
	            <div class="panel-heading">
	              <h4 class="panel-title title">
	                <a data-toggle="collapse" data-parent="#accordion" href="#collapseHero" class="">
	               <?php the_field('post_accordion_title') ;?>
	                </a>
	              </h4>
	            </div>
	            <div id="collapseHero" class="panel-collapse collapse in">
	              <div class="panel-body">
		              <ul>
		              	

		              <?php $cntr = 1;
			          	if( have_rows('post_area') ):
			              while ( have_rows('post_area') ) : the_row();

			            ?>
							<li>
		              			<a href="#section-<?php echo $cntr; ?>"><?php the_sub_field('post_title'); ?></a>
		              		</li>
						<?php $cntr++; ?>
						  <?php  endwhile; endif; ?>
		              </ul>
	              </div>
	                 <?php endwhile;?>
	            </div>
	          </div>
	        </div>

	        <div class="copy">


          <?php
          	$cntr = 1;
          	if( have_rows('post_area') ):
              while ( have_rows('post_area') ) : the_row();

            ?>
				<div class="section" id="section-<?php echo $cntr; ?>">
		        	<h4 class="copy-title t-blue"><?php the_sub_field('post_title'); ?></h4>
		        	<?php the_sub_field('post_content'); ?>	
		        </div>
		        <?php $cntr++; ?>
			   <?php  endwhile; endif; ?>
	        </div>
		</div>
		<?php
          	// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next Post', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title"></span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( '', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous Post', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title"></span>',
			) ); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
