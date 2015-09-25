<?php
/**
 * The template for displaying search results pages.
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1><?php printf( __( 'Search Results for: %s'), get_search_query() ); ?></h1>
				<?php
				// Start the loop.

	    			global $query_string;

					$query_args = explode("&", $query_string);
					$search_query = array();

					foreach($query_args as $key => $string) {
						$query_split = explode("=", $string);
						$search_query[$query_split[0]] = urldecode($query_split[1]);
					} // foreach

					$search = new WP_Query($search_query);

				?>
				<?php
					if ( have_posts() ) :
						while ( have_posts() ) : the_post();
							// Your loop code
					?>
					<div class="row">
						<div class="col-lg-12">
						
							<h3><?php search_title_highlight(); ?></h3>
							<p><?php search_excerpt_highlight();?></p>
							<!-- <p><a href="<?php the_permalink();?>" class="read-more-btn">Read More</a></p>	 -->
						</div>
					</div>
					<?php 
						endwhile;
					else :?>
						<div class="row">
							<div class="col-lg-12">
								<h3><?php echo wpautop( 'Sorry, no posts were found' );?></h3>
							</div>
						</div>
					<?php 
					endif;
					?>
			</div>
		</div>
	</div> <!-- /.container -->

<?php get_footer(); ?>
