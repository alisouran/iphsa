<?php get_header(); ?>

	<!-- start banner Area -->
	<section class="banner-area relative d-rtl">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						<?php echo get_the_title(); ?>
					</h1>
					<p class="text-white link-nav"><a href="<?php echo get_home_url(); ?>"><?php echo get_the_title( get_option('page_on_front') ); ?> </a> <span class="fas fa-arrow-left"></span>
						<a href="blog-details.html">
						<?php echo get_the_title(); ?></a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

<div class="container content-blog">


<!-- Blog Area -->
<section class="blog_area section-gap single-post-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 sidebar d-rtl">
				<div class="single-widget search-widget">
					<form class="example" action="<?php echo get_home_url(); ?>" style="margin:auto;max-width:300px">
						<input type="text" placeholder="جستجوی پست‌ها" name="s">
						<button type="submit"><i><span class="fas fa-search"></span></i></button>
					</form>
				</div>
				<div class="single-widget popular-posts-widget">
					<h4 class="title text-right">پست های اخیر</h4>
					<div class="blog-list text-right ">
					<?php 
							$args = array(
									'posts_per_page'=> 5,
									'post_type'=>'newsinfo'
								);
							// The Query
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) {
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
					?>
						<div class="single-popular-post d-flex flex-row">
							<div class="popular-thumb">
								<a href="<?php echo get_permalink(); ?>">
									<img class="img-fluid pd-r10" width = '120px' src="<?php echo the_field("news_cover"); ?>" alt="cover">
								</a>
							</div>
							<div class="popular-details">
								<a href="<?php echo get_permalink(); ?>">
									<h4><?php echo the_title(); ?></h4>
								</a>
								<p class="text-uppercase"><?php echo get_the_date(); ?></p>
							</div>
						</div>
						<?php
                                }
                            }else{}
                        ?>
					</div>
				</div>

				<div class="single-widget category-widget">
					<h4 class="title text-right">برچسب ها</h4>
					<ul>
						<?php
							$terms = get_terms('post_tag',array('hide_empty'=>false));
							foreach($terms as $t) {
								echo '<li><div class="justify-content-between align-items-center d-flex"><p>'.$t->name.'</p><span>'.$t->count.'</span></div></li>';
							}
						?>
					</ul>
				</div>

				<div class="single-widget newsletter-widget">
					<h4 class="title text-right">خبرنامه</h4>
					<div id="mc_embed_signup">
						<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							method="get" class="">
							<div class="form-group" style="width: 100%">
								<input name="EMAIL" placeholder="آدرس ایمیل" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'آدرس ایمیل '" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
										type="text">
								</div>

								<button class="primary-btn text-uppercase">
									<span class="fas fa-arrow-right"></span>
									عضویت
								</button>
							</div>
							<div class="info"></div>
						</form>
					</div>
				</div>

			</div>
			<div class="col-lg-8">  
				<div class="main_blog_details">
				<?php
						while ( have_posts() ) :
							the_post(); 
							the_content();
						endwhile;
				?>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- Blog Area -->

<?php get_footer(); ?>