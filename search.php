/**
 * The Search Form template file
 *
 * @package WordPress
 * @subpackage pdxc_sandbox_2015
 * @since pdxc_sandbox_2015 1.0
 *
 */

<form class="navbar-form navbar-right" role="search">
  	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'pdxchambers-sandbox-2015'  ) ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'pdxchambers-sandbox-2015' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'pdxchambers-sandbox-2015'  ) ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'pdxchambers-sandbox-2015'  ) ?>" />
</form>
