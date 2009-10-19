<div <?php post_class() ?>>
	<?php if (is_single()): ?>
		<h1 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h1>
	<?php else: ?>
		<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h2>				
	<?php endif ?>
	<?php $blog->element('post-header') ?>
	
	<div class="entry-content">
		<?php if (is_single()): ?>
			<?php the_content() ?>			
		<?php else: ?>
			<?php echo $blog->maybeTheExcerpt($blog->getOption('general','more_link_text')) ?>			
		<?php endif ?>
	</div>			

	<?php $blog->element('post-footer') ?>		
	
</div>
