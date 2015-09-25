<?php
/**
*
 **/

get_header(); ?>

<?php
	while ( have_posts() ) : the_post();
?>
<?php 
	$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
	if($imgsrc[0] == null || $imgsrc[0] == '')
		$image = '';
	else
		$image = $imgsrc[0];
?>
<div class="featured-image banner" style="background-image: url('<?php echo $image; ?>');">
	<img src="<?php echo $image; ?>" />
</div> <!-- /.featured-image -->

<?php endwhile; ?>

<div class="container exibtion-single-container">
	<div class="row">
		<div class="col-sm-7">
			<h3 class="body-title"><span class="black-color">
				<?php echo (rtrim(types_render_field("type", array( )), "s"));?>
			</span>
			<br>	
			<?php
				while ( have_posts() ) : the_post();
				?>
				<?php 
				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
				if($imgsrc[0] == null || $imgsrc[0] == '')
					$image = '';
				else
					$image = $imgsrc[0];
			?>
			<?php
			$artist = '';
			$connected = new WP_Query( array(
				'connected_type' => 'exhibition_to_artist',
				'connected_items' => get_queried_object(),
				'nopaging' => true,
				) );

			if ( $connected->have_posts() ) :
				?>
			<?php while ( $connected->have_posts() ) : $connected->the_post(); 
				$artist = ($artist != '') ? $artist . ", " . get_the_title() : $artist = get_the_title();
				$artist_url= get_permalink();
			endwhile; ?>
			<?php 
			wp_reset_postdata();
			endif;
			?>
			<?php the_title();?>		
			</h3>

			<div class="artist-name">
				<p>
					<a href="<?php echo $artist_url; ?>">
						<i class="fa fa-smile-o"></i> 
						<span class="right-txt">
							<strong>
							 <?php echo types_render_field( "artist-name"); ?>
							</strong>
						</span>
					</a>
				</p>
			</div> <!-- /.artist-name -->
			<div class="clearfix"></div>
			<div class="date-time"> 
				<p>
					<i class="fa fa-calendar"></i> 
					<span class="right-txt">
						<?php echo types_render_field( "event-duration-date"); ?> <br>
						<?php echo types_render_field( "time-duration"); ?>
					</span>
				</p>
			</div> <!-- /.date-time -->
			<div class="clearfix"></div>
			<div class="post-content">
				<?php the_content(); ?>

				<div class="share">
						<a onclick="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link;?>', 'facebook_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"><i class="fa fa-facebook"></i></a> 
						<a onclick="javascript:window.open('https://twitter.com/share?url=<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; echo $actual_link;?>&amp;name=Photoktm Event&amp;hashtags=photoktm','twitter_share', 'height=320, width=640, toolbar=no, menubar=no, scrollbars=no, resizable=no, location=no, directories=no, status=no');"><i class="fa fa-twitter"></i></a>
						
				</div> <!-- /.share -->

			</div> <!-- /.post-content -->
			<?php endwhile; ?>
		</div> <!-- /.col-sm-7 -->
		<div class="col-sm-5">
			<iframe
				height="450"
				frameborder="0" style="border:0; width: 100%;"
				src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB2H151trB6PyZYta509EdXAqW5b07nvDg
				&q=<?php echo types_render_field('lat-lng');?>" allowfullscreen>
			</iframe>
		</div> <!-- /.col-sm-5 -->
		<form action="<?php echo site_url();?>/icsgen.php" method="post">
			<input type="hidden" value="<?php echo types_render_field('startdate');?>" name="start" />
			<input type="hidden" value="<?php echo types_render_field('enddate');?>" name="end" />
			<input type="hidden" value="<?php echo get_the_title() . ' by ' . $artist;?>" name="title" />
			<input type="hidden" value="<?php echo get_the_content();?>" name="description" />
			<input type="hidden" value="<?php echo types_render_field('venue');?>" name="venue" />
			<input type="submit" value="Add to Calender" />
		</form>	
	</div> <!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>
