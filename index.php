<?php
/**
 * The default template file
 *
 * @package WordPress
 * @subpackage pdxc_sandbox_2015
 * @since pdxc_sandbox_2015 1.0
 *
 */

get_header();
?>
<div class="row">
  <div class="col-md-3">
<?php get_sidebar(); ?>
  </div>
  <div class="col-md-9" id="post-content">
                <?php
                    if(have_posts()){
                        while(have_posts()) {
                        	 the_post();
                ?>

                <section class="row blog-post">
                	<article <?php post_class(); ?> >
                		<div class="row post-header">
	                		<div class="col-md-8">
                        <?php
				        			      if (has_post_thumbnail()){
				                    	the_post_thumbnail( 'thumbnail' );
				               		 }
				               	?>
                        <?php if( get_the_title() == '' ){ ?>
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h1>Untitled Post</h1></a>
                      <?php  } else { ?>
			                	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>
                      <?php } ?>
			                </div>
			                <div class="col-md-4 text-center">
			                	<p><?php the_tags( 'Tagged: ', ', ' ); ?></p>
		                	</div>
                		</div>
                		<div class="row">
                			<div class="col-md-12">
		                			<p class="byline">Contributed by <?php the_author(); ?> on <?php the_time( 'F jS Y' ); ?></p>
			                  </div>
                      </div>
                        <div class="row">
		                		  <div class="col-md-12 post-content">
		                      	<?php the_excerpt(); ?>
		                      </div>
	                      </div>
                    </article>
                 </section><!--end post-->
                <?php
						} /*end while*/
				?>
				 <div class="row pagination">
				<?php
						posts_nav_link();
				?>
				</div>
				<?php
                     } else {
                  ?>
                        <p><?php _e( 'Sorry, nothing to see here yet. Please check back later.', 'pdxchambers-sandbox-2015' ); ?></p>
                <?php
                     } //end if
                ?>
</div>

<?php
    get_footer();
?>
