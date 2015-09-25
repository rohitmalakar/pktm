<?php
define('WP_USE_THEMES', false);  
require_once('../../../wp-load.php');
 ?>
<div class="row">
	<?php
		$i=0;
		$idname = $_POST['id'];
		$args = array(
		'post_type' => 'exhibition',
		'posts_per_page' => -1,		
		'meta_query' => array(
		array(
		'key' => 'wpcf-specific-date',
		'value' => $idname,
		'compare' => 'LIKE'
		)),
		);		
		$postslist = new WP_Query( $args);
		//var_dump($postslist);		
		while ( $postslist->have_posts() ) : $postslist->the_post(); 
			if (types_render_field("type", array( ))=="Exhibitions"){
					continue;
				}
			$i++;
		endwhile;
		?>
		
		<div class="col-xs-12">
			<div class="page-title text-center">
				<h4><strong>TOTAL:  <?php echo $i;?> Events</strong></h4>
			</div>
		</div>
	</div> <!-- /.row -->
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div id="event-carousel" class="event-carousel">
				<?php 
				while ( $postslist->have_posts() ) : $postslist->the_post(); 
				if (types_render_field("type", array( ))=="Exhibitions"){
					continue;
				}

				$imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'large');
				if($imgsrc[0] == null || $imgsrc[0] == '')
					$image = '';
				else
					$image = $imgsrc[0];
				?>		
				<div class="item">
					<div class="car-thumb">
						<div class="post-cat">
							<?php echo (rtrim(types_render_field("type", array( )), "s"));?>
						</div><!-- /.post-cat -->
						<div class="img-cover" style="background-image: url(<?php echo $image;?>)"></div>
						<div class="event-time"><?php echo types_render_field( "time-duration"); ?></div><!-- /.event-time -->
						<div class="teaser">
							<div class="location"><i class="fa fa-map-marker"></i> <?php echo types_render_field( "venue"); ?></div>
							<div class="post-title"><?php the_title(); ?></div>
							<p><a href="<?php the_permalink(); ?>"><?php echo truncate(get_the_content()); ?></a></p>
						</div> <!-- /.teaser -->
					</div> <!-- /.car-thumb -->
				</div> <!-- /.item --> 				
				<?php endwhile; ?>
			</div> <!-- /.event-carousel -->
		</div> <!-- /.col-sm-12 -->
	</div> <!-- /.row -->
	