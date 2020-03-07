<?php

echo '<table style=\'background-color: #fffab3\'>
    <tr>
        <td style=\"text-align: center;\">Выбранные продукты</td>
    </tr>';
if (isset($_REQUEST['goods'])) {
    foreach ($_REQUEST['goods'] as $good) {
        print "<tr>
        <td>" . $good . "</td>
    </tr>";
    }
}

echo "</table>";