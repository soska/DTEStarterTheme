<?php $blog->get('header'); ?>
		<div id="content" >			
			<?php
			if (have_posts()){
				while (have_posts()) : the_post(); 	
				$blog->renderView('entry');
				comments_template('',false);
				endwhile;
			}else{
				$blog->renderView('404');	
			}
			?>
		</div>
		<div id="sidebar">
			<?php $blog->theme->widgetArea('single-sidebar') ?>
			<?php $blog->theme->widgetArea('sidebar') ?>
		</div>
		<!-- sidebar -->		
<?php $blog->get('footer'); ?>