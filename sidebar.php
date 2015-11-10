<?php
/**
 * The sidebar template file
 *
 * @package WordPress
 * @subpackage pdxc_sandbox_2015
 * @since pdxc_sandbox_2015 1.0
 */

?>

<div id="sidebar">
    <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'primary-sidebar' ); ?>
	</div><!-- #primary-sidebar -->
	<?php endif; ?>
</div>
