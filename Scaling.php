<?php
$src=ImageCreateFromJPEG('php.jpeg');
$width=ImageSx('$src');
$height=ImageSy('$src');
$x=$width/2;
$y=$height/2;
$dst=ImageCreateTrueColor($x,$y);
ImageCopyResampled($dst,$src,3,3,3,3,$x,$y,$width,$height);
header('Content-Type:image/png');
ImagePNG($dst);
?>
