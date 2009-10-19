<div class="duperrific wrap">

<?php 		
	echo $options->title('General Settings',$this->theme->name."-general");

	// to show ewhen settings has been updated
	echo $options->flash('Your settings has been updated <a href="'.get_option('home').'">go check it out &raquo;</a>');

	// when settings has been restored
	echo $options->flash('Your settings has been restored to default. Now you can start tweaking again ','restored');

	// when widgets has been reseted
	echo $options->flash('Your blog widgets has been reseted','reseted');

	echo $options->form('general','save');
	echo $options->context($this->theme->name);
	



	echo $options->section(__('Widget Areas'));
	
	echo $options->input('show_sidebar_placeholders',array(
						'label'=>__('Show place-holders for widgetized areas'),
						'description'=>'If set to yes, logged users will see a place-holder box for each widgetized area',
						'type'=>'select',
						'options'=>array('0'=>'Don\'t show placeholders','1'=>'Yes, show place-holders'),
				)
	);	

	// navigation options
	echo $options->section(__('Navigation Options'));
	echo $options->input('main_nav',array(
						'label'=>__('Pages for the main navigation'),
						'type'=>'select',
						'options'=>array(
								'1'=>'Uno',
								'2'=>'Dos',
								'3'=>'Tres',
							),
				)
	); 	

	echo $options->pageChecklist('navigation_pages_include',array(
									'label'=>__('Pages Navigation Menu'),
									'description'=>'Choose which pages do you want in your navigation'
				)
	);
	
	echo $options->categoryChecklist('navigation_include',array(
									'label'=>__('Categories Navigation Menu'),
									'description'=>'Choose which categories you want in your navigation'
				)
	);
	
	//Misc Options
	
	echo $options->section(__('Miscellaneous'));
	echo $options->input('footer_text',array(
						'label'=>__('Text for the footer'),
						'type'=>'textarea',
						'id'=>'footerText',
						// 'description'=>'If set to yes, logged users will see a place-holder box for each widgetized area',
				)
	);
		
	echo $options->formEnd('Save');
		
?>
<div class="restore warning">
	<h3>¿Did you messed something up?</h3>
	You can restore Theme's default settings, but please understand that this is not undoable.
</div>
<?php
	echo $options->form('general','restore');
	echo $options->context($this->theme->name);
	echo $options->formEnd('Restore default Settings');
?>
	
<?php
	echo $options->form('general','reset_widgets');
	echo $options->context($this->theme->name);
	echo $options->formEnd('Reset widgets');
?>
</div>
