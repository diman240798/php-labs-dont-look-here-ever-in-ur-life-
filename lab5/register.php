<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>

<script>
    function click() {
        alert('Пустой логин');

        let email = document.getElementsByName('email');
        let password = document.getElementsByName('password');
        let passwordConfirm = document.getElementsByName('confirm-password');

        if (!email || email.isEmpty()) {
            alert('Пустой логин');
            return false;
        }

        if (!password || password.isEmpty()) {
            alert('Пустой пароль');
            return false;
        }

        if (password !== passwordConfirm) {
            alert('Пароли не совпадают');
            return false;
        }

        return true;
    }
</script>

<form method="post" onsubmit="">
    <div class="box">
        <h1>Register</h1>

        <input type="text" name="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email"/>
        <input type="text" name="password" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email"/>
        <input type="text" name="confirm-password" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email"/>

        <button type="submit" onclick="return click()" id="btn2">Sign Up</button>

    </div>

</form>

<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>


<?php
$login = $_POST['email'];
$password = $_POST['password'];
    if (!empty($login) && !empty($password)) {
        $credFile = fopen("a+", "pass.txt");
        $passHashe =password_hash($password, PASSWORD_DEFAULT);
        fwrite($credFile, "$login{:}$passHashe");
        fclose($credFile);
        echo "<script>window.location='/lab5/login.php'</script>";
}
?>


<style>
    body {
        font-family: 'Open Sans', sans-serif;
        background: #3498db;
        margin: 0 auto 0 auto;
        width: 100%;
        text-align: center;
        margin: 20px 0px 20px 0px;
    }

    p {
        font-size: 12px;
        text-decoration: none;
        color: #ffffff;
    }

    h1 {
        font-size: 1.5em;
        color: #525252;
    }

    .box {
        background: white;
        width: 300px;
        border-radius: 6px;
        margin: 0 auto 0 auto;
        padding: 0px 0px 70px 0px;
        border: #2980b9 4px solid;
    }

    .email {
        background: #ecf0f1;
        border: #ccc 1px solid;
        border-bottom: #ccc 2px solid;
        padding: 8px;
        width: 250px;
        color: #AAAAAA;
        margin-top: 10px;
        font-size: 1em;
        border-radius: 4px;
    }

    .password {
        border-radius: 4px;
        background: #ecf0f1;
        border: #ccc 1px solid;
        padding: 8px;
        width: 250px;
        font-size: 1em;
    }

    .btn {
        background: #2ecc71;
        width: 125px;
        padding-top: 5px;
        padding-bottom: 5px;
        color: white;
        border-radius: 4px;
        border: #27ae60 1px solid;

        margin-top: 20px;
        margin-bottom: 20px;
        float: left;
        margin-left: 16px;
        font-weight: 800;
        font-size: 0.8em;
    }

    .btn:hover {
        background: #2CC06B;
    }

    #btn2 {
        float: left;
        background: #3498db;
        width: 125px;
        padding-top: 5px;
        padding-bottom: 5px;
        color: white;
        border-radius: 4px;
        border: #2980b9 1px solid;

        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 10px;
        font-weight: 800;
        font-size: 0.8em;
    }

    #btn2:hover {
        background: #3594D2;
    }
</style>