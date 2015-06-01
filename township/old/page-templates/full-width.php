<?php
/**
 * Template Name: Full Width Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

if (is_front_page()):
	get_template_part("content", "home");
else: ?>

<div class="full_width_box">
	<?php
	if (have_posts()) :
	   while (have_posts()) :
	      the_post();
	         the_content();
	   endwhile;
	endif;
	?>

</div>
<?php endif; ?>

<?php
get_footer();
?>