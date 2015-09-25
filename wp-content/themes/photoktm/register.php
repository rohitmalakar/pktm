<?php
/**
Template Name: Register
 **/

get_header(); ?>
<div class="wrapper">
	<div class="" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/full-bg.jpg'); background-size: cover; padding-bottom: 20px;"><!--full-page-content-->
		<div class="body-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title text-center">
							<h2>
							<?php
							while ( have_posts() ) : the_post();
							the_title();
							endwhile; ?>
							</h2>
						</div>
					</div>
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="form-container">
							<?php echo do_shortcode("[CRF_Form id='1']"); ?>
						</div>
						<div class="text-center">
							<input type="submit" class="trans-btn">
						</div>
					</div>
				</div> <!-- /.row -->
			</div><!-- /.container -->
		</div> <!-- /.body-content -->
	</div> <!-- /.full-page-content -->

</div><!--./wrapper-->
<?php get_footer(); ?>

