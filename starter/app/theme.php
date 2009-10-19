<?php
/**
*  Theme Class
*  
*  Whatever customization needs to be made, made it here
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
    * the settings panels for the admin area, the key of the name corresponds to a method 
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
	 * This is hooked to the WP "init" hook
	 *
	 * @return void
	 * @author Armando Sosa
	 */
	function onInit(){

		if (!is_admin()) {
			// skin style
			$skin=$this->blog->getOption('general','skin');
			if (!empty($skin)){
				$this->style("$skin-skin",array('src'=>"skins/$skin/style.css"));
			}		

			// ie styles
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
	 * @return void
	 * @author Armando Sosa
	 */
	function generalOptions(){
		$this->includePanel('general',compact('skins'));
	}
	
	
	
}

?>