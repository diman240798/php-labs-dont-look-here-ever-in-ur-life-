<?php
require("form_func.php")
?>
<link href="styles.css" rel="stylesheet"/>

<html>
    <body>
        <div id="build">
            <?php echo $GLOBALS['myFrom'] ?>
        </div>
        <div id="show">
            <?php echo $GLOBALS['myAnswer'] ?>
        </div>
        <div id="thanks">
            <h4>Спасибо за заполнение анкеты!</h4>
        </div>
    </body>
</html>
