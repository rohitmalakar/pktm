<?php
/**
* Template Name:ABOUT
**/
get_header();?>
<!-- press markup -->
<div class="default-page two-column">
	<?php
	while ( have_posts() ) : the_post();
	?>
	<?php 
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
	if($imgsrc[0] == null || $imgsrc[0] == '')
		$image = '';
	else
		$image = $imgsrc[0];
	endwhile; ?>
	<div class="featured-image banner" style="background-image: url('<?php echo $image; ?>');">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/artist-featured-image.jpg" />
	</div> <!-- /.featured-image -->
	<div class="container page-content">
		<div class="row">
			<div class="col-sm-6">
				<h3>About Photo Kathmandu</h3>
				<p><?php echo types_render_field("about-photokathmandu");?></p>
			</div> <!-- /.col-sm-6 -->
			<div class="col-sm-6">
				<h3>Theme: TIME</h3>
				<p><?php echo types_render_field("theme");?></p>
			</div> <!-- /.col-sm-6 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
	<div class="section full-img">
		<?php echo types_render_field("landscape-image");?>
	</div> <!-- /.full-img -->
	<div class="footer-link">
		<div class="container">
			<div class="row">
				<div class="col-xs-12"><h3 class="text-center">The Festival Team</h3></div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<h5>festival directors</h5>
					<ul>
						<li><?php echo do_shortcode("[types field='festival-directors' separator='</li><li>'][/types]")?></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h5>curatorial team</h5>
					<ul>
						<li><?php echo do_shortcode("[types field='curatorial-team' separator='</li><li>'][/types]")?></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h5>festival team</h5>
					<ul>
						<li><?php echo do_shortcode("[types field='festival-team' separator='</li><li>'][/types]")?></li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h5>Design</h5>
					<ul>
						<li><?php echo do_shortcode("[types field='design' separator='</li><li>'][/types]")?></li>
					</ul>
				</div>

			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.footer-link -->
</div> <!-- /.default-page two-column -->

<?php get_footer(); ?>