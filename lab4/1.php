<?php

session_start();

$COLOR = $_POST['color'];
if (isset($COLOR)) {
    $_SESSION['color'] = $COLOR;
    echo "<div style='background-color: $COLOR; height: 400vh;'>";
} else {
    $COLOR = $_SESSION['color'];
    if (isset($COLOR)) {
        $_SESSION['color'] = $COLOR;
        echo "<div style='background-color: $COLOR; height: 400vh;'>";
    } else {
        echo "<div>";
    }
}
echo "<a href='/lab4/2.php'>Change Color Page</a>";
echo "</div>";