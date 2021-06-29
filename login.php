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
    <form action="signin.php" method="post" class="form-reg">
        <label>Логин</label>
        <input type="text"  name="login" placeholder="Enter login">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Enter pass">
        <button type="submit">Войти</button>
        <p>У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a></p>
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