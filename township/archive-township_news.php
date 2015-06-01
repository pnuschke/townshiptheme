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
?>

<div class="full_width_box extra_padding_top extra_padding_left clearfix tall_content">
	<div class="col-md-12">
		<h1>News & Events</h1>
			<ul class="media-list">
				 <?php 
					if (have_posts()) :
					   while (have_posts()) : the_post(); ?>
						<li class="media">
							<a href="<?php the_permalink(); ?>" class="pull-left"><?php the_post_thumbnail("thumbnail"); ?></a>
							<div>
								<h2><a href="<?php the_permalink(); ?>"><?php 	the_title(); ?></a></h2>
								<p class="widget_event_description"><?php if(has_excerpt()): the_excerpt(); endif; ?></p>
								<p class="widget_event_date"><?php the_date("M n, Y g:ia"); ?></p>
							</div>
						</li>
					 <?php	
					 endwhile; endif; ?>
			</ul>
	</div>
</div>

<?php get_footer(); ?>