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
				<img src="<?php echo get_template_directory_uri(); ?>/images/home_township_building.gif">
				<figcaption>Caption for the image</figcaption>
			</figure>
			<h1>Welcome to Nether Providence</h1>
			<p>Nether Providence is a close knit community lying just 15 miles southwest of Philadelphia in Delaware County, Pennsylvania. We enjoy outstanding schools, attractive neighborhoods, convenient public transportation, inviting public parks and walking trails, and an array of nearly social, cultural, and athletic activities.</p>
			<p><a href="#">Read more</a></p>
		</div>

		<div class="full_width_box home_content_container clearfix">
			<div class="widget_event">
				<ul class="media-list">
					<li class="col-md-8 media">
						<a href="#" class="pull-left"><img src="#" width="128" height="128"></a>
						<div class="widget_event_details_wrapper">
							<h2 class="widget_event_heading"><a href="#">News text</a></h2>
							<p class="widget_event_description">This will be a description of the great thing that is happening. This will be a description of the great thing that is happening.</p>
							<p class="widget_event_date">Sep 7, 2014 8:03am</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="widget_actions col-md-4">
				<h2>I want to...</h2>
				<ul>
					<li><a href="#">Action 1</a></li>
					<li><a href="#">Action 2</a></li>
				</ul>
			</div>
		</div>
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
