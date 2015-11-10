<?php
function pdxc_custom_color_customization( $wp_customize ){

  // require (get_template_directory() . './inc/pdxchambers-sandbox-2015-colors.php' );
  get_template_part('inc/pdxchambers-sandbox-2015-colors');
  global $defaultColors;

  foreach ( $defaultColors as $defaultColor) {

      $wp_customize -> add_setting(
        $defaultColor['slug'],
        array(
          'default' => $defaultColor['default'],
          'transport' => 'postMessage',
          'sanitize_callback' => 'sanitize_hex_color'
        )
      );

      $wp_customize->add_control( new WP_Customize_Color_Control(
        $wp_customize,
        $defaultColor['slug'],
        array(
          'label' => $defaultColor['label'],
          'section' => 'colors',
        )
      ));
  }
}

add_action ( 'customize_register', 'pdxc_custom_color_customization' );

function header_tag_css(){
  ?>
  <style type="text/css">
    h1, h2, h3 {color: <?php echo get_theme_mod( 'header-tags' ); ?>; }
    a {color: <?php echo get_theme_mod( 'links' ); ?>; }
    h1.brand {color: <?php echo get_theme_mod( 'site-title' ); ?>; }
    body {color: <?php echo get_theme_mod( 'body-text' ); ?>; }
    .sticky {
      background-color: <?php echo get_theme_mod( 'sticky-background' ); ?>;
      border: thin solid <?php echo get_theme_mod( 'border-color' ); ?>;
    }

    .even, .children .odd, .bypostauthor{
      background-color: <?php echo get_theme_mod( 'comment-background' ); ?>;
    }

    .navbar-pdxc {
      background-color: <?php echo get_theme_mod( 'navbar-background' ); ?>;
      border-color: <?php echo get_theme_mod( 'navbar-border' ); ?>;
    }

    .navbar-nav>li>a, .navbar-nav>li>a:focus, .navbar-nav>li>a:hover { color: <?php echo get_theme_mod( 'nav-bar-links' ); ?>; }

    .navbar-nav>li.active>a, .navbar-nav>li.active>a:focus, .navbar-nav>li.active>a:hover {
      color: <?php echo get_theme_mod( 'nav-bar-active-link' ); ?>;
      background-color: <?php echo get_theme_mod( 'nav-bar-active-link-background' ); ?>;
    }

    .dropdown-menu {
      background-color: <?php echo get_theme_mod( 'nav-sub-menu' ); ?>;
      border: thin solid <?php echo get_theme_mod( 'border-color' ); ?>;
    }

    #sidebar { background-color: <?php echo get_theme_mod( 'sidebar-background' ); ?>; }

  </style>
  <?php
}

add_action( 'wp_head', 'header_tag_css' );
