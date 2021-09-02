<?php
    include '../config/database.php';
    $id = $_GET['id'];
    $db->query("DELETE FROM `posts` WHERE id=$id;");
    // unlink($prod_path);
    // $prod_path = 'uploads/product-cards/' . time() . $_FILES['image']['name'];     unlink($prod_path);

    header("Location: /cozysocks/admin.php");

?>