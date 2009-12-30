<?php
/**
 * This file is called before initializing widget areas from the ThemeController class
 * All this could have been initialized in app/theme.php, tight on the class declaration, 
 * but that way we won't have i10n support for this strings. 
 *
 * @author Armando Sosa
 */
// important: whithout this line, admin stuff won;t be translated
$this->blog->localize();

// define widget areas
$this->widgetAreas = array(
	
		// general widget areas
		'sidebar'=>__('All Purpose Sidebar',$_e),

		// home widget areas
		'home-sidebar-top'=>__('Home -- Sidebar Top',$_e),
		'home-sidebar-bottom'=>__('Home -- Sidebar Bottom',$_e),
		'home-page-top'=>__('Home -- Top Of Page',$_e),
		'home-page-bottom'=>__('Home -- Bottom Of Page',$_e),

		// Single Post widget areas
		'single-sidebar-top'=>__('Single Post -- Sidebar Top',$_e),
		'single-sidebar-bottom'=>__('Single Post -- Sidebar Bottom',$_e),
		'single-page-top'=>__('Single Post -- Above Content',$_e),
		'single-page-bottom'=>__('Single Post -- Bottom of Page',$_e),

		// Comments
		'before-comments'=>__('Comments -- Before List',$_e),
		'before-comments-form'=>__('Comments -- Before Form',$_e),

		// archive Post widget areas
		'static-sidebar-top'=>__('Page -- Sidebar Top',$_e),
		'static-sidebar-bottom'=>__('Page -- Sidebar Bottom',$_e),
		'static-page-top'=>__('Page -- Above Content',$_e),
		'static-page-bottom'=>__('Page -- Bottom of Page',$_e),

		// archive Post widget areas
		'archive-sidebar-top'=>__('Archive -- Sidebar Top',$_e),
		'archive-sidebar-bottom'=>__('Archive -- Sidebar Bottom',$_e),
		'archive-page-top'=>__('Archive -- Above Content',$_e),
		'archive-page-bottom'=>__('Archive -- Bottom of Page',$_e),
		
		// 404
		'404'=>__('404 Page ',$_e),
	);
?>