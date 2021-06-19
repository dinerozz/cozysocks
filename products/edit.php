<?php
    include "../config/database.php";
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
    <title>Обновить</title>
    <?php include '../includes/libs/head-libs.php';?>
</head>
<body>
<form action="../products/edit-row.php?id=<?php echo $post->id ?>" method="post" enctype="multipart/form-data">

<div class="row container">
    <h1>Edit POST</h1>
    <div class="col-8">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" value="<?php echo $post->title ?>" name="edit-title" id="title" placeholder="Enter title">
        </div>
    </div>
    <div class="col-8">
        <div class="mb-3">
            <label for="image" class="form-label">Edit image</label>
            <input type="file" name="edit-image">
        </div>
    </div>
    <div class="col-8">
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" value="<?php echo $post->description ?>" name="edit-description" id="description" placeholder="Enter description">
        </div>
    </div>
    <div class="col-6">
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
    <div class="col-6">
        <a href="../admin.php" class="btn btn-primary">Close</a>
    </div>
</div>

</form>
    <?php include '../includes/libs/body-libs.php'; ?>
</body>
</html>