<?php
/*
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 */

get_header(); ?>

<div class="full_width_box extra_padding_top extra_padding_left clearfix tall_content">
	<div class="col-md-12">
		<?php
		if (have_posts()) :
		   while (have_posts()) : the_post(); ?>
				<div class="post_image"><?php the_post_thumbnail("full"); ?></div>
				<h1><?php the_title(); ?></h1>
		        <p><?php the_content(); ?></p>
		    <?php    
		   endwhile;
		endif;
		?>
	</div>
</div>

<?php get_footer(); ?>