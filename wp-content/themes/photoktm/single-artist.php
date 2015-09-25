<?php
/**
**
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

<div class="featured-image banner" style="background-image: url('<?php echo $image;?>');">
	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/artist-featured-image.jpg" />
</div> <!-- /.featured-image -->

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<?php echo types_render_field( "artist-image");?>
		</div> <!-- /.col-sm-3 -->
		<div class="col-sm-9 col-md-7">
			<div class="artist-intro">
				<h5 class="artist-name"><?php the_title();?></h5>
				<p><?php echo types_render_field("designation");?> <br>
				<?php echo types_render_field("country");?></p>
			</div>
			<div class="detial">
				<?php the_content(); ?>
			</div> <!-- /.detail -->
		</div><!-- /.col-sm-9 -->
	</div> <!-- /.row -->
</div> <!-- /.container -->
<?php endwhile; ?>

<div class="exibiton-car-outer">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h5><?php the_title();?> at photo kathmandu</h5>
					</div>
				</div>
				<div class="container">
			<?php
				$i=0;
	$exhibAry = array();
	$workAry = array();
	$talkAry = array();
	$slideshowAry = array();
	$portfolioAry = array();
	$collateralAry = array();
	$connected = new WP_Query( array(
		'connected_type' => 'exhibition_to_artist',
		'connected_items' => get_queried_object(),
		'nopaging' => true,
		) );
	if ( $connected->post ) :
		?>
	<?php while ( $connected->post ) : $connected->the_post();
	$type = types_render_field('type');
	switch($type) {
		case 'Exhibitions':
		array_push($exhibAry,'<div class="item">
					<div class="car-thumb">
						<div class="post-cat">
							EXHIBITION
						</div><!-- /.post-cat -->
						<a href="'. get_the_permalink() .'"><div class="img-cover-localhost/photoktmevent" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) )
						 .')"></div></a>
						<div class="event-time">'. types_render_field( "time-duration") . '</div><!-- /.event-time -->
						<div class="teaser">
							<div class="location"><i class="fa fa-map-marker"></i>' . types_render_field( "venue") . '</div>
							<div class="post-title"><a href="'. get_the_permalink() .'">' . get_the_title() . '</a></div>
							
						</div> <!-- /.teaser -->
					</div> <!-- /.car-thumb -->
				</div> <!-- /.item -->');
		$i++;
		break;
		case 'Workshops':
		array_push($workAry,'<div class="item">
					<div class="car-thumb">
						<div class="post-cat">
							WORKSHOP
						</div><!-- /.post-cat -->
						<a href="'. get_the_permalink() .'"><div class="img-cover" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) .')"></div></a>
						<div class="event-time">'. types_render_field( "time-duration") . '</div><!-- /.event-time -->
						<div class="teaser">
							<div class="location"><i class="fa fa-map-marker"></i>' . types_render_field( "venue") . '</div>
							<div class="post-title"><a href="'. get_the_permalink() .'">' . get_the_title() . '</a></div>
							
						</div> <!-- /.teaser -->
					</div> <!-- /.car-thumb -->
				</div> <!-- /.item -->');
		$i++;
		
		break;
		case 'Talks':
		array_push($talkAry,'<div class="item">
					<div class="car-thumb">
						<div class="post-cat">
							TALK
						</div><!-- /.post-cat -->
						<a href="'. get_the_permalink() .'"><div class="img-cover" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) .')"></div></a>
						<div class="event-time">'. types_render_field( "time-duration") . '</div><!-- /.event-time -->
						<div class="teaser">
							<div class="location"><i class="fa fa-map-marker"></i>' . types_render_field( "venue") . '</div>
							<div class="post-title"><a href="'. get_the_permalink() .'">' . get_the_title() . '</a></div>
							
						</div> <!-- /.teaser -->
					</div> <!-- /.car-thumb -->
				</div> <!-- /.item -->');

		$i++;
		break;
		case 'Slideshows':
		array_push($slideshowAry,'<div class="item">
					<div class="car-thumb">
						<div class="post-cat">
							SLIDESHOW
						</div><!-- /.post-cat -->
						<a href="'. get_the_permalink() .'"><div class="img-cover" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) .')"></div></a>
						<div class="event-time">'. types_render_field( "time-duration") . '</div><!-- /.event-time -->
						<div class="teaser">
							<div class="location"><i class="fa fa-map-marker"></i>' . types_render_field( "venue") . '</div>
							<div class="post-title"><a href="'. get_the_permalink() .'">' . get_the_title() . '</a></div>
							
						</div> <!-- /.teaser -->
					</div> <!-- /.car-thumb -->
				</div> <!-- /.item -->');
		
		$i++;
		break;
		case 'Portfolio Reviews':
		array_push($portfolioAry,'<div class="item">
					<div class="car-thumb">
						<div class="post-cat">
							PORTFOLIO REVIEW
						</div><!-- /.post-cat -->
						<a href="'. get_the_permalink() .'"><div class="img-cover" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) .')"></div></a>
						<div class="event-time">'. types_render_field( "time-duration") . '</div><!-- /.event-time -->
						<div class="teaser">
							<div class="location"><i class="fa fa-map-marker"></i>' . types_render_field( "venue") . '</div>
							<div class="post-title"><a href="'. get_the_permalink() .'">' . get_the_title() . '</a></div>
							
						</div> <!-- /.teaser -->
					</div> <!-- /.car-thumb -->
				</div> <!-- /.item -->');
		
		$i++;
		break;
		case 'Collateral Events':
		array_push($collateralAry,'<div class="item">
					<div class="car-thumb">
						<div class="post-cat">
							COLLATERAL EVENT
						</div><!-- /.post-cat -->
						<a href="'. get_the_permalink() .'"><div class="img-cover-localhost/photoktmevent" style="background-image: url(' . wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) .')"></div></a>
						<div class="event-time">'. types_render_field( "time-duration") . '</div><!-- /.event-time -->
						<div class="teaser">
							<div class="location"><i class="fa fa-map-marker"></i>' . types_render_field( "venue") . '</div>
							<div class="post-title"><a href="'. get_the_permalink() .'">' . get_the_title() . '</a></div>
							
						</div> <!-- /.teaser -->
					</div> <!-- /.car-thumb -->
				</div> <!-- /.item -->');

		$i++;
		break;
	}
	endwhile; ?>
	<?php 
	wp_reset_postdata();
	endif;
	?>
	<div class="row">
		<div class="col-xs-12">
			<div class="page-title text-center">
				<h4><strong>TOTAL:  <?php echo $i; ?> Events</strong></h4>
			</div>
		</div>
	</div> <!-- /.row -->
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div id="event-carousel" class="event-carousel">
		
	<!--Artist Involvement-->
	<?php
	if(count($exhibAry) > 0) {		
		foreach ($exhibAry as $exhib) {
			echo $exhib;
		}
		
	}
	if(count($workAry) > 0) {
		
		foreach ($workAry as $work) {
			echo $work;
		}
		
	}
	if(count($talkAry) > 0) {
		
		foreach ($talkAry as $talk) {
			echo $talk;
		}
		
	}
	if(count($slideshowAry) > 0) {
		
		foreach ($slideshowAry as $slideshow) {
			echo $slideshow;
		}
		
	}
	if(count($portfolioAry) > 0) {
		
		foreach ($portfolioAry as $portfolio) {
			echo $portfolio;
		}
		
	}
	if(count($collateralAry) > 0) {
		
		foreach ($collateralAry as $collateral) {
			echo $collateral;			
		}
		
	}
	?>

			</div> <!-- /.event-carousel -->
		</div> <!-- /.col-sm-12 -->
	</div> <!-- /.row -->
			</div> <!-- /.col-xs-12 -->
		</div>
	</div>
	<div class="clearfix"></div>
</div> <!-- /.exibiton-car-outer -->
<?php get_footer(); ?>
