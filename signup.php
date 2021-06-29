<?php
    session_start();
    require_once 'config/database.php';
    

    $full_name = $_POST['full_name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    // function RandomString()
    // {
    //     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    //     $randstring = '';
    //     for ($i = 0; $i < 10; $i++) {
    //         $randstring = $characters[rand(0, strlen($characters))];
    //     }
    //     return $randstring;
    // }
    if($password === $password_confirm){
        //con...
        //$_FILES['avatar']['name']
        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if(!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)){
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: register.php');    
        }
        // $sault = Randomstring();
        $password = md5($password . "haSsdaad123");
        mysqli_query($db, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, 
        `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");

        $_SESSION['message'] = 'Регистрация произошла успешно';
        header('Location: login.php');    
    }  
    else{
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: register.php');
    }
?>