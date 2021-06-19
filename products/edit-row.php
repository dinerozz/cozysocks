<?php

    include "../config/database.php";
    $pid = $_GET['id'];
    $title = $_POST['edit-title'];
    $description = $_POST['edit-description'];

    $sql = "UPDATE `posts` SET `title`='$title', `description`='$description' WHERE `posts`.`id` = $pid;";
    
    if ($db->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }
    header("Location: /final_proj/admin.php");