<?php
/**
* Template Name: Exhibition
 **/

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<h3 class="text-center page-title"><?php
		while ( have_posts() ) : the_post();
		echo (strtoupper(get_the_title()));
		endwhile; ?></h3>
		</div> <!-- /.col-sm-4 -->
	</div> <!-- /.row -->
	<div class="two-column-post-list">
		<div class="row">
			
			<?php		
			$args = array( 'posts_per_page' => 30, 
				'post_type' => 'exhibition',
				'meta_query' => array(
					array(
						'key' => 'wpcf-type',
						'value' => $post->post_name,
						'compare' => '='
						)                   

					), );
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
					<a href="<?php the_permalink();?>"><div class="img-cover-exhibition" style="background-image: url(<?php echo $image;?>)"></div></a>
					<div class="blog-thumb-info">
						<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
						<div class="artist-name"><a href="#"><?php echo types_render_field( "artist-name"); ?></a></div>
						<div class="date-time-location">
							<p>
								<i class="fa fa-calendar"></i> <?php echo types_render_field( "event-duration-date"); ?> | <?php echo types_render_field( "time-duration"); ?>
							</p>
							<p><i class="fa fa-map-marker"></i> <?php echo types_render_field( "venue"); ?></p>
						</div><!-- /.date-time-location -->
						<p>
							<a href="<?php the_permalink();?>">
								<?php echo truncate(get_the_content()); ?>
							</a>
						</p>
					</div> <!-- /.blog-thumb-info -->						
				</div><!-- /.blog-thum -->
			</div> <!-- /.col-sm-6 -->
			
			<?php endwhile; ?>			
		</div> <!-- /.row -->
	</div> <!-- /.two-column-post-list -->
</div> <!-- /.container -->
<?php get_footer(); ?>
