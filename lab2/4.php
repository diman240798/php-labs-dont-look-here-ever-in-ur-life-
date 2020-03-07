<?php

$arr3 = array("http://www.yandex.com",
    "http://www.google.com",
    "http://www.altavista.com");


list($yandex, $google, $bing) = $arr3;
print($yandex . "</br>" . $google . "</br>" . $bing);

print "</br></br></br>_SERVER</br>";

$keys = array_keys($_SERVER);

for($i=0; $i < count($keys); ++$i) {
    echo $keys[$i] . ' : ' . $arr3[$keys[$i]] . "</br>";
}