<?php
require("form_func.php")
?>

<style>
    form {
        background-color: #FFF;
        height: 400px;
        width: 380px;
        margin-right: auto;
        margin-top: 0px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        padding: 0px;
        text-align:center;
    }
    label {
        font-family: Georgia, "Times New Roman", Times, serif;
        font-size: 16px;
        color: #333;
        height: 20px;
        width: 150px;
        margin-top: 10px;
        text-align: left;
        clear: both;
        float:left;
        margin-right:15px;
    }
    .inpStr {
        height: 20px;
        width: 150px;
        border: 1px solid #000;
        margin-top: 10px;
        float: left;
    }

    .inpCheck {
        height: 20px;
        width: 50px;
        margin-top: 5px;
        float: left;
    }
    input[type=submit] {
        margin: 20px;
        float:right;
    }
    select {
        height: 80px;
        width: 200px;
        border: 1px solid #000;
        margin-top: 10px;
        float: left;
        overflow-y: auto;
    }
    .longLabel {
        width: 400px;
    }
</style>

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
