<div <?php post_class() ?>>
	<?php if (is_single()): ?>
		<h1 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h1>
	<?php else: ?>
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>				
	<?php endif ?>	
	<div id="entry-content">
		<?php the_content() ?>
	</div>				
</div>
