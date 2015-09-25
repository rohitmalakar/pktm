<?php
/**
Template Name: News
 **/

get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
		<h3 class="text-center page-title"><?php
		while ( have_posts() ) : the_post();
		the_title();
		endwhile; ?></h3>
		</div> <!-- /.col-sm-4 -->
	</div> <!-- /.row -->
	<div class="two-column-post-list">
		<div class="row">
			<?php $args = array( 'posts_per_page' => -1, 
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
						<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>						
						<div class="date-time-location">
							<p>
								<i class="fa fa-calendar"></i> <?php echo types_render_field( "entry-date"); ?>
							</p>
							
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

