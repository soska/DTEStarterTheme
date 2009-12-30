<?php
/**
 * Controller class
 *
 * You can extend the Controller class here, all this methods will be available trough 
 * the $blog global variable.
 * 
 * @package default
 * @author Armando Sosa
 */
class Controller extends DuperrificController{
	
	/**
	 * This method is called right after the Controller ahs been initialized,
	 * it's a good opportunity for setting things up.
	 *
	 * @return void
	 * @author Armando Sosa
	 */
	function setup(){
		$this->localize();
	}
	
	/**
	 * This is a utility function meant to be used within the loop.
	 *
	 *
	 * @param string $more_link_text 
	 * @param string $stripteaser 
	 * @return void
	 * @author Armando Sosa
	 */
	function maybeTheExcerpt($more_link_text = null, $stripteaser = 0){
		global $post;
		
		// define the more link
		if (!empty($more_link_text)) {
			$more =  "\n<a href=\"". get_permalink() . "#more-{$post->ID}\" class=\"more-link\">$more_link_text</a>";						
		}
		
		// if the editor has manually specified an excerpt, we'll use it. 
		if (!empty($blog->post_excerpt)) {
			return $blog->post_excerpt.$more;
		}
		
		// by this time, we know that no manual excerpt is defined, now we will figure out if there's a <!-- more tag -->				
		$content = $post->post_content;
		$excerpt = str_replace('[...]','',get_the_excerpt()).$more;
		if ( !( strpos($content,'<!--more') === false ) ) {
			$content = get_the_content($more_link_text,$stripteaser);
		} 
		
		if ((strlen($content) > strlen($excerpt))) {
			$content = $excerpt;
		}
				
		return $content;
		
	}
	
}
?>