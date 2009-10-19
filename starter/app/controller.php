<?php
class Controller extends DuperrificController{
	
	function setup(){
		$this->localize();
	}
	
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