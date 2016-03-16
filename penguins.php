<?php
	$self = $_SERVER['PHP_SELF'];
	ob_start();
	include 'header.php';
	$buffer = ob_get_contents();
	ob_end_clean();
	$buffer = str_replace("%TITLE%", "Penguins", $buffer);
	echo $buffer;
	echo generateNav($self) . "</div>";
?>
<div class="content">
	<h2 style="line-height: 1.1em; font: normal normal normal 46px/1.4em 'jockey one',sans-serif;">
		<span style="color:#C5B358;">Penguins</span>
	</h2>
</div>
<div class="video">
	<a href="http://www.youtube.com/watch?v=If4Uw_pkUBs" class="vid_title" target="_blank">Pittsburgh Penguins 2016 2nd Half Hype</a>
	<br><span style="color: #ffffff;">February 2, 2016</span>
	<br><br>
	<a href = "http://www.youtube.com/watch?v=If4Uw_pkUBs" target="_blank"><img src = "img/mqdefault.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=HoAYc_yp9Bs" class="vid_title" target="_blank">Pittsburgh Penguins 2015 Christmas Montage</a>
	<br><span style="color: #ffffff;">December 24, 2015</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=HoAYc_yp9Bs" target="_blank"><img src = "img/mqdefault7.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=3iOSqveb_J0" class="vid_title" target="_blank">Marc-Andre Fleury 2014-2015 Highlights</a>
	<br><span style="color: #ffffff;">June 8, 2015</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=3iOSqveb_J0" target="_blank"><img src = "img/mqdefault4.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=4_G3qU6OlW0" class="vid_title" target="_blank">Pittsburgh Penguins 2015 Playoff Pump Up</a>
	<br><span style="color: #ffffff;">April 11, 2015</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=4_G3qU6OlW0" target="_blank"><img src = "img/mqdefault5.webp" width='300' height='175' /></a>
</div>
<?php
	include 'footer.php';
?>