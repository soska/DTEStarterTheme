<?php 
/**
 * This element view displays the correct title for the current page
 *
 * @author Armando Sosa
 */
$pageType = $blog->getCurrentPageType();
$titleSeparator = ' - ';
$title = $titleSeparator.get_bloginfo('name');
?>

<title>
	<?php
		switch($pageType){
			case 'home':
				echo get_bloginfo('name').$titleSeparator.get_bloginfo('description');
			break;
			case 'single':
			case 'page':			
				single_post_title();			
				echo $title;
			break;
			case 'category':
				single_cat_title();
				_e('| Category Archive',$_e);				
				echo $title;
			break;
			case 'tag':
				single_tag_title();
				_e('| Tag Archive',$_e);				
				echo $title;
			break;
			case 'day':
				echo get_the_time(get_option('date_format'));
				_e('| Daily Archive ',$_e);				
				echo $title;
			break;
			case 'month':
				echo get_the_time('F Y');
				_e('| Monthly Archive ',$_e);				
				echo $title;
			break;
			case 'year':
				echo get_the_time('Y');
				_e('| Archive ',$_e);				
				echo $title;
			break;
		}		
	?>
</title>