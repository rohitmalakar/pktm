<?php
/**
* Template Name:Press Release
**/
get_header();?>
<!-- press markup -->
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<h3 class="body-title">
				PRESS RELEASE
			</h3>
			<p><?php echo types_render_field("introduction");?></p>
			<?php echo types_render_field("languages");?>
		</div> <!-- /.col-md-4 -->
		<div class="col-md-6 col-md-offset-1">
			<h3 class="body-title">PHOTOS</h3>
			<p>
				<?php echo types_render_field("download-packs");?>
			</p>
			<div class="row press-release-photo">
				<div class="col-xs-6">
					<?php echo types_render_field("image-previews",array("index" => "0", "class" => "full-size-img"));?>
					<?php echo types_render_field("image-previews",array("index" => "1" , "class" => "full-size-img"));?>
				</div>
				<div class="col-xs-6">
					<?php echo types_render_field("image-previews",array("index" => "2", "class" => "full-size-img"));?>
					<?php echo types_render_field("image-previews",array("index" => "3", "class" => "full-size-img"));?>
				</div>
			</div><!-- /.row -->
		</div> <!-- /.col-md-4 -->
	</div>
</div> <!-- container -->
<?php get_footer(); ?>