<?php /* Template Name: Sponsors */ 
    get_header();
?>
<!--Start Sponsor Section-->
<section id="sponsorSection">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12 mt-6">
		<div class="row justify-content-center mt-4">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12 text-center">
                <h2>Sponsors</h2>
            </div>
		</div>
		<div class="row justify-content-center" dir="ltr">
			<div class="col-lg-8 mt-5">
					<div class="owl-carousel owl-theme owl-loaded">
						<?php
							$args = array(
								'post_per_page' => 100,
								'post_type' => 'sponsors'
							);
							query_posts($args);
							if(have_posts()):while(have_posts()):the_post();
						?>
							<div><a href="<?php echo get_post_meta($post->ID, 'sp_link', true); ?>"><img class="sp_logo_img" src="<?php the_field('sp_logo'); ?>" alt=""><p class="text-center"><?php echo get_post_meta($post->ID, 'sp_name', true); ?></p></a></div>
						<?php endwhile; endif; ?>
					</div>
			</div>
		</div>
	</div>

</section>
<!--End Sponsor Section-->

<?php include('inc/scripts.php'); ?>
</body>
</html>