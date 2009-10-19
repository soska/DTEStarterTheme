<?php $blog->get('header'); ?>
		<div id="content" >
			<?php $blog->element('page-title') ?>
			<?php
			if (have_posts()){
				while (have_posts()) : the_post(); 	$count++;
					$blog->renderView('entry');					
				endwhile;
			}else{
				jpr('else');
				$blog->renderView('404');	
			}
			?>
				
		</div>
		<div id="sidebar">
			<?php $blog->theme->widgetArea('archive-sidebar') ?>
			<?php $blog->theme->widgetArea('sidebar') ?>
		</div>
		<!-- sidebar -->		
<?php $blog->get('footer'); ?>