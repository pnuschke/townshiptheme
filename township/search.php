<?php
/**
 * The template for displaying search results
 *
 */

get_header(); 

$no_results_str = "We couldn't find that term on the website";

//if it's the front page then do one thing
?>
<div class="full_width_box extra_padding_top extra_padding_left clearfix tall_content">
	<div class="col-md-12">
		<h1><?php printf( __( 'Search Results for: %s', 'township' ), get_search_query() ); ?></h1>

		<?php if ( have_posts() ) : ?>

		<?php
			$i = 0;
			// Start the Loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				
				if(get_post_type( get_the_ID() ) == "page"):
					$i++;
				?>
				<h2 style="margin-top:1em;"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><?php the_excerpt(); ?></p>
				<?php
				endif;
				//get_template_part( 'content', get_post_format() );

			endwhile;
			if($i == 0):
				echo $no_results_str;
			endif;
			// Previous/next post navigation.
			township_paging_nav();

		else :
			// If no content, include the "No posts found" template.
			//get_template_part( 'content', 'none' );
			echo $no_results_str;
		endif;
	?>

	</div>
</div>

<?php
get_footer();
?>