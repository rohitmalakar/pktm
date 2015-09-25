<?php
/**
* Template Name: Schedule
 **/

get_header(); ?>


  
 
<div class="secondary-nav">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div id="date-carousel" class="date-carousel"><!--id passed to ajax and data displayed according to the select box having same value-->
				  <div><a id="thur-29oct" class="date-list"> THUR, 29 OCT </a></div>
				  <div><a id="fri-30oct" class="date-list" > FRI, 30 OCT </a></div>
				  <div><a id="sat-31oct" class="date-list"> SAT, 31 OCT </a></div>
				  <div><a id="sun-1nov" class="date-list"> SUN, 1 NOV </a></div>
				  <div><a id="mon-2nov" class="date-list"> MON, 2 NOV </a></div>
				  <div><a id="tues-3nov" class="date-list"> TUES, 3 NOV </a></div>
				  <div><a id="wed-4nov" class="date-list"> WED, 4 NOV </a></div>
				  <div><a id="thur-5nov" class="date-list"> THUR, 5 NOV </a></div>
				  <div><a id="fri-6nov" class="date-list"> FRI, 6 NOV </a></div>
				  <div><a id="sat-7nov" class="date-list"> SAT, 7 NOV </a></div>
				  <div><a id="sun-8nov" class="date-list"> SUN, 8 NOV </a></div>
				  <div><a id="mon-9nov" class="date-list">MON, 9 NOV </a></div>

				</div>
			</div>
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div> <!-- /.secondary-nav -->

<div class="container">
	 <div class="result">	 	
<div class="row">
	<?php
		$i=0;		
		$args = array(
		'post_type' => 'exhibition',
		'posts_per_page' => -1,		
		'meta_query' => array(
		array(
		'key' => 'wpcf-specific-date',
		'value' => 'sat-31oct',
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
	
	</div> <!--/.result -->
	<div class="row">
		<div class="col-xs-12 exibiton-car-outer">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-1">
					<h6>EXHIBITIONS</h6>
					<p>All exhibitions are open from  9:00am - 5:00pm, Monday - Friday, from 3 November until 9 November.</p>
				</div>
				<div class="col-sm-2">
					<a href="#" class="pull-right btn btn-lg btn-primary">View All</a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<div id="exibition-carousel" class="event-carousel">
						<?php 
	          				$args = array( 'posts_per_page' => 30, 
							'post_type' => 'exhibition',
							'meta_query' => array(
								array(
								'key' => 'wpcf-type',
								'value' => 'exhibitions',
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
						<div class="item">
							<div class="car-thumb">
								<a href="<?php the_permalink();?>">
								<div class="post-cat">
									<?php the_title();?>
								</div><!-- /.post-cat -->
								<div class="img-cover" style="background-image: url(<?php echo $image;?>)"></div>
								</a>
							</div> <!-- /.car-thumb -->
						</div> <!-- /.item --> 					 
						<?php endwhile; ?>
					</div> <!-- /.event-carousel -->
				</div> <!-- /.col-sm-12 -->
				<div class="clearfix"></div>
			</div> <!-- .row -->
		</div> <!-- /.exibiton-car-outer -->
	</div> <!-- row -->
</div> <!-- /.container -->
<?php get_footer(); ?>
