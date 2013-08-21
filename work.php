<?php 

/*
	Template Name: Portfolio Page
*/
get_header(); ?>

<?php 

	$args = array(
			'post_type' => 'portfolio'
		);

		$the_query = new WP_query( $args );
?>
	
	<?php if( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
	
		<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
		<img src="<?php the_field( 'homepage_slider_image' ); ?>">
		<?php the_field( 'description' ); ?>
		<hr>

	<?php endwhile; else: ?>

		<p>There Are No Posts to Display!</p>
	
	<?php endif; ?>

<?php get_footer(); ?>