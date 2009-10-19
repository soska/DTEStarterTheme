<?php
class DuperrificBehavior {
	/**
	 * Contain the settings for the behavior
	 *
	 * @var string
	 */	
	var $settings = array();
	
	var $name;
	
	/**
	 * Construct the Behavior, and attaches itself to the $blog object
	 *
	 * @param string $name 
	 * @param string $settings 
	 * @param string $blog 
	 * @author Armando Sosa
	 */
	function __construct($name,$settings,&$blog){
		$this->name = $name;
		$this->settings = set_merge($this->settings,$settings);
		$blog->registerBehavior($this);
		$this->init($blog);
	}

	/**
	 * Initialize itself, and register it's methods to blog
	 *
	 * @return void
	 * @author Armando Sosa
	 */
	function init(&$blog){
		$className = get_class($this);
		$methods = array_diff(get_class_methods($className),get_class_methods('DuperrificBehavior'));
		foreach ($methods as $method) {
			$blog->__mappedMethods[$method] = $this->name;
		}
	}


}
?>