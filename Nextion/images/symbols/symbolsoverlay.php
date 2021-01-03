<?php

$symbol = $_GET['symbol'];
$overlay = $_GET['overlay'];

$file = "symbols".$symbol.".png";

$img = @imagecreatefrompng($file);

if(!$img)
	die("Fehler");

imagesavealpha($img, true);
$white = imagecolorallocate($img, 255, 255, 255);

imagestring($img, 3, 5, 1, $overlay, $white);

header('Content-Type: image/png');

imagepng($img);
imagedestroy($img);
?>
