<?php
//header includes

//show the navbar colors
function show_nav_colors() {
	if(get_option("township_settings_navbar_bgcolor")):
		echo "background: ".get_option("township_settings_navbar_bgcolor").";";
	endif;
}

//If no menu is assigned yet 
function handle_no_nav_cb($args) {
	echo "<span style='color:white;'>No menu yet. Assign the menu to the Main Navigation position.</span>";
}

//If the logo should be above the navbar
function show_logo_masthead() {
	if(get_option("township_settings_logo_placement") == "masthead"):
		echo '<li id="logo_container_masthead">'.
				'<img id="header_image" alt="Township Logo" src="'.get_template_directory_uri().'/images/logo_placeholder.png">'.
				'</li>';		
	endif;
}

//if logo should be IN the navbar
function show_logo_navbar() {
	if(get_option("township_settings_logo_placement") == "navbar"):
		echo '<div id="logo_container">'.
				'<a href="'.esc_url( home_url( '/' ) ).'" rel="home">';
		if (  get_option("township_settings_logo") ):
			echo '<img src="'.get_option("township_settings_logo").'" alt="Township Logo">';
		else :	
			echo '<img id="header_image" alt="Township Logo" src="'.get_template_directory_uri().'/images/logo_placeholder.png">';
		endif;

		echo '</a></div>';
	endif;
}

//Show the main navigation
function show_navbar() {
	wp_nav_menu( array( 
		"theme_location" => "main-navigation-menu",
		"container" => "false", 
		"menu_class" => "nav navbar-nav",
		"menu_id" => "primary_navigation",
		"fallback_cb" => "handle_no_nav_cb",
		'walker' => new wp_bootstrap_navwalker() ) ); 
}

//Show the background image and, if required, make it tile
function show_background_image() {
	if( get_option('township_settings_backgroundimage') ) :
		echo "background-image:url('".get_option('township_settings_backgroundimage')."');";

		if( get_option('township_settings_backgroundimage_type') == 'tile'):
			echo "background-repeat: repeat;";
			echo "background-size: auto;";
		endif;

	endif;
}
?>