<?php $blog->get('header'); ?>
		<div id="content" >
			<?php $blog->theme->widgetArea('static-page-top') ?>		
			<?php
			if (have_posts()){
				while (have_posts()) : the_post(); 	
				$blog->renderView('page');
				comments_template('',false);
				endwhile;
			}else{
				$blog->renderView('404');	
			}
			?>
			<?php $blog->theme->widgetArea('static-page-bottom') ?>		
		</div>
		<div id="sidebar">
			<?php $blog->theme->widgetArea('static-sidebar-top') ?>
			<?php $blog->theme->widgetArea('sidebar') ?>
			<?php $blog->theme->widgetArea('static-sidebar-bottom') ?>			
		</div>
		<!-- sidebar -->		
<?php $blog->get('footer'); ?>