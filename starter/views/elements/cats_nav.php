<div id="cats-menu" class="navigation">  
	<ul>  
	    <?php 
			$include='';
			$includeIds = $this->getOption('general','navigation_include');		
			wp_list_categories(array(
					'title_li'=>'',
					'hide_empty'=>'0',
					'depth'=>'1',
					'include'=>implode(',',$includeIds),
				));
	    ?>  
	</ul>  
</div>

