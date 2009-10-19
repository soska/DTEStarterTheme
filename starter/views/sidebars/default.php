<?php if (current_user_can('update_themes') && $blog->getOption('general','show_sidebar_placeholders')): ?>
	<?php echo $widget['before'] ?>
	<li class="widget-container empty-widget">
		<h3><?php echo $widget['name'] ?></h3>		
		<!-- <h4>Hello! I'm a widget place-holder</h4> -->
		<p>
			<?php echo $html->link(__('Drop widgets here',$_e),admin_url("widgets.php?sidebar={$widget['id']}")) ?>
			or 
			<?php echo $html->link(__('turn this placeholders&nbsp;off',$_e),admin_url('themes.php?page=general_options')) ?>
			
		</p>
	</li>
	<?php echo $widget['after'] ?>	
<?php else: ?>	
	
<?php endif ?>