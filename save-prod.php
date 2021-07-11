<?php
    session_start();
    require_once 'config/database.php';


    if($db->connect_error){
        echo $db->connect_error;
    }
    $title = $_POST['title'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];
    $material = $_POST['material'];
    $country = $_POST['country'];
    $count_in = $_POST['count_in'];
    $sizes = $_POST['sizes'];
    $sex = $_POST['sex'];
    $season = $_POST['season'];
    $date_time = $_POST['date_time'];
    

    //INSERT INTO 'table-name' (name, price, color) VALUES (val1,val2,val3)


    
    $prod_path = 'uploads/product-cards/' . time() . $_FILES['image']['name'];
    if(!move_uploaded_file($_FILES['image']['tmp_name'], $prod_path)){
      $_SESSION['message'] = 'Ошибка при загрузке сообщения';
      header('Location: register.php');    
  }
    $sql = "INSERT INTO `posts` (`title`, `description`, `img`, `cost`, `material`, `country`, `count_in`,`sizes`,`sex`,`season`)
    VALUES ('$title', '$description', '$prod_path', '$cost', '$material', '$country','$count_in','$sizes','$sex','$season')";

    
    if ($db->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
    header("Location: /final_proj/admin.php");