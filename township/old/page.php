<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); 

//if it's the front page then do one thing
if (is_front_page()):
	get_template_part("content", "home");
elseif (is_post_type_archive('township_news')):
	get_template_part("content", "news");
else: ?>

<div class="full_width_box extra_padding_top extra_padding_left clearfix tall_content">
	<div class="col-md-12">
		<?php
		if (have_posts()) :
		   while (have_posts()) :
		   	  the_title("<h1>", "</h1>", true);
		      the_post();
		         the_content();
		   endwhile;
		endif;
		?>
	</div>
</div>
<?php endif; ?>

<?php
get_footer();
?>