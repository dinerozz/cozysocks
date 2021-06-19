<?php
    include '../config/database.php';
    $id = $_GET['id'];
    $db->query("DELETE FROM `posts` WHERE id=$id;");
    header("Location: /final_proj/admin.php");