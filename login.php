<?php session_start();
if (isset($_SESSION['user'])) {
    header('Location: admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Document</title>
    <?php include 'includes/libs/head-libs.php'; ?>

</head>

<body>
    <div class="form">
        <form class="form-reg" method="post">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Enter login">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Enter pass">
            <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
            <br/>
            <button type="submit" class="login-btn"><span class="signin_ico"><i class="fas fa-sign-in-alt"></i></span></button>
            <p>У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a></p>
            <p><a href="index.php">На главную</a></p>
            <p class="msg none">Lorem ipsum dolor sit amet.</p>
        </form>
    </div>



    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="js/ajax_validation.js"></script>
</body>

</html>