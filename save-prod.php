<?php
    session_start();
    include "config/database.php";
    $title = $_POST['title'];
    $description = $_POST['description'];

    //INSERT INTO 'table-name' (name, price, color) VALUES (val1,val2,val3)


    
    $path = 'uploads/' . time() . $_FILES['image']['name'];
    if(!move_uploaded_file($_FILES['image']['tmp_name'], $path)){
      $_SESSION['message'] = 'Ошибка при загрузке сообщения';
      header('Location: register.php');    
  }
    $sql = "INSERT INTO `posts` (`title`, `description`, `img`)
    VALUES ('$title', '$description', '$path')";

    
    if ($db->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
    header("Location: /final_proj/admin.php");