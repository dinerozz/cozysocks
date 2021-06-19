<?php
    include "config/database.php";
    $id = $_GET['id'];

    $post_response = $db->query("SELECT * FROM `posts` WHERE id=$id;");
    $post=$post_response->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details page</title>
    <?php include 'includes/libs/head-libs.php'?>
</head>
<body>
<div class="container">
        <?php include 'includes/header.php'?>
        <main class="container">
        <div class="row g-5">
            <div class="col-md-8">
            <article class="blog-post">
                <h2 class="blog-post-title"><?php echo $post->title ?></h2>
                <p class="blog-post-meta"><?php echo $post->description ?><a href="#"></a></p>
            </article>
            </div>
        </div>
        </main>
    </div>    
    <?php include 'includes/libs/body-libs.php'?>
</body>
</html>