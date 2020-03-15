<?php

mt_srand((double)microtime() * 1000000);

$min = 10;
$max = 100;

$width = 20;
$maxHeight = 400;

function createColors($im) {

    $yellow = imagecolorallocate($im, 255, 219, 0);
    $red = imagecolorallocate($im, 255, 0, 0);
    $green = imagecolorallocate($im, 0, 255, 0);
    $blue = imagecolorallocate($im, 0, 0, 255);
    $violet = imagecolorallocate($im, 186, 85, 211);

    $colors = array($yellow, $red, $green, $blue, $violet);

    return $colors;
}

for ($i = 0; $i < 5; $i++) {
    $randHeight = mt_rand($min, $max);
    $height = $randHeight / 100 * $maxHeight;
    $image = imagecreatetruecolor($width, $maxHeight);

    $colors = createColors($image);

    $white = imagecolorallocate($image, 255, 255, 255);

    imagefilledrectangle($image, 0, 0, $width, $maxHeight, $white);
    $y1 = $maxHeight - $height;
    error_log($y1);
    error_log($height);
    error_log($maxHeight);
    imagefilledrectangle($image, 0, $y1, $width, $maxHeight, $colors[$i]);

    imagepng($image, "./image$i.png");
}
?>
<html>
    <body>
        <div>
            <img src="/lab6/image0.png" />
            <img src="/lab6/image1.png" />
            <img src="/lab6/image2.png" />
            <img src="/lab6/image3.png" />
            <img src="/lab6/image4.png" />
        </div>
    </body>
</html>
