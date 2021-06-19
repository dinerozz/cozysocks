<?php session_start();
    if(!$_SESSION['user']){
        header('Location: login.php');
    }     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'includes/libs/head-libs.php';?>
    <link rel="stylesheet" href="style/components/admin.css">
    <link rel="stylesheet" href="style/components/popular-market.css">
    <title>Admin</title>
</head>
<body>
 <div class="form">
     <form>
        <img src="<?= $_SESSION['user']['avatar'] ?>" width="400" alt="">
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <p><a href="index.php">На главную</a></p>
        <a href="logout.php" class="logout">Выход</a>
     </form>
 </div>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Добавить товар
</button>
<form action="save-prod.php" method="post" enctype="multipart/form-data">
<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row container">
                <h1 class="mt-5 mb-5">Добавить товар</h1>
                    <div class="col-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                        </div>
                    </div>
                <div class="col-8">
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image">
                    </div>
                </div>               
                <div class="col-8">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
                    </div>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</form>

<section class="popular">
            <div class="container">
                <div class="popular-inner">
                    <div class="feature-items-admin" id="all-posts-admin">
                </div>
                </div>

                <!-- <ul class="pagination pagination-lg justify-content-center" id="all-pages">
                </ul> -->
            </div>
        </section>
    <ul class="pagination pagination-lg justify-content-center" id="all-pages"></ul>


<?php include 'includes/libs/body-libs.php'; ?>
</body>
</html>