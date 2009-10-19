<?php
$pageType = $this->getCurrentPageType();
switch ($pageType) {
	case 'category':
		$label = __('Category ',$_e).' <strong>'.single_cat_title('',false).'</strong>';
	break;
	case 'tag':
		$label = __('Entries tagged with ',$_e).' <strong>'.single_tag_title('',false).'</strong>';
	break;
	case 'day':
		$label = sprintf(__('Daily Archive: <strong>%s</strong>',$_e),get_the_time(get_option('date_format')));
	break;
	case 'month':
		$label = sprintf(__('Monthly Archive: <strong>%s</strong>',$_e),get_the_time('F Y'));
	break;
	case 'year':
		$label = sprintf(__('Yearly Archive: <strong>%s</strong>',$_e),get_the_time('Y'));
	break;
		
	default:
	break;
}
if (isset($label)) {
	echo $html->h('1.top-page-title',$label);
}

?>