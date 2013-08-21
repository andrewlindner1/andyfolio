<?php get_header(); ?>
	<div id="featured" class="clearfix" style="background-color: #E5411C">
		<ul class="slides">
						<?php 
				
					$args = array(
							'post_type' => 'portfolio'
						);
				
						$the_query = new WP_query( $args );
				?>
					
					<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<li>
				<div class="slider=container">
					<div class="grid_8"><img src="images/stopvisualpollution-homepage-image.png"></div>
					<div id="featured-info" class="grid_4 omega">
						<h5>Featured Project</h5>
						<h3>Jon Hill Photography Website</h3>
						<p> A website designed to display lots of images in a fun and interactive way.</p>
						<a class="btn" style="background-color: #41301f" href="#">View Project &rarr;</a>
					</div>
				</div>
			</li>
			<?php endwhile; endif; ?>
		</ul>
				
			</div>

<?php get_footer(); ?>