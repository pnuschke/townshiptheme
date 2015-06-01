<?php 
add_action( 'admin_bar_menu', 'add_to_admin_bar' );

function add_to_admin_bar( $wp_admin_bar ){
	// do something with $wp_admin_bar;

	//Add Pages
	$page_admin_url = admin_url().'edit.php?post_type=page';
	$args = array(
		'id'    => 'township_pages',
		'title' => 'Pages',
		'href'  => $page_admin_url,
		'parent' => 'appearance'
	);
	$wp_admin_bar->add_menu( $args );	

	$page_admin_url = admin_url().'edit.php?post_type=township_news';
	$args = array(
		'id'    => 'township_news',
		'title' => 'News',
		'href'  => $page_admin_url,
		'parent' => 'appearance'
	);
	$wp_admin_bar->add_menu( $args );	

}

function remove_from_admin_bar() {
	global $wp_admin_bar;
	//Remove Themes & Customize
	$wp_admin_bar->remove_node( "themes" ); 
	$wp_admin_bar->remove_node( "customize" ); 
	$wp_admin_bar->remove_node( "wp-logo" ); 
	$wp_admin_bar->remove_node( "comments" ); 
}

add_action( 'wp_before_admin_bar_render', 'remove_from_admin_bar' );

?>