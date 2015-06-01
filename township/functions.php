<?php
/**
 * Township 
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Thirteen supports.
 *
 *
 * @return void
 */

//This allows 
require_once('admin/wp_bootstrap_navwalker.php');
require_once('admin/custom-fields-prepopulate.php');
require_once('admin/admin-tweaks.php');
//require_once('custom-fields.php');
/* Create settings for things that are set globally across website 
*/
//init
function register_township_settings() {
	//add section
	add_settings_section(
		"township_settings_section",
		"Township Settings",
		"township_settings_section_cb",
		"general"
		);
	//add fields
	add_settings_field(
		"township_settings_address1",
		"Address Line 1",
		"township_address_cb1",
		"general",
		"township_settings_section"
	);

	add_settings_field(
		"township_settings_address2",
		"Address Line 2",
		"township_address_cb2",
		"general",
		"township_settings_section"
	);


	add_settings_field(
		"township_settings_phone",
		"Phone number",
		"township_phone_cb",
		"general",
		"township_settings_section"
	);

	add_settings_field(
		"township_settings_facebook",
		"Facebook Account(s)",
		"township_facebook_cb",
		"general",
		"township_settings_section"
	);

	add_settings_field(
		"township_settings_twitter",
		"Twitter Account(s)",
		"township_twitter_cb",
		"general",
		"township_settings_section"
	);

	add_settings_field(
		"township_settings_backgroundimage",
		"Background Image",
		"township_bgimage_cb",
		"general",
		"township_settings_section"
	);

	add_settings_field(
		"township_settings_backgroundimage_type",
		"Background Image Type",
		"township_bgimage_type_cb",
		"general",
		"township_settings_section"
	);

	add_settings_field(
		"township_settings_logo",
		"Logo for navigation",
		"township_logo_cb",
		"general",
		"township_settings_section"
	);

	add_settings_field(
		"township_settings_logo_placement",
		"Placement of the logo",
		"township_logo_placement_cb",
		"general",
		"township_settings_section"
	);

	add_settings_field(
		"township_settings_navbar_bgcolor",
		"Navigation bar background color",
		"township_navbar_bgcolor_cb",
		"general",
		"township_settings_section"
	);

	register_setting("general", "township_settings_address1");
	register_setting("general", "township_settings_address2");
	register_setting("general", "township_settings_phone");
	register_setting("general", "township_settings_facebook");
	register_setting("general", "township_settings_twitter");
	register_setting("general", "township_settings_backgroundimage");
	register_setting("general", "township_settings_backgroundimage_type");
	register_setting("general", "township_settings_logo");
	register_setting("general", "township_settings_logo_placement");
	register_setting("general", "township_settings_navbar_bgcolor");
}

add_action("admin_init", "register_township_settings");


function township_logo_placement_cb() {
	if(get_option("township_settings_logo_placement") == "masthead"):
		$masthead_checked = "checked";
		$navbar_checked = "";
	else:
		$masthead_checked = "";
		$navbar_checked = "checked";
	endif;
	echo "<label for='township_settings_logos_masthead'><input id='township_settings_logos_masthead' type='radio' name='township_settings_logo_placement' value='masthead' ".$masthead_checked.">Masthead above navigation</label>";
	echo "<br><label for='township_settings_logos_navbar'><input id='township_settings_logos_navbar' type='radio' name='township_settings_logo_placement' value='navbar' ".$navbar_checked.">Inline with navigation</label>";
}

function township_bgimage_type_cb() {
	if(get_option("township_settings_backgroundimage_type") == "tile"):
		$tile_checked = "checked";
		$stretch_checked = "";
	else:
		$tile_checked = "";
		$stretch_checked = "checked";
	endif;
	echo "<label for='township_settings_background_stretch'><input id='township_settings_background_stretch' type='radio' name='township_settings_backgroundimage_type' value='stretch' ".$stretch_checked.">Fit image to browser</label>";
	echo "<br><label for='township_settings_background_tile'><input id='township_settings_background_tile' type='radio' name='township_settings_backgroundimage_type' value='tile' ".$tile_checked.">Tile image</label>";
}


function township_logo_cb() {
	echo "<input type='text' name='township_settings_logo' style='width:500px;' value=' ".get_option("township_settings_logo")."'>".
			"<p>Upload your image to Media and copy the URL here</p>";
}

function township_bgimage_cb() {
	echo "<input type='text' name='township_settings_backgroundimage' style='width:500px;' value=' ".get_option("township_settings_backgroundimage")."'>".
			"<p>Upload your image to Media and copy the URL here</p>";
}

