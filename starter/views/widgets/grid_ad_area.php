<?php
echo $before_widget;
if (!empty($title)) {
  echo $before_title;
  echo $title;
  echo $after_title;
}
for ($i=1; $i < 5; $i++) { 
	if ($url = $this->getOption('url'.$i)){
?>	
<a href="<?php echo $url ?>" class="125px_ad"><img src="<?php echo $this->getOption('image'.$i) ?>" ></a>
<?php
}
}
echo $after_widget;
?>