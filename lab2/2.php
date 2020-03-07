<?php

$arr = array("yandex" => "http://www.yandex.com",
    "google" => "http://www.google.com",
    "bing" => "http://www.altavista.com");

print("</br>For key => value</br>");

foreach($arr as $key=>$val) {
    echo $key . "   " . $val . "</br>";
}

print("</br>For arr => x</br>");

foreach($arr as $x) {
    echo $x . "</br>";
}


print("</br>Inner Loop</br>");
$usefulSites=array(
    array("http://www.yandex.com","http://www.google.com",
        "http://www.altavista.com"),
    array("http://www.php.com","http://www.rusdoc.ru")
);
$searchEngines=array("http://www.yandex.com",
    "http://www.google.com",
    "http://www.altavista.com");
$phpDocs= array("http://www.php.com",
    "http://www.rusdoc.ru");
$usefulSites=array($searchEngines, $phpDocs);

foreach($usefulSites as $val) {
    foreach($val as $url) {
        echo $url . "</br>";
    }
}