function township_navbar_bgcolor_cb() {
	echo "<input type='text' name='township_settings_navbar_bgcolor' style='width:100px;' value=' ".get_option("township_settings_navbar_bgcolor")."'>".
			"<p>Add your background color here (e.g., #EF8731)</p>";	
}

//section callback
function township_settings_section_cb() {
	echo "<p>Change website-wide settings</p>";
}
//field callback
function township_address_cb1() {
	echo "<textarea name='township_settings_address1' style='width:300px;'>".get_option("township_settings_address1")."</textarea>";
}

//field callback
function township_address_cb2() {
	echo "<textarea name='township_settings_address2' style='width:300px;'>".get_option("township_settings_address2")."</textarea>";
}

//field callback
function township_phone_cb() {
	echo "<input name='township_settings_phone' style='width:300px;' type='phone' value=' ".get_option("township_settings_phone")."'>";
}

//field callback
function township_facebook_cb() {
	echo "<textarea name='township_settings_facebook' style='width:500px;'>".get_option("township_settings_facebook")."</textarea><br>e.g., http://facebook.com/myname My Name (new line for each account)";
}

//field callback
function township_twitter_cb() {
	echo "<textarea name='township_settings_twitter' style='width:500px;'>".get_option("township_settings_twitter")."</textarea><br>e.g., http://twitter.com/handle @handle (new line for each account)";
}




/*-----------------------
* Creates the menus for use in the theme 
*
*----------------------*/
function register_my_menus() {
  register_nav_menus(
    array(
      'main-navigation-menu' => __( 'Main Navigation Menu' ),
      'footer-links-menu' => __( 'Footer Legal Menu' ),
      'footer-mega-menu-1' => __( 'Footer Mega Menu Left 1' ),
      'footer-mega-menu-2' => __( 'Footer Mega Menu Left 2' ),
      'footer-mega-menu-3' => __( 'Footer Mega Menu Left 3' ),
      'footer-mega-menu-4' => __( 'Footer Mega Menu Right 1' ),
      'footer-mega-menu-5' => __( 'Footer Mega Menu Right 2' ),   
      'footer-mega-menu-6' => __( 'Footer Mega Menu Right 3' )
      )
  );
}
add_action( 'init', 'register_my_menus' );


/**
 * Register our sidebars and widgetized areas.
 *
 */

function township_widgets_init() {

	register_sidebar( array(
		'name' => 'Homepage Bottom Widget',
		'id' => 'township_homepage_bottom_widget',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );

	register_sidebar( array(
		'name' => 'Homepage News Widget',
		'id' => 'township_homepage_news_widget',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>'
	) );

}
add_action( 'widgets_init', 'township_widgets_init' );


function create_post_type() {
	register_post_type( 'township_news',
		array(
			'labels' => array(
				'name' => __( 'News' ),
				'singular_name' => __( 'News item' )
			),
		'public' => true,
		'has_archive' => true,
		'show_in_admin_bar' => true,
		'supports' => array('title', 'editor', 'excerpt', 'revisions', 'thumbnail')
		)
	);

}
add_action( 'init', 'create_post_type' );



if ( ! function_exists( 'township_paging_nav' ) ) :
/**
 * Displays navigation to next/previous set of posts when applicable.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function township_paging_nav() {
	global $wp_query;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'twentythirteen' ); ?></h1>
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'township' ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'township' ) ); ?></div>
			<?php endif; ?>

		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;


/**
 * Provides a standard format for the page title depending on the view. This is
 * filtered so that plugins can provide alternative title formats.
 *
 * @param       string    $title    Default title text for current view.
 * @param       string    $sep      Optional separator.
 * @return      string              The filtered title.
 */
function township_wp_title( $title, $sep ) {
	global $paged, $page;
 
	if ( is_feed() ) {
		return $title;
	} // end if
 
	// Add the site name.
	$title .= get_bloginfo( 'name' );
 
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	} // end if
 
	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = sprintf( __( 'Page %s', 'township' ), max( $paged, $page ) ) . " $sep $title";
	} // end if
 
	return $title;
 
} // end mayer_wp_title
add_filter( 'wp_title', 'township_wp_title', 10, 2 );


//adds support for table styles (experimental)
add_filter('tiny_mce_before_init', 'oi_tinymce');
function oi_tinymce($settings) {
	$new_styles = array(
		array(
			'title' => 'None',
			'value'	=> ''
		),
		array(
			'title'	=> 'Table',
			'value'	=> 'table',
		),
	);
	$settings['table_class_list'] = json_encode( $new_styles );
	return $settings;
}

/* need to set up these custom post types with the different fields that they need */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
//add_theme_support( 'custom-header' );

//don't add p tags to the_content
//remove_filter("the_content", "wpautop");
remove_filter("the_excerpt", "wpautop");