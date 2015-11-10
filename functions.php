<?php
/**
 * The functions template file
 *
 * @package WordPress
 * @subpackage pdxc_sandbox_2015
 * @since pdxc_sandbox_2015 1.0
 */



 /**
  * Properly enqueue CSS and JavaScript
  */

function pdxchambers_sandbox_2015_enqueue_scripts_and_styles () {
	global $wp_scripts;
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null, 'all');
	/*The Booststrap theme is optional, just comment out the next line if you don't want it.*/
	wp_enqueue_style( 'bootstrap_theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', false, null, 'all');
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/pdxc_main_styles.css', false, null, 'all');
  wp_enqueue_style( 'generated_css', get_template_directory_uri() . '/css/pdxc_wp_generated_styles.css', false, null, 'all');
	wp_enqueue_style( 'default_css', get_template_directory_uri() . '/style.css', false, null, 'all');
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/scripts/modernizr.js', array('jquery'), null, true );
	wp_enqueue_script( 'bootstrap_min', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'), null, true );
}

add_action ( 'wp_enqueue_scripts', 'pdxchambers_sandbox_2015_enqueue_scripts_and_styles' );

/**
 *  Enable Template Features not enabled by default
 *  such as "Featured Images".
 */

 register_default_headers( array(
	'Desk' => array (
		'url' => get_template_directory_uri() . 'img/headbg/desk.jpg',
		'thumbnail_url' => '',
		'description' => __('Desk', 'pdxchambers-sandbox-2015')
	)
));

 function pdxchambers_sandbox_2015_enable_theme_features() {
	$header_args = array(
		'width' => 1170,
		'height' => 200,
		'default-image' => get_template_directory_uri() . '/img/headbg/desk.jpg',
		'uploads' => true,
		'header-text' => false
	);

	$background_args = array(
		'default-color' => '#fff',
		'default-image' => '',

	);

	 add_theme_support( 'post-thumbnails' );
	 add_theme_support( 'html5', array( 'search_form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
	 add_theme_support( 'menus' );
	 add_theme_support( 'automatic-feed-links' );
	 add_theme_support( 'title-tag' );
	 add_theme_support( 'custom-header', $header_args );
	 add_theme_support( 'custom-background', $background_args );

	 add_editor_style();
}

add_action( 'after_setup_theme', 'pdxchambers_sandbox_2015_enable_theme_features');

/*
	Hook in the theme customizer script for live preview.
*/
function pdxchambers_sandbox_2015_customizer_live_preview() {
	wp_enqueue_script( 'pdxc_post_message', get_template_directory_uri() . '/scripts/pdxchambers-sandbox-2015-post-message.js', array('customize-preview', 'jquery'), null, true );
}

add_action( 'customize_preview_init', 'pdxchambers_sandbox_2015_customizer_live_preview');

/*
	There are a lot of theme customization options in the Theme Customizer.
	Broke them out into a spearate file to keep functions.php from being toolbar
	unweildy.
*/

	require( get_template_directory() . '/inc/pdxc-theme-options.php' );

/**
 * Register navigation menus
 */
 function pdxchambers_sandbox_2015_register_theme_menus() {
    register_nav_menus(
		array(
			'header-menu'	=> __( 'Header Menu', 'pdxchambers-sandbox-2015'  )
		)
	);
 }

 add_action( 'init', 'pdxchambers_sandbox_2015_register_theme_menus' );

 /**
	* Adding WP_Bootstrap_Walker support to theme
	*/

 require_once( get_template_directory() . '/inc/wp_bootstrap_navwalker.php' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function pdxchambers_sandbox_2015_create_widget_area() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'primary-sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title text-center">',
		'after_title' => '</h3>'
	) );
}
add_action( 'widgets_init', 'pdxchambers_sandbox_2015_create_widget_area');

/**
*	Add theme customization panels
*/

function pdxchambers_sandbox_2015_register_customizer( $wp_customize ){
	$wp_customize->add_setting('header_image' , array(
		'default' => get_template_directory_uri() . '/img/headbg/desk.jpg',
		'transport' => 'refresh',
		'thumnail_url' => '',
		'sanitize_callback' => 'sanitize_hex_color'
	) );
}
add_action( 'customize_register', 'pdxchambers_sandbox_2015_register_customizer' );

/**
 *  Custom functions
 */

 function pdxchambers_sandbox_2015_new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('{More...}', 'pdxchambers-sandbox-2015') . '</a>';
}
add_filter( 'excerpt_more', 'pdxchambers_sandbox_2015_new_excerpt_more' );

function pdxchambers_sandbox_2015_featured_caption() {
	global $post;

	$thumbnail_id = get_post_thumbnail_id($post->ID);
	$thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

	if ($thumbnail_image && isset($thumbnail_image[0])) {
		echo '<p>'.$thumbnail_image[0]->post_excerpt.'</p>';
	}
}

/*Add Bootstrap Search form to WP Menu*/
add_filter('wp_nav_menu_items','pdxchambers_sandbox_2015_add_search_box_to_menu', 10, 2);
function pdxchambers_sandbox_2015_add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'header_menu' )
        return $items."<li class='menu-header-search'><form action='/' id='searchform' method='get'class='navbar=form navbar-right'><input type='text' name='s' id='s' placeholder='Search'></form></li>";

    return $items;
}

if ( ! isset( $content_width ) ) $content_width = 1024;

?>

<?php
if ( ! function_exists( 'shape_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * Code courtesy ThemeShaper: themeshaper.com/2012/11/04/the-wordpress-theme-comments-template/
 */
function shape_comment( $comment, $args, $depth ) {
    $GLOBALS['comment'] = $comment;
    switch ( $comment->comment_type ) :
        case 'pingback' :
        case 'trackback' :
    ?>
    <li class="post pingback">
        <p><?php _e( 'Pingback:', 'pdxchambers-sandbox-2015' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'pdxchambers-sandbox-2015' ), ' ' ); ?></p>
    <?php
            break;
        default :
    ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
        <article id="comment-<?php comment_ID(); ?>" class="comment">
            <div class="comment-header">
                <div class="comment-author vcard">
                    <?php echo get_avatar( $comment, 40 ); ?>
                    <?php printf( __( '%s <span class="says">says:</span>', 'pdxchambers-sandbox-2015' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
                </div><!-- .comment-author .vcard -->
                <?php if ( $comment->comment_approved == '0' ) : ?>
                    <em><?php _e( 'Your comment is awaiting moderation.', 'pdxchambers-sandbox-2015' ); ?></em>
                    <br />
                <?php endif; ?>

                <div class="comment-meta commentmetadata">
                    <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>">
                    <?php
                        /* translators: 1: date, 2: time */
                        printf( __( '%1$s at %2$s', 'pdxchambers-sandbox-2015' ), get_comment_date(), get_comment_time() ); ?>
                    </time></a>
                    <?php edit_comment_link( __( '(Edit)', 'pdxchambers-sandbox-2015' ), ' ' );
                    ?>
                </div><!-- .comment-meta .commentmetadata -->
            </div>

            <div class="comment-content"><?php comment_text(); ?></div>

            <div class="reply">
                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
            </div><!-- .reply -->
        </article><!-- #comment-## -->

    <?php
            break;
    endswitch;
}
endif; // ends check for shape_comment()
?>
