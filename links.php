<?php
/*
Template Name: Links
*/
?>


<!-- links.php start -->

<?php get_header(); ?>

		<div id="main_wrapper">
			
			<div id="content" class="widecolumn">

				<h2>Links:</h2>
				<ul>
					<?php wp_list_bookmarks(); ?>
				</ul>

			</div>
			
			<div class="clear"></div>
			
		</div>

<?php get_footer(); ?>

<!-- links.php end -->
