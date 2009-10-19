<?php
for ($i=1; $i < 5; $i++) { 
	echo $widget->input('image'.$i,array('label'=>"Image No.$i (125x125px)"));
	echo $widget->input('url'.$i,array('label'=>"Url for Image No.$i"));
}
?>