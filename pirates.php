<?php
	$self = $_SERVER['PHP_SELF'];
	ob_start();
	include 'header.php';
	$buffer = ob_get_contents();
	ob_end_clean();
	$buffer = str_replace("%TITLE%", "Pirates", $buffer);
	echo $buffer;
	echo generateNav($self) . "</div>";
?>
<div class="content">
	<h2 style="line-height: 1.1em; font: normal normal normal 46px/1.4em 'jockey one',sans-serif;">
		<span style="color:#C5B358;">Pirates</span>
	</h2>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=YNqBD2oMbTw" class="vid_title" target="_blank">Pittsburgh Pirates 2015 2nd Half Hype</a>
	<br><span style="color: #ffffff;">July 14, 2015</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=YNqBD2oMbTw" target="_blank"><img src = "img/mqdefault3.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=4keTznzBT0U" class="vid_title" target="_blank">"Win the Division" | 2015 Pittsburgh Pirates (Game of Thrones Theme)</a>
	<br><span style="color: #ffffff;">May 10, 2015</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=4keTznzBT0U" target="_blank"><img src = "img/mqdefault9.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=WCWMhmo2Ppw" class="vid_title" target="_blank">Hoist the Colours - Pittsburgh Pirates Rally Video [Updated: 2015]</a>
	<br><span style="color: #ffffff;">April 6, 2015</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=WCWMhmo2Ppw" target="_blank"><img src = "img/mqdefault8.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=miFfVM-q7XE" class="vid_title" target="_blank">Pittsburgh Pirates 2015 Pump Up</a>
	<br><span style="color: #ffffff;">March 15, 2015</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=miFfVM-q7XE" target="_blank"><img src = "img/mqdefault6.webp" width='300' height='175' /></a>
</div>
<?php
	include 'footer.php';
?>