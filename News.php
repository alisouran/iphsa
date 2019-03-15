<?php /* Template Name: News */ 
    get_header();
?>

<!--Start News Section-->
<section id="newsSection">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12">
			<div class="row justify-content-center mt-3">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12 text-center">
					<h2>News</h2>
				</div>
			</div>
			<div class="row justify-content-center mt-2">
				<div class="col-lg-8 slider-bg">
					<div class="row justify-content-center mt-3">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12" id="newsNavContent4">
							<div id="newsNavContent1">
								<?php include('slider-ipsf.php'); ?>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12" id="newsNavContent5" style="display: none">
							<div id="newsNavContent2" style="display: none">
								<?php include('slider-iphsa.php'); ?>
							</div>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 col-12" id="newsNavContent6" style="display: none">
							<div id="newsNavContent3" style="display: none">
								<?php include('slider-course.php'); ?>
							</div>
						</div>
					</div>
					<div class="row justify-content-center text-left">
						<div class="col-lg-12 pd-0">
							<div class="tabs-bg">
								<img class="img-fluid border-hd2" src="<?php bloginfo('template_directory'); ?>/images/borderB.png" alt="">
								<a class="newsNavBtn" id="navBtnIPSF" href="#">IPSF</a>
								<img class="img-fluid border-hd2" src="<?php bloginfo('template_directory'); ?>/images/borderB.png" alt="">
								<a class="newsNavBtn" id="navBtnIPHSA" href="#">ایسفا</a>
								<img class="img-fluid border-hd2" src="<?php bloginfo('template_directory'); ?>/images/borderB.png" alt="">
								<a class="newsNavBtn" id="navBtnCourse" href="#">دوره‌ها</a>
								<img class="img-fluid border-hd2" src="<?php bloginfo('template_directory'); ?>/images/borderB.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--End News Section-->


<?php include('inc/scripts.php'); ?>
</body>
</html>