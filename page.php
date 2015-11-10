<?php
/**
 * The single post template file
 *
 * @package WordPress
 * @subpackage pdxc_sandbox_2015
 * @since pdxc_sandbox_2015 1.0
 */

get_header();
?>
<div class="row">
  <div class="col-md-3">
    <?php get_sidebar(); ?>
  </div>
  <div class="col-md-9">
                <?php
                    if(have_posts()){
                        while(have_posts()) {
                        	 the_post();
                ?>

                <section class="row">
                	<article <?php post_class(); ?> >
                		<div class="row my-page-header">
	                		<div class="col-md-12 text-left">
                        <?php if( get_the_title() == '' ){ ?>
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h1>Untitled Page</h1></a>
                      <?php  } else { ?>
			                	<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>
                      <?php } ?>
		                	</div>
                		</div>
                		<div class="row">
                			<div class="col-md-12 dropcap site-content">
		                		<?php the_content(); ?>
	                        </div>
                      	</div>
                    </article>
                 </section><!--end post-->
                <?php
						} /*end while*/
				?>

                <?php
                     } //end if
                ?>
                <div class="row">
                   <div class="col-md-12">
                   <?php comments_template();?>
                 </div>
                 </div>
</div>
<?php
    get_footer();
?>
