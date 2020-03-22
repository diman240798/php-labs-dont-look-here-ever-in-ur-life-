<?php
//print_r($_COOKIE);
$login = $_COOKIE['login'];
if (isset($login)) {
    echo "<h1>U signed in as $login</h1>";
} else {
    echo "<h1>Access Denied</h1>";
}
