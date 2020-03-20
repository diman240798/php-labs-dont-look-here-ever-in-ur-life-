<?php


$firstName = '';
$middleName = '';
$lastName = '';

$isFirstTime = count($_POST) == 0;

if ($isFirstTime) {
    ?>
    <style type="text/css">
        #show, #thanks {
            display: none;
        }
    </style>
<? } else {
    ?>
    <style type="text/css">
        #build, #thanks {
            display: none;
        }
    </style>
    <?
}


$GLOBALS['myFrom'] = build_form();
$GLOBALS['myAnswer'] = build_result();

function build_form()
{
    $checked = array('Си',
        'Паскаль',
        'РНР'
    );


    $selected = array('Программистом',
        'Системным администратором',
        'Постановщиком задач',
        'Руководителем группы'
    );

    $result = "<fieldset style=\"border:solid blue 2px;width:200px;\">
            <legend
                style=\"font-family:arial;font-size:14px;\">
                <b>Регистрация</b>
            </legend>
            <div style=\"padding:20px;font-family:verdana;\">
                <form action='#' method=\"POST\">
                
                <label for='sername'>Фамилия:</label>
                <input class='inpStr' type=text   name='sername'  value='' >
                
                <label for='sername'>Имя:</label>
                <input class='inpStr' type=text   name='name'  value='' >
                
                <label for='midname'>Отчество:</label>
                <input class='inpStr' type=text   name='midname'  value='' >
                
                <label>Программирую на:</label>";
    foreach ($checked as $x) {
        $result .= "<label style='margin-left: 40px' for='lang'>$x</label><input class='inpCheck' name='lang' type='radio' value='$x'>";
    }

    $result .= "<label>Могу работать:</label>
                <select name='work' multiple>";
    foreach ($selected as $sel) {
        $result .= "<option>$sel</option>";
    }

    $result .= "</select>
            <input type='submit' />
            </form>

            </div>
        </fieldset>";

    return $result;
}

function build_result() {
    return "
    <label class='longLabel'>Фамилия: {$_POST['sername']}</label>
    <label class='longLabel'>Имя: {$_POST['name']}</label>
    <label class='longLabel'>Отчество: {$_POST['midname']}</label>
    <label class='longLabel'>Программирую на: {$_POST['lang']}</label>
    <label class='longLabel'>Могу работать: {$_POST['work']}</label>
    <!--<button onclick='document.getElementById(`show`).style.display=`none`;document.getElementById(`build`).style.display=`inline`;'>Изменить</button>-->
    <button onclick='window.history.go(-1)'>Изменить</button>
    <button onclick='document.getElementById(`show`).style.display=`none`;document.getElementById(`thanks`).style.display=`inline`;'>Созранить</button>
";
}

?>