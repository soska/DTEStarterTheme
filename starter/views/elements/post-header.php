<p class="entry-meta">
<div class="entry-date">
<?php 
echo $html->entag(get_the_time('d'),'span.day');
echo $html->entag(get_the_time('M'),'span.month');
echo $html->entag(get_the_time('Y'),'span.year');
?>
</div>
</p>
