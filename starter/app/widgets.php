<?php

class GridAdAreaWidget extends DuperrificWidget{	
	var $title = "* Grid Banners";
	var $description = "Displays up to 4 (125px x 125px) image banners";	
	var $width = 300;
	var $options = array(
			'image1'=>'http://assets.duperrific.com/images/ads/125/awesomest-dark.png',
			'url1'=>'http://duperrific.com/?utm_source=1one&utm_medium=awdkbn&utm_campaign=125wdgt',

			'image2'=>'http://assets.duperrific.com/images/ads/125/simple-white.png',
			'url2'=>'http://duperrific.com/?utm_source=1one&utm_medium=swwtbn&utm_campaign=125wdgt',

			'image3'=>'',
			'url3'=>'',

			'image4'=>'',
			'url4'=>'',
		);
}


class TweetBadgeWidget extends DuperrificWidget{	
	var $title = "* Last Tweet";
	var $description = "Displays your last tweet from twitter.com";	
	var $options = array(
			'title'=>'',
			'username'=>'',
		);
}


?>