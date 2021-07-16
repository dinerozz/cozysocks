<?php 
    session_start();
    require_once 'config/database.php';

    $login = $_POST['login'];
    $password = $_POST['password'];

    $error_fields = [];
    if($login === ''){
        $error_fields[] = 'login';
    }
    if($password === ''){
        $error_fields[] = 'password';   
    }

    if(!empty($error_fields)){
        $response = [
            "status" => false,
            "type" => 1,
            "message" => "Проверьте правильность полей",
            "fields" => $error_fields
        ];

        echo json_encode($response);

        die();
    }

    // $password = md5($_POST['password'] . "haSsdaad123");
    $password = md5($password . "haSsdaad123");

    $check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' 
    AND `password` = '$password' ");
    if (mysqli_num_rows($check_user) > 0){
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
        ];
        // header('Location: admin.php');


        $response = [
            "status" => true // auth
        ];

        echo json_encode($response);
    }
    
    
    else{

        $response = [
            "status" => false, // failure
            "message" => 'Неверный логин или пароль'
        ];

        echo json_encode($response);
    
    }

?>
