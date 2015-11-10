<?php
/**
 * The Landing Page template file
 *
 * @package WordPress
 * @subpackage pdxc_sandbox_2015
 * @since pdxc_sandbox_2015 1.0
 *
 * Template Name: Front Page
 */

get_header();
?>

<section class="row">
	<?php
		//display the most recent sticky post as a featured post, or the most recent post if no sticky posts available
		$args = array(
			'posts_per_page' => 1,
			'post__in' => get_option( 'sticky_posts' ),
			'ignore_sticky_posts' => 1
		);
		$featuredPost = new WP_Query($args);
		//$featuredPost->query( 'category_name=featured' );
		if ( $featuredPost->have_posts() ){
			while ( $featuredPost->have_posts() ) {
				 $featuredPost->the_post();
	?>
	<article <?php post_class( 'col-md-12'); ?> >
		<div class="featured-header">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a>
			</div>
		<?php the_excerpt(); ?>
	</article>
		<?php
				} //end while
				wp_reset_postdata();
			} //end if
		?>
</section>
<section class="row">

</section>
<section class="row lead-posts">
	<?php
		//ignore sticky posts and just display the 6 most recent posts
		$myPosts = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ), 'showposts' => 6 ) );
		if ( $myPosts->have_posts() ){
			while ( $myPosts->have_posts() ) {
				 $myPosts->the_post();
	?>
	<article <?php post_class( 'col-md-4 front-page-grid'); ?> >
		<div class="featured-header">
        	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a>
    	</div>
		<?php the_excerpt(); ?>
	</article>
		<?php
				} //end while
				wp_reset_postdata();
			} //end if
		?>

</section>

<?php

get_footer();

?>
