<?php

$arr1 = array();

for ($i = 0; $i <= count($arr1); $i++) {
    echo $arr1[$i];
}

echo "</br></br>";

$arr2= array("http://www.yandex.com",
    "http://www.google.com",
    "http://www.altavista.com");

for ($i = 0; $i <= count($arr2); $i++) {
    echo $arr2[$i] . "</br>";
}

echo "</br></br>";

$arr3=array("yandex"=>"http://www.yandex.com",
    "google"=>"http://www.google.com",
    "bing"=>"http://www.altavista.com");

$keys = array_keys($arr3);

for($i=0; $i < count($keys); ++$i) {
    echo $keys[$i] . ' : ' . $arr3[$keys[$i]] . "</br>";
}

echo "</br></br>";

echo "print_r</br>";
print_r($arr3);
echo "</br></br>";

echo "var_dump</br>";
var_dump($arr3);
echo "</br></br>";

$arr4 = array(1,"asd",array(2,3));

echo "print_r</br>";
print_r($arr4);
echo "</br></br>";

echo "var_dump</br>";
var_dump($arr4);
echo "</br></br>";

$var = 4;

echo "print_r</br>";
print_r($var);
echo "</br></br>";

echo "var_dump</br>";
var_dump($var);
echo "</br></br>";

echo "</br>The var_dump function displays structured information about variables/expressions including its type and value. Arrays are explored recursively with values indented to show structure. It also shows which array values and object properties are references.
</br>
The print_r() displays information about a variable in a way that's readable by humans. array values will be presented in a format that shows keys and elements. Similar notation is used for objects.";