<?php

$arr3=array("yandex"=>"http://www.yandex.com",
    "google"=>"http://www.google.com",
    "bing"=>"http://www.altavista.com");

while($x=each($arr3)) {
    print_r($x);
    print "</br>";
}