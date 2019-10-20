<?php

function checkEmail(string $email) {
    $matches = [];
    preg_match("/(\w|\d|_|\.|-)+@(\w|\d|_|\.|-)+\.\w+/", $email, $matches);
    return sizeof($matches) != 0;
}

print checkEmail("dm@yandex.ru");