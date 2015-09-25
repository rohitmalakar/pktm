<?php
/**
** Template Name: Artist
 **/

get_header(); ?>
<div class="four-col-page artist-listing">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<h3 class="text-center page-title">
				<?php
				while ( have_posts() ) : the_post();
				the_title();
				endwhile; ?>
			</h3>
			</div> <!-- /.col-sm-4 -->
		</div> <!-- /.row -->
		<div class="row">
			<?php $args = array( 'posts_per_page' => -1, 
			'post_type' => 'artist' );
			$postslist = new WP_Query( $args );
			while ( $postslist->have_posts() ) : $postslist->the_post(); 
			$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
			if($imgsrc[0] == null || $imgsrc[0] == '')
				$image = '';
			else
				$image = $imgsrc[0];
			?>
			<div class="col-sm-3">
				<div class="thumb-outer">
					<a href="<?php the_permalink();?>" class="thumbnail">
				      	<?php echo types_render_field( "artist-image");?>
				    </a>
				    <div class="caption text-center">
						<h6><?php the_title();?></h6>
						<p class="ocp"><strong><?php echo types_render_field("designation");?></strong></p>
						<p class="location"><?php echo types_render_field("country");?></p>
				    </div> <!-- /.caption -->
				</div> <!-- /.thumb-outer -->
			</div> <!-- /.col-sm-3 -->
			<?php endwhile;?>
		</div> <!-- /.row -->
	</div>
</div><!-- /.four-col-page -->
<?php get_footer(); ?>
