<?php /* Template Name: Home Page */ get_header(); ?>

<!--Start Main Page -->
	<section id="mainSection">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
		<!--Start First Page Icons-->
				<div class="row justify-content-center mt-5">
					<div id="hideNewsIcon"  class="col-12 col-md-2 col-lg-2 col-xl-2 homeIcon">
						<a id="news" href="<?php echo get_home_url(); ?>/news">
							<div class="row justify-content-center bg-icons-ipsf text-center mr-z-10">
								<div class="col-4 col-lg-12 col-xl-12 col-md-12 col-xs-12 pd-10">
									<img class="img-fluid icons-pd icons-bg" src="<?php bloginfo('template_directory'); ?>/images/icons/news.svg" alt="">
								</div>
								<div class="col-8 col-lg-12 col-xl-12 col-md-12 col-xs-12">
									<h2>اخبار</h2>	
								</div>
							</div>
						</a>
					</div>
					<div id="hideSponsorIcon"  class="col-12 col-md-2 col-lg-2 col-xl-2 homeIcon">
						<a id="sponsor" href="<?php echo get_home_url(); ?>/sponsor">
							<div class="row justify-content-center bg-icons-ipsf text-center mr-z-10">
								<div class="col-4 col-lg-12 col-xl-12 col-md-12 col-xs-12 pd-10">
									<img class="img-fluid icons-pd icons-bg" src="<?php bloginfo('template_directory'); ?>/images/icons/ipsf_logo.png" alt="">
								</div>
								<div class="col-8 col-lg-12 col-xl-12 col-md-12 col-xs-12">
									<h2>اسپانسر</h2>	
								</div>
							</div>
						</a>
					</div>
					<div id="hideMemberIcon" class="col-12 col-md-2 col-lg-2 col-xl-2 homeIcon">
						<a id="member" href="<?php echo get_home_url(); ?>/members">
							<div class="row justify-content-center bg-icons-ipsf text-center mr-z-10">
								<div class="col-4 col-lg-12 col-xl-12 col-md-12 col-xs-12 pd-10">
									<img class="img-fluid icons-pd icons-bg" src="<?php bloginfo('template_directory'); ?>/images/icons/avatar.svg" alt="">
								</div>
								<div class="col-8 col-lg-12 col-xl-12 col-md-12 col-xs-12">
									<h2>پروفایل</h2>	
								</div>
							</div>
						</a>
					</div>
				</div>
		<!--End First Page Icons-->
		<!--Start First Page Texts-->
				<div class="row justify-content-center mt-2">
						<div class="d-none d-sm-none col-md-2 col-lg-2 col-xl-2 d-md-block d-lg-block d-xl-block ">
							<div id="hideNewsText" class="text-center fpt-fonts">
								<a href="<?php echo get_home_url(); ?>/news">اخبار</a>
							</div>
						</div>
						<div class="d-none d-sm-none col-md-2 col-lg-2 col-xl-2 d-md-block d-lg-block d-xl-block ">
							<div id="hideSponsorText" class="text-center fpt-fonts">
								<a href="<?php echo get_home_url(); ?>/sponsor">اسپانسر</a>
							</div>
						</div>
						<div class="d-none d-sm-none col-md-2 col-lg-2 col-xl-2 d-md-block d-lg-block d-xl-block ">
							<div id="hideMemberText" class="text-center fpt-fonts">
								<a href="<?php echo get_home_url(); ?>/profile">پروفایل</a>
							</div>
						</div>
					</div>
			</div>
		<!--End First Page Texts-->
	</section>
<!--End Main Page -->




<?php include('inc/scripts.php'); ?>
</body>
</html>