<?php
/**
 * Header 
 * Township Theme
*/
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title('|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<?php 
	wp_head(); 
	include "includes/header-functions.php";

/* this is the format for navigation
	<ul id="primary_navigation" class="nav navbar-nav">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" id="menu-item-1" href="#">About<span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu-item-1">
				<li role="presentation"><a href="#" tabindex="-1" role="menuitem">History</a></li>
				<li role="presentation"><a href="#" tabindex="-1" role="menuitem">History</a></li>
				<li role="presentation"><a href="#" tabindex="-1" role="menuitem">History</a></li>
			</ul>
		</li>
	</ul>
*/
?>

<!-- Latest compiled and minified CSS-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.9.1.js"></script>	
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>	

<style type="text/css">
	/* use only for css with php variables */
	body {
		<?php 	show_background_image();    ?>
	}
	.navbar-default {
		<?php 	show_nav_colors();			?>
	}

</style>

<?php if($_SERVER['SERVER_NAME'] != "app.township.dev"): 			?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56069867-2', 'auto');
  ga('send', 'pageview');

</script>

<?php endif; ?>

</head>

<body <?php body_class(); ?>>

<div id="page_container">
	<header>
		<ul id="site_title_div" class="container-fluid">

			<?php show_logo_masthead(); ?>

			<li id="site_title"><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></li>
			<li id="site_tagline" class="hidden-xs hidden-sm"><?php bloginfo("description"); ?></li>
			<li id="search_container" class="hidden-xs"><?php get_search_form( true ); ?>
				<!--<input type="text" placeholder="Search" value="" class="form-control">-->
			</li>
		</ul>
		<nav role="navigation" class="shadow navbar navbar-default">		
			<div class="container-fluid">	

				<?php show_logo_navbar(); ?>

				<div class="navbar-header">
					<!--not sure what this is supposed to do but seems broken-->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-to-collapse">
						<div id="menu-bar-text">MENU</div>
						<div>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</div>
					</button>
				</div>
				<div id="navbar-to-collapse" class="collapse navbar-collapse">

   					<?php show_navbar(); ?> 

				</div>
			</div>
		</nav>
	</header>

	<div id="main_content_container" class="container-fluid">
		<div id="search_container_2" class="visible-xs-block"><?php get_search_form( true ); ?></div>

