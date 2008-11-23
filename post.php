<!-- post.php start -->
<div class="post" id="post-<?php the_ID(); ?>">
	
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

	<div class="entry">
		<?php the_content('Read the rest of this entry &raquo;'); ?>
	</div>

		
	<dl class="postmetadata">
		<?php the_tags('<dt>Tags:</dt><dd>', ', ', '</dd>'); ?>
		<dt>Category:</dt>
		<dd><?php the_category(', ') ?></dd>
		<dt>Comments:</dt>
		<dd><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></dd>
	</dl>
	
	<?php edit_post_link('Edit', '<div id="admin_edit_link">', '</div>'); ?>
	
</div>
<!-- post.php end -->