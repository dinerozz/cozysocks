<?php session_start();
    if(isset($_SESSION['user'])){
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
    <?php include 'includes/libs/head-libs.php';?>

</head>
<body>
<div class="form">
    <form action="signup.php" method="post" enctype="multipart/form-data" class="form-reg">
    <h1>Registration form</h1><br>  
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Enter your full name">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Enter login">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Enter email">
        <label>Аватар</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Enter pass">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Confirm your pass">
        <button type="submit">Зарегистрироваться</button>
        <p>У вас уже есть аккаунт? - <a href="login.php">Авторизируйтесь</a></p>
        <p><a href="index.php">На главную</a></p>
        <?php
                if(isset($_SESSION['message'])){
                    echo '<p class="msg">' . $_SESSION['message']   . '</p>';
                }
                unset ($_SESSION['message']);
            ?>

    </form>
</div>

</body>
</html>