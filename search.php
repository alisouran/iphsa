<?php get_header(); ?>

	<!-- Start banner Area -->
	<section class="banner-area relative">
		<div class="overlay overlay-bg"></div>
		<div class="container box_1170">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Search
					</h1>
					<p class="text-white link-nav"><a href="index.html">Home </a> <span class="fa fa-arrow-right"></span> <a href="archive.html">
							Search</a></p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->
	<div class="container content-blog">
			<!-- Start main body Area -->
	<div class="main-body section-gap">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start Post Area -->
					<section class="post-area">
						<div class="row">
							<?php 
								$s=get_search_query();
								$args = array(
										's' =>$s,
										'post_type'=>'newsinfo',
									);
								// The Query
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) {
										$the_query->the_post();
							?>
							<div class="col-lg-6 col-md-6">
								<div class="single-post-item short">
									<figure>
										<img class="post-img img-fluid" id="canvasHolder" src="<?php the_field("news_cover"); ?>" alt="">
									</figure>
									<h3>
										<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<p><?php echo get_post_meta($post->ID, 'news_summary', true); ?>.</p>
									<a href="<?php echo get_permalink(); ?>" class="primary-btn text-uppercase mt-15">continue Reading</a>
									<div class="post-box">
										<div class="d-flex">
											<div>
												<?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
											</div>
											<div class="post-meta">
												<div class="meta-head">
													<a href="#"><?php the_author(); ?></a>
												</div>
												<div class="meta-details">
													<ul>
														<li>
															<a href="#">
																<span class="far fa-calendar-alt"></span>
																<?php the_date('d/M/Y'); ?>
															</a>
														</li>
														<li>
															<a href="#">
																<span class="far fa-comment"></span>
																<?php echo get_comments_number(); ?>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
									}
								}else{}
							?>
							<div class="col-lg-12">
							<?php wpbeginner_numeric_posts_nav(); ?>
								<!-- <nav class="blog-pagination justify-content-center d-flex">
									<ul class="pagination">
										<li class="page-item">
											<a href="#" class="page-link" aria-label="Previous">
												<span aria-hidden="true">
													<span class="fas fa-arrow-left"></span>
												</span>
											</a>
										</li>
										<li class="page-item"><a href="#" class="page-link">01</a></li>
										<li class="page-item active"><a href="#" class="page-link">02</a></li>
										<li class="page-item"><a href="#" class="page-link">03</a></li>
										<li class="page-item"><a href="#" class="page-link">04</a></li>
										<li class="page-item"><a href="#" class="page-link">09</a></li>
										<li class="page-item">
											<a href="#" class="page-link" aria-label="Next">
												<span aria-hidden="true">
													<span class="fas fa-arrow-right"></span>
												</span>
											</a>
										</li>
									</ul>
								</nav> -->
							</div>
						</div>
					</section>
					<!-- Start Post Area -->
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
	</div>
	<!-- Start main body Area -->

<?php get_footer(); ?>