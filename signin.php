<?php 
    session_start(); 
    require_once 'config/database.php';


    $login = $_POST['login'];
    $password = md5($_POST['password'] . "haSsdaad123");

    $check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' 
    AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];
        header('Location: admin.php');
    }
    else{
        $_SESSION['message'] = 'Неверный логин или пароль';
        header('Location: login.php');
    }
?>
<pre>
   <?php 
    print_r($check_user);
    print_r($user);
    ?>
</pre>