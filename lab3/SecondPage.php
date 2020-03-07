<?php

echo "<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
</head>
<h3>Товары</h3>

<form method=\"POST\" action=\"ResultPage.php\">
<table style='background-color: #fffab3'>
    <tr>
        <td style=\"text-align: center;\">Каталог програмных продуктов</br>Страница 2/2</td>
    </tr>
    <tr>
        <td>Купить</td>
        <td>Продукт</td>
    </tr>
    <tr>
        <td><input type=checkbox name=\"goods[]\" value=\"Microsoft Office\"/></td>
        <td>Microsoft Office</td>
    </tr>
    <tr>
        <td><input type=checkbox name=\"goods[]\" value=\"Photoshop\"/></td>
        <td>Photoshop</td>
    </tr>
    <tr>
        <td></td>
        <td><input type=\"submit\" value=\"Войти\"></td>
    </tr>
</table>";

if (isset($_REQUEST['goods'])) {
    foreach ($_REQUEST['goods'] as $good) {
        print '<input type=hidden name="goods[]" value="' . $good . '"/>';
    }
}

echo "
</form>
</body>
</html>";