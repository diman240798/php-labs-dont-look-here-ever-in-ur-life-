<?php
//print_r($_POST);
if (count($_POST) > 0) {
    $login = $_POST['email'];
    $password = $_POST['password'];
    if (file_exists("pass.txt")) {
        if (isset($login) && isset($password)) {
//            echo "<script>alert(`Reading file`)</script>";
            $credArray = file("pass.txt");
            foreach ($credArray as $cred) {
                $creds = explode("{:}", $cred);
                $log = $creds[0];
                $passHesh = $creds[1];
//                echo "<script>alert(" . $login . ")</script>";
                $password_verify_result = password_verify($password, $passHesh);
//                echo "<script>alert(" . $password_verify_result . ")</script>";
                $loginsMatch = $login == $log;
//                echo "<script>alert(" . $loginsMatch . ")</script>";
                if ($loginsMatch && $password_verify_result) {
                    echo "<script>alert(" . $login . ")</script>";
                    setcookie('login', $login);
                    echo "<script>window.location='/lab5/Main.php'</script>";
                    return;
                }
            }
            echo "<script>alert(\"Введите корректные логин и пароль\"); history.go(-1);</script>";
        }
    } else {
        echo "<script>alert(\"Нет аккаунтов. Зарегистрируйтесь!\"); history.go(-1);</script>";
    }
}
?>