<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
	<?php
		$blog->element('title');
		$blog->element('meta');	
		wp_head();
	?>	
</head>

<body <?php echo $blog->getBodyClass('duperrific'); ?>>
	
	<div id="container">
		<div id="header">
			<div id="branding">
			<?php
				// let's generate a SEO friendly header
				// 1. generate a link to the homepage, and enclose it in a DIV
				$link = $html->link(get_bloginfo('name'), get_option('home')."/",array('attributes'=>"rel='home'"));
				echo $html->entag($link,"div#blog-title");
				
				// 2. Now, the description will behave differently, depending whether we are on the homepage or not
				if (is_home()) {                                                                                   
					// of this is the home, then the blog description should be more important, so it is a H1
					$tag = "h1#blog-description";
				}else{
					// if we are on a inner page, the description is not that important. We'll use a DIV instead
					$tag = "div#blog-description";					
				}
				// print it.                                        
				echo $html->entag(get_bloginfo('description'),$tag);
			?>
			</div><!--  #branding -->
		</div><!-- #header-->      
		
		<?php $blog->element('pages_nav');?>
		<?php $blog->element('cats_nav');?>
		<!-- header -->