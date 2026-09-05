<?php
header('Content-Type: application/json');
$images = glob("image/*.{jpg,jpeg,png,gif,webp,avif,bmp,svg,JPG,JPEG,PNG,GIF,WEBP,AVIF,BMP,SVG}", GLOB_BRACE);
echo json_encode($images);
?>
