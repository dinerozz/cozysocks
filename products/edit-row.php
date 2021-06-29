<?php

    include "../config/database.php";
    $pid = $_GET['id'];
    $title = $_POST['edit-title'];
    $description = $_POST['edit-description'];
    $cost = $_POST['edit-cost'];
    $material = $_POST['edit-material'];
    $country = $_POST['edit-country'];
    $count_in = $_POST['edit-count_in'];
    $sizes = $_POST['edit-sizes'];
    $sex = $_POST['edit-sex'];
    $season = $_POST['edit-season'];
    $edit_img = $_FILES['edit-image']['name'];

    // $prod_edit = 'uploads/upd/' . time() . $_FILES['edit-image']['name'];

    // move_uploaded_file($_FILES['edit-image']['tmp_name'], 'uploads/upd/'.$_FILES['edit-image']['name']);
    $sql = "UPDATE `posts` SET `title`='$title', `description`='$description', `cost` = '$cost', `material` = '$material', 
    `country` = '$country', `count_in` = '$count_in', `sizes` = '$sizes', `sex` = '$sex', `season` = '$season' WHERE `posts`.`id` = $pid;";
    // if(!move_uploaded_file($_FILES['edit-image']['tmp_name'], $edit_img)){
    //   $_SESSION['message'] = 'Ошибка при загрузке сообщения';
    //   header('Location: admin.php');      
    // } 


    if ($db->query($sql) === TRUE) {
      // move_uploaded_file($_FILES['edit-image']['tmp_name'], 'uploads/upd/'.$_FILES['edit-image']['name']);
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
    header("Location: /final_proj/admin.php");

?>