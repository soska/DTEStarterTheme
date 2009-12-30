<?php
/**
*  Theme Class
*  
*  The ThemeController controls and configures the features present on the theme, like 
*  bundled widgets, widget areas, control panel, theme options, etc.
*  
*  
*/
class ThemeController extends DuperrificThemeController{
 
   /**
    * The name of the theme
    *
    * @var string
    */
	var $name = "Starter";

   /**
    * the widgets that we are going to include
    *
    * @var string
    */
	var	$widgets = array('GridAdArea','TweetBadge'); 

	/**
	 * Define here the widget areas that will be used accross the theme
	 *
	 * @var string
	 */
	var $widgetAreas = array(
			'sidebar'=>'All Purpose Sidebar',
			'home-sidebar'=>'Home &rarr; Sidebar',
			'single-sidebar'=>'Single Post &rarr; Sidebar',
			'page-sidebar'=>'Page &rarr; Sidebar',
			'archive-sidebar'=>'Archive &rarr; Sidebar',
			'404'=>'404 Page ',
		);
	
   /**
    * Here, we declare setting panels.
    *
    * There's a lot of magic going on here. DTE will add a panel for you under 'Appareance' for you with this settings.
	* the key 'generalOptions' refers to a method on the Theme class, you'll find it bellow.
    *
    * @var string
    */
	var	$panels = array('generalOptions'=>array(
							'menuTitle'=>'Theme Settings',
							'PageTitle'=>'General Settings',
				)
		);

	/**
	 * this are the default options for the theme.
	 * we can only set simple values, every further logic should be on the setup() method
	 *
	 * @var string
	 */
	var $options = array(
			'general'=>array(
					'hide_header_text'=>1,
					'home_link_label'=>'Home',				
					'navigation_include'=>array(),
					'navigation_pages_include'=>array(),
					'show_sidebar_placeholders'=>1,
					'footer_text'=>false,
				),
		);	
	
	/**
	 * This method is fired in the constructor, after the options has been loaded, 
	 * but before the widgets has been initialized                                                                            
	 *
	 * @return void
	 * @author Armando Sosa
	 */
	function setup(){  	
		if ($this->options['general']['footer_text'] === false) {
			$this->options['general']['footer_text'] = "&copy; ".get_bloginfo('name')." powered by <a href='http://duperrific.com/blog/magnifique'>Magnifique Theme</a> ";
		}		
	}
	              
	/**
	 * This nethod is hooked to the WP "init" hook
	 *
	 * DTE tries to save you a lot of the hassle of hooking stuff up with this convenience methods.
	 * Great for setting thigns up.
	 *
	 * @return void
	 * @author Armando Sosa
	 */
	function onInit(){

		if (!is_admin()) {

			// The method style is a convenience wrapper to wp_enqueue style that makes easier to add aditional stylesheets to your theme
			// here, we'll use it to display ie6 and ie7 exclusive css, by using conditional comments
			$this->style('dup-ie6',array('src'=>'ie6.css','conditions'=>'IE 6'));
			$this->style('dup-ie7',array('src'=>'ie6.css','conditions'=>'IE 7'));

			// iepngfix
			// I wish there was a way to add this script using conditional comments, but there isn't
			$this->script('supersleight.plugin.js',array('src'=>'supersleight.plugin.js','deps'=>'jquery'));
		}
		
	}
			
	/**
	 * General Options Panel    
	 *
	 * This is the function for the panel we've declared above.
	 *
	 * Again, a lot of stuff happens behind the scenes, everything we'll do here is include a panel
	 * using the includePanel() function. This is only a convenience method to include a view located on the
	 * views/panels/ folder.
	 *
	 * Don't worry about saving stuff, DTE will take care of it by itself. 
	 *
	 * @return void
	 * @author Armando Sosa
	 */
	function generalOptions(){
		$this->includePanel('general');
	}
	
	
	
}

?>