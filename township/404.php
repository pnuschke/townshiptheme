<?php
/**
 *	404 Error Template 
 *
 */

get_header(); 
?>

<div class="full_width_box extra_padding_left extra_padding_top clearfix tall_content">
	<?php 
	$post_id = url_to_postid("error404"); 
	if($post_id):
		$post_404 = get_post($post_id); 
	?>
		<h1><?php echo $post_404->post_title; ?></h1>
		<p><?php echo $post_404->post_content ?></p>	
	<?php else: ?>
		<h1>Oh no!</h1>
		<p>You seemed to have discovered a rift in the page-time continuum. We'll patch that up as soon as we can.</p>  
	<?php endif; ?>
</div>

<?php
get_footer();
?>