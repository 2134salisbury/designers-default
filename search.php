<!-- search.php start -->

<?php get_header(); ?>

		<div id="main_wrapper">
			
			<div id="content" class="narrowcolumn grid_10">

				<?php if (have_posts()) : ?>
			
					<h2 class="pagetitle">Search Results</h2>
			
					<?php include (TEMPLATEPATH . "/navigation.php"); ?>
			
			
					<?php while (have_posts()) : the_post(); ?>
			
						<?php include (TEMPLATEPATH . "/post.php"); ?>
			
					<?php endwhile; ?>
			
					<?php include (TEMPLATEPATH . "/navigation.php"); ?>
			
				<?php else : ?>
			
					<h2 class="center">No posts found. Try a different search?</h2>
					
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			
				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>
			
			<div class="clear"></div>
			
		</div>

<?php get_footer(); ?>

<!-- search.php end -->