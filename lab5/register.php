
<?php
if (count($_POST) > 0) {
    $login = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($login) && !empty($password)) {
        $credFile = fopen("pass.txt", "a+");
        $passHashe = password_hash($password, PASSWORD_DEFAULT);
        fwrite($credFile, "$login{:}$passHashe");
        fclose($credFile);
        echo "<script>history.go(-2)</script>";
    }
}
?>

<link href="style.css" rel="stylesheet"/>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>

<script>
function onClickedSubmit() {

let email = document.getElementById('email').value;
let password = document.getElementById('password').value;
let passwordConfirm = document.getElementById('confirm-password').value;

// alert(`Email: ${email}`);
// alert(`Conf: ${passwordConfirm}`);
// alert(`Password: ${password}`);

if (!email || email.length === 0) {
alert('Пустой логин');
return false;
}

if (!password || email.length === 0) {
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

<form method="post">
    <div class="box">
        <h1>Register</h1>

        <input type="text" id="email" name="email" class="email"/>
        <input type="text" id="password" name="password" class="email"/>
        <input type="text" id="confirm-password" name="confirm-password" class="email"/>

        <button type="submit" onclick="return onClickedSubmit()" id="btn2">Sign Up</button>
    </div>

</form>

