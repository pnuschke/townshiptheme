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

?>

		<div id="home_top_image" class="full_width_box clearfix">
			<figure id="small_featured_image">
			<?php
				$image = get_field('main_image');
				if( !empty($image) ): ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<figcaption><?php echo $image['caption']; ?></figcaption>

				<?php endif; ?>
			</figure>
			 <?php 

				 if (have_posts()) : while (have_posts()) : the_post(); ?> 
					 	<h1><?php the_title(); ?></h1>
					 	<p><?php the_content();?></p>
					 	<p><a href="<?php the_field('read_more_link') ?>"><?php the_field('read_more_label'); ?></a></p>
				 <?php	
				 endwhile; endif;	 ?>


			<?php //put the parenting center widget here
				//if ( dynamic_sidebar('township_homepage_top_widget') ) : else : endif; 
			?>		
		</div>

		<div class="full_width_box home_content_container clearfix">
			<div class="widget_event col-md-8">
				<h2>Recent News & Events</h2>
				<ul class="media-list">
					 <?php 
						//get all news posts
						$args = array("post_type" => "township_news", "posts_per_page" => 3);
						$news_query = new WP_Query( $args );
						//query_posts('category_name=news&orderby=meta_value_num&order=ASC'); 
						if( $news_query->have_posts() ):
							while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
							<li class="media">
								<a href="<?php the_permalink(); ?>" class="pull-left"><?php the_post_thumbnail("thumbnail"); ?></a>
								<div class="widget_event_details_wrapper">
									<h3 class="widget_event_heading"><a href="<?php the_permalink(); ?>"><?php 	the_title(); ?></a></h3>
									<p class="widget_event_description"><?php if(has_excerpt()): the_excerpt(); endif; ?></p>
									<p class="widget_event_date"><?php the_date("M n, Y g:ia"); ?></p>
								</div>
							</li>
						 <?php	
						 endwhile; endif; 
					 ?>
				</ul>
			</div>
			<div class="widget_actions col-md-4">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 

			<?php the_field('action_list'); ?>	
			<?php //put the parenting center widget here
				//if ( dynamic_sidebar('township_homepage_actions_widget') ) : else : endif; 
			endwhile; endif;
			?>		

			</div>
		</div>
		
		<div class="home_content_container col-md-12">
			<?php 	dynamic_sidebar('township_homepage_bottom_widget');		?>
		</div>
<!--
		<div id="news_widget" class="home_content_container col-md-6">
			<h2>News</h2>
			<ul class="no_bullets">
				<li>News item 1</li>
				<li>News item 2</li>
				<li>News item 3</li>
			</ul>
		</div>
		<div id="events_widget" class="home_content_container col-md-5 col-md-offset-1">
			<h2>Events</h2>
			<ul class="no_bullets">
				<li>News item 1</li>
				<li>News item 2</li>
				<li>News item 3</li>
			</ul>
		</div>	
-->		
