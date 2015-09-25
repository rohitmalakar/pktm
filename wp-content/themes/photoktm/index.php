<?php
/**
 * The main template file
 */

get_header(); ?>


<div class="wrapper">
	<div class="owl-carousel" id="owl-demo">
		<?php 
		$args = array( 'post_type' => 'slider-image', 'posts_per_page' => -1 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<div>
			<a href="<?php echo types_render_field("link");?>"><img src="<?php echo $url?>" /></a>
			<div class="caption hidden"><div class="caption-inner">CAPTION</div></div>
		</div>		
		<?php endwhile; ?>
	</div><!-- ./owl-carousel-->

	<div class="container app-icons-container hidden">
		<div class="row">
			<div class="col-lg-12">
				<div class="appstore-icons">
					Download Official Photo Kathmandu App
					<a href="http://gallisalli.com" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallisalli-app-icon.png" alt=""></a>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/apple-app-store.png" alt=""></a>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/google-play-store.png" alt=""></a>
				</div> <!-- /.appstore-icons -->
			</div> <!-- /.col-lg-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container app-icons-container -->

	<div class="wrapper-events">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="event-thumb" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/exhibitions-home-thumb.jpg');">
						<a href="<?php echo site_url();?>/index.php/exhibitions/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/exhibitions-home-thumb.jpg" />
							<span>EXHIBITIONS</span>
						</a>
					</div> <!-- /.event-thumb -->
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="event-thumb" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/workshops.jpg');">
						<a href="<?php echo site_url();?>/index.php/workshops/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/workshops.jpg" />
							<span>WORKSHOPS</span>
						</a>
					</div> <!-- /.event-thumb -->
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="event-thumb" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/talks.jpg');">
						<a href="<?php echo site_url();?>/index.php/talks/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/talks.jpg" />
							<span>TALKS</span>
						</a>
					</div> <!-- /.event-thumb -->
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="event-thumb" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/slideshow.jpg');">
						<a href="<?php echo site_url();?>/index.php/slideshows/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/slideshow.jpg" />
							<span>SLIDESHOWS</span>
						</a>
					</div> <!-- /.event-thumb -->
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="event-thumb" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-reviews.jpg');">
						<a href="<?php echo site_url();?>/index.php/portfolio-reviews/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/portfolio-reviews.jpg" />
							<span>PORTFOLIO REVIEWS</span>
						</a>
					</div> <!-- /.event-thumb -->
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="event-thumb" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/artist.jpg');">
						<a href="<?php echo site_url();?>/index.php/artists/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/artist.jpg" />
							<span>ARTISTS</span>
						</a>
					</div> <!-- /.event-thumb -->
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="event-thumb" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/residency.jpg');">
						<a href="<?php echo site_url();?>/index.php/residency/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/residency.jpg" />
							<span>RESIDENCY</span>
						</a>
					</div> <!-- /.event-thumb -->
				</div> <!-- /.col-sm-3 -->
				<div class="col-sm-3 col-xs-6">
					<div class="event-thumb" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/collateral-events.jpg');">
						<a href="<?php echo site_url();?>/index.php/collateral-events/">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/collateral-events.jpg" />
							<span>COLLATERAL EVENTS</span>
						</a>
					</div> <!-- /.event-thumb -->
				</div> <!-- /.col-sm-3 -->
			</div><!--./row-->
		</div><!--./container-->
	</div><!--./wrapper-events-->
	<div class="blog-wrap">
		<div class="container">
			<div class="row">	
				<div class="col-xs-12"><h4>BLOG</h4></div>
			</div> <!-- /.row -->
			<div class="row">
				<?php $args = array( 'posts_per_page' => 2, 
				'post_type' => 'news-post' );
				$postslist = new WP_Query( $args );
				while ( $postslist->have_posts() ) : $postslist->the_post(); 
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
				if($imgsrc[0] == null || $imgsrc[0] == '')
					$image = '';
				else
					$image = $imgsrc[0];
				?>	
				<div class="col-sm-6">
					<div class="blog-thumb">
						<a href="<?php the_permalink();?>"><div class="img-cover-blog" style="background-image: url(<?php echo $image;?>)"></div></a>
						<div class="blog-thumb-info">
							<h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
							<div class="meta">
								<i class="fa fa-calendar"></i><?php echo types_render_field("entry-date", array( 'post_id' => $post->ID ))?>
								
								<div class="share pull-right">
									<a onclick="javascript:window.open('http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 'facebook_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"><i class="fa fa-facebook"></i></a> 
									<a href="javascript:window.open('https://twitter.com/share?url=<?php the_permalink();?>&amp;name=Photoktm Event&amp;hashtags=photoktm','twitter_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"><i class="fa fa-twitter"></i></a>
								</div>
								<br />
								<!-- <i class="fa fa-user"></i> <?php echo types_render_field( "author"); ?> -->
							</div><!-- ./meta -->
							<p>
								<a href="<?php the_permalink();?>">
									<?php echo truncate(get_the_content()); ?>
								</a>
							</p>
						</div>						
					</div><!-- /.blog-thum -->
				</div> <!-- /.col-sm-6 -->
				<?php endwhile;?>
				<!--<div class="col-sm-6">				
					<div class="blog-thumb">	
						<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gearing-up.jpg" /></a>
						<div class="blog-thumb-info">
							<h5><a href="#">Gearing Up</a></h5>
							<div class="meta">3 November 2015 <div class="share pull-right"><a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a></div></div>
							<p><a href="#">Text about the blog post goes here. Recent news, etc. and other important things we might want to talk about. Text about the  blog post goes here. Recent news, etc. and other important things we might want to talk about. And another other important discussion we might want to talk about.</a></p>
						</div>						
					</div>
				</div> --><!-- /.col-sm-6 -->
			</div> <!-- /.row -->
		</div><!--./container-->
	</div> <!-- /.blog-wrap -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-2">
				<h6>ORGANIZERS</h6>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photo-circle-logo.png" alt=""></a>
				</div>
				<div class="col-xs-6 col-sm-3">
				<h6>TECHNICAL PARTNERS</h6>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kazi-logo.png" alt=""></a>
				</div>
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-xs-12 logo-group">
				<h6>PARTNERS</h6>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nepal-picture-library-logo.png" alt=""></a>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/jazzmandu-logo.png" alt=""></a>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/temp-logo.png" alt=""></a>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/times-logo.png" alt=""></a>
				</div>
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-xs-12 logo-group">
				<h6>SUPPORTED BY</h6>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cku.png" alt=""></a>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo4.png" alt=""></a>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo5.png" alt=""></a>
					<a href="#"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo6.png" alt=""></a>
				</div>
			</div> <!-- /.row -->
		</div>
	</footer>
</div><!--./wrapper-->

<?php get_footer(); ?>
