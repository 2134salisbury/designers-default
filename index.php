<!-- index.php start -->

<?php get_header(); ?>

		<div id="main_wrapper">
			
			<div id="content" class="narrowcolumn grid_10">

				<?php if (have_posts()) : ?>
			
					<?php while (have_posts()) : the_post(); ?>
			
						<?php include (TEMPLATEPATH . "/post.php"); ?>
			
					<?php endwhile; ?>
			
					<?php include (TEMPLATEPATH . "/navigation.php"); ?>
			
				<?php else : ?>
			
					<h2 class="center">Not Found</h2>
					
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					
					<?php include (TEMPLATEPATH . "/searchform.php"); ?>
			
				<?php endif; ?>

			</div>

			<?php get_sidebar(); ?>
			
			<div class="clear"></div>
			
		</div>

<?php get_footer(); ?>

<!-- index.php end -->
