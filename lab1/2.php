<?php


$res1 = "12abc"+1;
$res2 = "-12abc"+3;
$res3 = "-12.1"+3;
$res4 = "-12.1abc"+3;

echo "<table style='background-color: aquamarine'>
  <tr>
    <td>Выражение</td>
    <td>Результат</td>
  </tr>
  <tr>
       <td>\"12abc\"+1</td>
       <td>$res1</td>
  </tr>
  <tr>
    <td>\"-12abc\"+3</td>
     <td>$res2</td>
  </tr>
  <tr>
    <td>\"-12.1\"+3</td>
    <td>$res3</td>
  </tr>
  <tr>
    <td>\"-12.1abc\"+3</td>
     <td>$res4</td>
  </tr>
</table>";