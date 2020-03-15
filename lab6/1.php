<?php

mt_srand((double)microtime() * 1000000);


$width = 40;
$minHeight = 10;
$maxHeight = 250;

$font = 'C:\Users\diman\PhpstormProjects\lab9\lab6\arial.ttf';

$image = imagecreatetruecolor($width, $maxHeight);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, $width, $maxHeight, $white);
imagettftext($image, 20, 0, 10,  30, $black, $font, "Y");
imagepng($image, "./x.png");

for ($i = 0; $i < 5; $i++) {
    $randHeight = mt_rand($minHeight, $maxHeight);
    $image = imagecreatetruecolor($width, $maxHeight);

    $colors = createColors($image);

    $white = imagecolorallocate($image, 255, 255, 255);

    imagefilledrectangle($image, 0, 0, $width, $maxHeight, $white);
    $y1 = $maxHeight - $randHeight;
    error_log($y1);
    error_log($randHeight);
    error_log($maxHeight);
    imagefilledrectangle($image, 0, $y1, $width, $maxHeight, $colors[$i]);

    imagepng($image, "./image$i.png");
}

$image = imagecreatetruecolor($width, $maxHeight);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);

imagefilledrectangle($image, 0, 0, $width, $maxHeight, $white);
imagettftext($image, 20, 0, 10,  $maxHeight - 5, $black, $font, "X");
imagepng($image, "./y.png");


function createColors($im) {

    $yellow = imagecolorallocate($im, 255, 219, 0);
    $red = imagecolorallocate($im, 255, 0, 0);
    $green = imagecolorallocate($im, 0, 255, 0);
    $blue = imagecolorallocate($im, 0, 0, 255);
    $violet = imagecolorallocate($im, 186, 85, 211);

    $colors = array($yellow, $red, $green, $blue, $violet);

    return $colors;
}
?>
<html>
    <body>
        <div style="border: 4px  double black;width: 310px">
            <img src="/lab6/x.png" />
            <img src="/lab6/image0.png" />
            <img src="/lab6/image1.png" />
            <img src="/lab6/image2.png" />
            <img src="/lab6/image3.png" />
            <img src="/lab6/image4.png" />
            <img src="/lab6/y.png" />
        </div>
    </body>
</html>
