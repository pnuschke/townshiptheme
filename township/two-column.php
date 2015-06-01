<?php
/*
* 	Template Name: Two-column 
*	Township theme
* 	This is a page template that included a secondary navigation 
*/

get_header(); 

/*
 * Layout logic
 */
function check_secondary_nav_exists() {
	$post_meta_data = get_post_meta( get_the_ID() ); 								//Get page meta data

	if(array_key_exists('secondary_navigation', $post_meta_data ) ): 				//If the page has secondary navigation assigned
		return $post_meta_data['secondary_navigation'][0];					//Get the navigation menu that was selected for this page
	else:
		return false;
	endif;
}
function show_secondary_navigation($nav_menu_id) {
	if($nav_menu_id):
		wp_nav_menu( array( 														//Show the appropriate menu
			"menu" => $nav_menu_id,													//Theme location not necessary
			"container" => "false", 
			"menu_class" => "nav nav-pills nav-stacked",
			"menu_id" => "secondary-navigation" ) ); 
	endif;
}
?>

<div class="full_width_box extra_padding_top clearfix content_page  tall_content">

	<?php if (have_posts()) : the_post(); ?>

		<div class="col-md-3 col-sm-4 hidden-xs">
			 
	<?php		$nav_menu_id = check_secondary_nav_exists();
				show_secondary_navigation($nav_menu_id);			?>

		</div>

		<div class="col-md-9 col-sm-8">
			<div class="jump-link visible-xs-block"><a href="#more_in_section">Jump to Section Navigation</a></div>
				<h1><?php the_title(); ?></h1>
				<div class="post_image"><?php the_post_thumbnail("full"); ?></div>
		        <p><?php the_content(); ?></p>
		</div>

		<!-- Makes the menu appears underneath the content on smaller screens -->
		<div id="more_in_section" class="visible-xs-block  clearfix col-md-12 secondary-nav-bottom">
			<h3>More in this section</h3>
				
	<?php 		show_secondary_navigation($nav_menu_id); 		?>

		</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>