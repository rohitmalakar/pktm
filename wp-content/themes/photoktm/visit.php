<?php
/**
* Template Name: Visit
 **/

get_header(); ?>
<!-- markup for visit page -->
<div class="default-page two-column">
	<div class="page-title text-center">
		<h3><strong><?php
		//while ( have_posts() ) : the_post();
		the_title();
		//endwhile; ?></strong></h3>
	</div><!-- /.page-title -->
	<div class="container post-container">
		<div class="row">
			<div class="col-sm-6">
				<?php echo types_render_field("left-box", array());?>
			</div> <!-- /.col-sm-6 -->
			<div class="col-sm-6">
				<?php echo types_render_field("right-box", array());?>
			</div> <!-- /.col-sm-6 -->
		</div>
	</div> <!-- /.contianer -->
	<?php 
	$bottom_left_box = types_render_field('bottom-left-box', array());
	$bottom_right_box = types_render_field('bottom-right-box', array());
	?>
	<div class="content-with-bg">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="page-title text-center">
						<h3><strong>RECOMMENDED ACCOMODATIONS</strong></h3>
					</div><!-- /.page-title -->
				</div>
			</div> <!-- /.row -->
			<div class="row">
				<?php $args = array( 'posts_per_page' => 10, 
					'post_type' => 'accomodation' );
				$postslist = new WP_Query( $args );
				while ( $postslist->have_posts() ) : $postslist->the_post(); 
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
				if($imgsrc[0] == null || $imgsrc[0] == '')
					$image = '';
				else
					$image = $imgsrc[0];
				?>
				<div class="col-sm-6 post-box">
					<h5><?php the_title();?></h5>
						<div class="row">
							<div class="col-xs-6 post-thumb">
								<?php $http_url=("http://".types_render_field('link',array('output' => 'raw')));?>
								<a href="<?php echo $http_url; ?>">
									<div class="img-cover-visit" style="background-image: url(<?php echo $image;?>)"></div>
								</a>
							</div>
							<div class="col-xs-6">

								<p><?php echo truncate(get_the_content()); ?><br>
									<!-- <?php echo types_render_field('link');?> -->
									<a href="<?php echo 'http://' . types_render_field('link', array('raw'=>'true'));?>" target="_blank">
										<?php echo types_render_field('link', array('raw'=>'true'));?>
									</a>
								</p>

							</div>
						</div>
				</div> <!-- /.col-sm-6 post-box -->
				<?php endwhile;?>
			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</div> <!-- content-with-bg -->
	<div class="page-title text-center">
		<h3><strong>Things to do</strong></h3>
	</div>
	<div class="container post-container">
		<div class="row">
			<div class="col-sm-6">
				<?php echo $bottom_left_box;?>
			</div> <!-- /.col-sm-6 -->
			<div class="col-sm-6">
				<?php echo $bottom_right_box;?>
			</div> <!-- /.col-sm-6 -->
		</div>
	</div> <!-- /.contianer -->
	
	<div class="page-title text-center">
		<h3><strong><?php
		while ( have_posts() ) : the_post();
		the_title();
		endwhile; ?></strong></h3>
	</div><!-- /.page-title -->
	<div class="container post-container">
		<div class="row">
			<div class="col-sm-6">
				<?php echo types_render_field("left-box");?>
			</div> <!-- /.col-sm-6 -->
			<div class="col-sm-6">
				<?php echo types_render_field("right-box");?>
			</div> <!-- /.col-sm-6 -->
		</div>
	</div> <!-- /.contianer -->
</div><!-- /.default-page two-column -->
<?php get_footer(); ?>
