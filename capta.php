<?php
session_start();
header('Content-type: image/jpeg');
$text=$_SESSION['secure'];
$font_size=30;
$font_height=40;
$font_width=130;
$image=imagecreate($font_width,$font_height);
imagecolorallocate($image, 255, 255, 255);
$font_color=imagecolorallocate($image, 10, 10, 10);
for ($i=1; $i<=60 ; $i++) {
$x1=rand(1,100);
$x2=rand(1,100);
$y1=rand(1,100);
$y2=rand(1,100);

	imageline($image, $x1, $y1, $x2, $y2, $font_color);
}

    imagettftext($image, $font_size, 0, 2, 30, $font_color, 'segoepr.ttf', $text);

imagejpeg($image);
?>
