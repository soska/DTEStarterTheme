<div id="pages-menu" class="navigation">  
	    <?php 
			$homeLabel = $this->getOption('general','home_link_label');
			$include = implode(',',(array) $this->getOption('general','navigation_pages_include'));
			$params = array(
					'show_home'=>$homeLabel,
					'sort_column'=>'menu_order',
					'include'=>$include,
					'title_li'=>'',
					'depth'=>1
				);
			wp_page_menu($params);
	    ?>  
</div>