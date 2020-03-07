<?php

session_start();

$COLOR = $_SESSION['color'];
if (isset($COLOR)) {
    echo "<div style='background-color: $COLOR; height: 100vh;'>";
} else {
    echo "<div>";
}

$COLORS_LIST = array('red', 'green', 'blue', 'yellow');

echo "<form method=\"POST\" action=\"1.php\">
<table style='background-color: #f90'>
    <tr>
        <td style=\"text-align: center;\">Выберите цвет</td>
    </tr>";

foreach ($COLORS_LIST as $color) {
    echo "<tr>
            <td><input type=checkbox name='color' value='$color' onclick=\"onlyOne(this)\" /></td>
            <td><div style='width: 100px; height: 10px; background-color: $color'/> </td>
        </tr>";
}

echo "<tr>
        <td></td>
        <td><input type=\"submit\" value=\"Применить\" onsubmit=\"return checkForm();\"./></td>
    </tr>
</table>
<script>
    function checkForm() {
        var checkboxes = document.getElementsByName('color')
        let size = checkboxes.filter(item => item.checked).size;
        if (size !== 1) {
            alert('Выберите цвет!!!');
            return false;
        }
        return true;
    }
    
    function onlyOne(checkbox) {
        var checkboxes = document.getElementsByName('color')
        checkboxes.forEach((item) => {
            if (item !== checkbox) item.checked = false
        })
    }
</script>";
