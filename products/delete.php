<?php
    include '../config/database.php';
    $id = $_GET['id'];
    $db->query("DELETE FROM `posts` WHERE id=$id;");
    // $prod_path = 'uploads/product-cards/' . time() . $_FILES['image']['name'];     unlink($prod_path);

    header("Location: /final_proj/admin.php");