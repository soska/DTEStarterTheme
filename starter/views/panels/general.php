<?php
/**
 * This is a settings panel view that will be called from the generalOptions() method over app/theme.php class
 * 
 * DTE takes very seriously User Experience so we've gone a long way to make sure that this panel looks a lot like 
 * WordPress' bundled setting pages with the minumum effort.
 * 
 * So, instead of writing all the necessary HTML by hand, we'll use the handy $options helper. 
 * 
 * @author Armando Sosa
 */
?>

<div class="duperrific wrap">

<?php 		
	// This is the title of the page.
	echo $options->title('General Settings',$this->theme->name."-general");

	// the $options->flash() method will show a message at the top of the screen…
	// …to show ewhen settings has been updated
	echo $options->flash('Your settings has been updated <a href="'.get_option('home').'">go check it out &raquo;</a>');
	// …when settings has been restored
	echo $options->flash('Your settings has been restored to default. Now you can start tweaking again ','restored');
	// …when widgets has been reseted
	echo $options->flash('Your blog widgets has been reseted','reseted');


	// here, we intialize the form
	echo $options->form('general','save');
	echo $options->context($this->theme->name);
	
	// We'll divide the form into sections, like WP does
	echo $options->section(__('Widget Areas'));
	// This will output a beautiful control linked to the 'show_sidebar_placeholders' options declared over on app/theme.php
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
