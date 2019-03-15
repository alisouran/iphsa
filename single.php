<?php get_header(); ?>

	<!-- start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						<?php echo get_the_title(); ?>
					</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a> <span class="fas fa-arrow-right"></span>
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
			<div class="col-lg-8">  
				<div class="main_blog_details">
					<img class="img-fluid" src="<?php the_field("news_cover"); ?>" alt="">
					<h4><?php the_title(); ?></h4>
					<div class="user_details">
						<div class="float-left">
							<?php the_tags('','',''); ?>
						</div>
						<div class="float-right">
							<div class="media">
								<div class="media-body">
									<h5><?php the_post(); the_author(); ?></h5>
									<p><?php the_date(); ?></p>
								</div>
								<div class="d-flex">
									<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
								</div>
							</div>
						</div>
					</div>
					<blockquote class="blockquote">
						<p class="mb-0"><?php echo get_post_meta($post->ID, 'news_summary', true); ?></p>
					</blockquote>
					<p><?php echo get_post_meta($post->ID, 'news_desc', true); ?></p>
					<div class="news_d_footer">
						<a class="justify-content-center" href="<?php echo get_the_comments_navigation(); ?>"><i class="far fa-comment"></i> <?php echo get_comments_number(); ?>
							Comments</a>
						<div class="news_socail ml-auto">
							<a href="#"><i class="fab fa-facebook"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-pinterest"></i></a>
							<a href="#"><i class="fas fa-rss"></i></a>
						</div>
					</div>
				</div>
                    <?php comments_template(); ?>
			</div>

			<div class="col-lg-4 sidebar">
				<div class="single-widget search-widget">
					<form class="example" action="<?php echo get_home_url(); ?>" style="margin:auto;max-width:300px">
						<input type="text" placeholder="Search Posts" name="s">
						<button type="submit"><i><span class="fas fa-search"></span></i></button>
					</form>
				</div>
				<div class="single-widget popular-posts-widget">
					<h4 class="title">Popular Posts</h4>
					<div class="blog-list ">
					<?php
						$recent_posts = wp_get_recent_posts(array(
							'numberposts' => 5,
							'post_status' => 'publish',
							'post_type'   => 'newsinfo'
						));
						foreach($recent_posts as $post) : 
					?>
						<div class="single-popular-post d-flex flex-row">
							<div class="popular-thumb">
								<?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
							</div>
							<div class="popular-details">
								<a href="<?php echo get_permalink($post['ID']) ?>">
									<h4><?php echo $post['post_title'] ?></h4>
								</a>
								<p class="text-uppercase"><?php echo $post['post_date'] ?></p>
							</div>
						</div>
					<?php endforeach; wp_reset_query(); ?>
					</div>
				</div>

				<div class="single-widget category-widget">
					<h4 class="title">Posts Tags</h4>
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
					<h4 class="title">Newsletter</h4>
					<div id="mc_embed_signup">
						<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							method="get" class="">
							<div class="form-group" style="width: 100%">
								<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'Email Address '" required="" type="email">
								<div style="position: absolute; left: -5000px;">
									<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
										type="text">
								</div>

								<button class="primary-btn text-uppercase">
									Subscribe Now
									<span class="fas fa-arrow-right"></span>
								</button>
							</div>
							<div class="info"></div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- Blog Area -->

<?php get_footer(); ?>