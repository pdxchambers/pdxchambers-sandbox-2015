<?php
/**
 * The header template file
 *
 * @package WordPress
 * @subpackage pdxc_sandbox_2015
 * @since pdxc_sandbox_2015 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( ' | ', TRUE, 'right' ); ?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php if (is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	<body id="bodyTag" <?php body_class(); ?>>
		<div class="container">
			<nav class="navbar navbar-pdxc" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php wp_nav_menu(
					 	array(
							'menu' => 'header-menu',
							'depth' => 2,
					 		'theme_location' => 'header-menu',
							'container' => false,
							'menu_class' => 'nav navbar-nav',
							'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
							'walker' => new wp_bootstrap_navwalker()
				 		)
					);
				 	?>
				</div>
				</div>
				</nav>
			<header class="row page-header">
				<section class="row main-feature">
					<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
				</section>
				<section class="row">
					<div class="col-md-8">
						<a href="<?php echo esc_url( home_url() ); ?>"><h1 class="brand"><?php bloginfo( 'name' ); ?></h1></a>
						<p><?php bloginfo( 'description' ); ?></p>
					</div>
					<div class="col-md-4 searchform">
						<?php get_search_form(); ?>
					</div>
				</section>
			</header>
