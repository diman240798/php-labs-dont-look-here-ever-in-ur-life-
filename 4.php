<body>
    <form method="post" action="4.php">
        <input type="text" name="text" required>
        <input type="submit" name="submit" value="add">
    </form>

</body>

<?php
$text = $_POST['text'];
preg_match('/www[^#\?\/]+/', $text, $matches);
echo '<a  href="'.$text.'" target=_blank>'.$matches[0].'</a>'
?>