<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

function listSocial($option, $social_type) {
	$accounts = explode("\n", $option);
	$account_array = Array();
	foreach ($accounts as $account): 
		//array_push($account_array, explode(" ", $account, 2));
		$account_arr = explode(" ", $account, 2);
		echo '<li><a href="'.$account_arr[0].'"><i class="fa fa-'.$social_type.' fa-fw"></i>&nbsp; '.$account_arr[1].'</a></li>';
	endforeach;
	return $account_array;
}

function show_footer_menu($position) {
	$theme_location = "footer-mega-menu-".$position;
	wp_nav_menu( array( 
		"theme_location" => $theme_location,
		"container" => "false", 
		"menu_class" => "",
		"fallback_cb" => false,
		"menu_id" => "" ) ); 
}
?>


	</div><!-- #main -->

	<footer role="contentinfo" class="container-fluid">
		<div id="mega-menu" class="full_width_box clearfix col-md-12">
			<div class="col-md-4">
				<h4>//FIND</h4>
				
				<?php
				show_footer_menu(1);
				show_footer_menu(2);
				show_footer_menu(3);
				?>

			</div>
			<div class="col-md-4">
				<h4>&nbsp;</h4>

		<?php	show_footer_menu(4);
				show_footer_menu(5);
				show_footer_menu(6);		?>

			</div>
			<div class="col-md-4">
				<h4>//CONNECT WITH US</h4>
				<ul>
				<?php 
				if(get_option("township_settings_facebook")): 
					listSocial(get_option("township_settings_facebook"), "facebook");
				endif;
				
				if(get_option("township_settings_twitter")): 
					listSocial(get_option("township_settings_twitter"), "twitter");
				endif; 
				
				if(get_option("township_settings_address1")): ?>
					<li>
						<i class="fa fa-map-marker pull-left fa-fw social-icon"></i> 
						<?php echo get_option("township_settings_address1"); ?>
						<?php if(get_option("township_settings_address2")):
								echo "<br>".get_option("township_settings_address2");
							  endif; ?>
					</li>
				<?php endif; ?>
				
				<?php if(get_option("township_settings_phone")): ?>
					<li class="clearfix"><i class="fa fa-fw fa-phone"></i> <?php echo get_option("township_settings_phone"); ?></li>
				<?php endif; ?>

				</ul>
				</div>				
		</div>
		<div id="footer-terms-menu" class="full_width_box col-md-12">
			<ul>
				<li>Copyright <?php echo date('Y'); ?></li> 
				<?php wp_nav_menu( array( 
   					"theme_location" => "footer-links-menu",
					"container" => "false", 
					"menu_class" => "",
					"menu_id" => "footer_links",
					"items_wrap" => '%3$s' ) ); 
				?>
		</ul>		
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>