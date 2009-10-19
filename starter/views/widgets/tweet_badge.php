<?php
echo $before_widget;
$title = $before_title.$this->getOption('title').$after_title;
$userName = $this->getOption('username');
?>
<?php if (empty($userName)): ?>
	<h3>Username is missing</h3>
<?php else: ?>
	<?php if (!empty($title)): ?>
		<?php echo $title ?>
	<?php endif ?>
	<div id="twitter_div" class="tweet">
		<ul id="twitter_update_list"></ul>
		<a href="http://twitter.com/<?php echo $userName ?>" id="twitter-link">@<?php echo $userName ?></a>
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo $userName ?>.json?callback=twitterCallback2&amp;count=1"></script>
	</div>
	
<?php endif ?>
<?php
echo $after_widget;
?>