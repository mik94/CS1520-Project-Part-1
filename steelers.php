<?php
	$self = $_SERVER['PHP_SELF'];
	ob_start();
	include 'header.php';
	$buffer = ob_get_contents();
	ob_end_clean();
	$buffer = str_replace("%TITLE%", "Steelers", $buffer);
	echo $buffer;
	echo generateNav($self) . "</div>";
?>
<div class="content">
	<h2 style="line-height: 1.1em; font: normal normal normal 46px/1.4em 'jockey one',sans-serif;">
		<span style="color:#C5B358;">Steelers</span>
	</h2>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=3i5We3eeGCA" class="vid_title" target="_blank">Pittsburgh Steelers vs. Denver Broncos Playoff Hype Trailer</a>
	<br><span style="color: #ffffff;">January 16, 2016</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=3i5We3eeGCA" target="_blank"><img src = "img/mqdefault10.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=fDVX0EuKN0o" class="vid_title" target="_blank">Pittsburgh Steelers 2016 Playoff Pump Up</a>
	<br><span style="color: #ffffff;">January 7, 2016</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=fDVX0EuKN0o" target="_blank"><img src = "img/mqdefault2.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=BOK0fx4vJhM" class="vid_title" target="_blank">"Burgh Proud" - Penguins & Steelers Opening Montage 1/3/15</a>
	<br><span style="color: #ffffff;">January 3, 2015</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=BOK0fx4vJhM" target="_blank"><img src = "img/mqdefault11.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=8db8_UQyDKM" class="vid_title" target="_blank">Pittsburgh Steelers 2014-2015 Playoff Hype</a>
	<br><span style="color: #ffffff;">December 31, 2014</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=8db8_UQyDKM" target="_blank"><img src = "img/mqdefault12.webp" width='300' height='175' /></a>
</div>
<div class="video">
	<a href="https://www.youtube.com/watch?v=6sCYC1wyxJ0" class="vid_title" target="_blank">Pittsburgh Steelers 2014-2015 Hype</a>
	<br><span style="color: #ffffff;">September, 2014</span>
	<br><br>
	<a href = "https://www.youtube.com/watch?v=6sCYC1wyxJ0" target="_blank"><img src = "img/mqdefault7.jpg" width='300' height='175' /></a>
</div>
<?php
	include 'footer.php';
?>