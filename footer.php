<!-- start footer Area -->
<footer class="footer-area section-gap d-rtl">
	<div class="container box_1170">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('AboutUs') ) : ?><?php endif; ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h6 class="footer_title">خبرنامه</h6>
					<p>عضویت در خبرنامه‌ی ای‌میل ایسفا</p>
					<div id="mc_embed_signup">
						<?php echo do_shortcode("[mc4wp_form id='60']"); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="single-footer-widget instafeed">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('instagram') ) : ?><?php endif; ?>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget f_social_wd">
					<h6 class="footer_title">دنبال کنید</h6>
					<p>ما در شبکه‌های مجازی</p>
					<div class="f_social">
						<a href="https://t.me/"><i class="fab fa-telegram icon-size"></i></a>
						<a href="https://instagram.com/"><i class="fab fa-instagram icon-size"></i></a>
						<a href="https://fb.com/"><i class="fab fa-twitter icon-size"></i></a>
						<a href="https://twitter.com/"><i class="fab fa-facebook icon-size"></i></a>
					</div>
				</div>
			</div>
		</div>

	</div>
</footer>
<!-- End footer Area -->
</div>
<!--Start Script Files-->
<?php wp_footer(); ?>
<!--End Script Files-->
</body>
</html>