<!DOCTYPE html>
<html>
<head>
	<?php
	require 'blim.php';
	$styleImage = new BlimStyleImage("3_14_nile", "H12812", "thumb", "ice");
        $colorImage = new BlimColorImage("3_14_nile", "atelier blouse dirty", "ice");
	?>
	<title> BLIM Example </title>
</head>
<body>
BLISS Image for H12812
<br />
<img src="<? echo $styleImage -> url(); ?>">
<br />
BLISS Image for Color Ice
<br />
<img src="<? echo $colorImage -> url(); ?>">
</body>
</html>



