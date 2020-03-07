<?php
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    echo "Ваш логин: $login";
} else {
    echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
</head>
<body>
<h3>Вход на сайт</h3>
<form method=\"POST\">
    Логин: <input type=\"text\" name=\"login\" /><br><br>
    <input type=\"submit\" value=\"Войти\">
</form>
</body>
</html>";
}
?>



