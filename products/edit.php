<?php
include "../config/database.php";
$id = $_GET['id'];

$post_response = $db->query("SELECT * FROM `posts` WHERE id=$id;");
$post = $post_response->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обновить</title>
    <?php include '../includes/libs/head-libs.php'; ?>
</head>

<body>
<form action="edit-row.php?id=<?php echo $post->id ?>" method="post" enctype="multipart/form-data">

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
                    <label for="image" class="form-label">Image</label>
                    <img src="<?php echo $post->img ?>" width="410" alt="">
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" value="<?php echo $post->description ?>" name="edit-description" id="description" placeholder="Enter description">
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="cost" class="form-label">Цена</label>
                    <input type="text" class="form-control" value="<?php echo $post->cost ?>" name="edit-cost" id="cost" placeholder="Enter cost"></input>
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="cost" class="form-label">Количество в упаковке</label>
                    <input type="text" class="form-control" value="<?php echo $post->count_in ?>" name="edit-count_in" id="count_in" placeholder="Enter count"></input>
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="cost" class="form-label">Размеры</label>
                    <input type="text" class="form-control" value="<?php echo $post->sizes ?>" name="edit-sizes" id="sizes" placeholder="Enter sizes"></input>
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="cost" class="form-label">Пол</label>
                    <input type="text" class="form-control" value="<?php echo $post->sex ?>" name="edit-sex" id="sex" placeholder="Enter sex"></input>
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="cost" class="form-label">Сезон</label>
                    <input type="text" class="form-control" value="<?php echo $post->season ?>" name="edit-season" id="season" placeholder="Enter season"></input>
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="country" class="form-label">Производитель</label>
                    <input type="text" class="form-control" value="<?php echo $post->country ?>" name="edit-country" id="country" placeholder="Enter country"></input>
                </div>
            </div>
            <div class="col-8">
                <div class="mb-3">
                    <label for="material" class="form-label">Материал</label>
                    <input type="text" class="form-control" value="<?php echo $post->material ?>" name="edit-material" id="material" placeholder="Enter material"></input>
                </div>
            </div>
            <!-- <div class="col-8">
                <div class="mb-3">
                    <label for="description" class="form-label">Описание</label>
                    <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter description" rows="10"></textarea>
                </div>
            </div> -->
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            <div class="col-6">
                <a href="../admin.php" class="">Close</a>
            </div>
        </div>

    </form>
    <?php include '../includes/libs/body-libs.php'; ?>
</body>

</html>