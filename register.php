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
    <title>Document</title>
    <?php include 'includes/libs/head-libs.php'; ?>

</head>

<body>
    <div class="form">
        <form class="form-reg">
            <h1>Заполните поля</h1><br>
            <label>ФИО</label>
            <input type="text" name="full_name" placeholder="Enter your full name">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Enter login">
            <label>Почта</label>
            <input type="email" name="email" placeholder="Enter email">
            <label>Аватар</label>
            <!-- <input type="file" name="avatar"> -->
            <div class="upload-img">
                <label for="myfile" class="img_label"><i class="fas fa-upload"></i></label>
                <input type="file" class="img" id="myfile" name="avatar" multiple="multiple" />
            </div>
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Enter pass">
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirm" placeholder="Confirm your pass">
            <button type="submit" class="register-btn">Зарегистрироваться</button>
            <p>У вас уже есть аккаунт? - <a href="login.php">Авторизируйтесь</a></p>
            <p><a href="index.php">На главную</a></p>
            <p class="msg none">Lorem ipsum dolor sit amet.</p>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="js/ajax_validation.js"></script>
    <script src="js/upload.js"></script>
</body>

</html>