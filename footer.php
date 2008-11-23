
			<hr />
			
			<div id="footer">
			<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
				<p>
					<?php bloginfo('name'); ?> is proudly powered by
					<a href="http://wordpress.org/">WordPress</a>
					<div id="footer_rss_links">
						<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/feed.png" alt="RSS Feed"> Entries</a>
						and
						<a href="<?php bloginfo('comments_rss2_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/feed.png" alt="RSS Feed"> Comments</a>.
					</div>
					<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
				</p>
			</div>
		</div>

		<?php wp_footer(); ?>
	</body>
</html>
