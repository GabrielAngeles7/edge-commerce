<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div> 
<div class="l-footer">
	<div class="section section-contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 contact-us">
					<div class="section section-l1">
					<?php $title = get_theme_options('title', '');
						    str_replace('', '', $title); ?>
						<?php if( $title != '' ) { ?>
   
						<h3 class="title t-upper  mb-30"><?php echo $title; ?></h3>
						  <?php } ?>

						<?php $description = get_theme_options('description', '');
						    str_replace('', '', $description); ?>
						<?php if( $description != '' ) { ?>

						<p class="mb-20"><?php echo $description; ?></p>
						 <?php } ?>
						
						<?php $address = get_theme_options('address', '');
						    str_replace('', '', $address); ?>
						<?php if( $address != '' ) { ?>

						<p class="mb-20"><?php echo $address; ?></p>
						  <?php } ?>

						<?php $phone = get_theme_options('phone', '');
						    str_replace('', '', $phone); ?>
						<?php if( $phone != '' ) { ?>

						<p class="mb-20"><?php echo $phone; ?></p>
						  <?php } ?>
					</div>
				</div>
				<div class="col-sm-8 contact-deatils">
					<div class="section section-l1">
					 <?php echo do_shortcode('[contact-form-7 id="14" title="Contact Form"]'); ?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footnotes">
	<?php $copyright = get_theme_options('copyright', '');
	    str_replace('', '', $copyright); ?>
	<?php if( $copyright != '' ) { ?>

		<div class="container"><?php echo $copyright; ?></div>

		  <?php } ?>
	</div>
</div>     
</div>
</div>

<?php wp_footer(); ?>


</body>
</html>
