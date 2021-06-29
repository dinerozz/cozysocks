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
    <section class="admin-body">
        <div class="container">
            <div class="admin-inner">
                <h1><span class="user-adm"><?= $_SESSION['user']['full_name'] ?></span>, добро пожаловать в панель администратора!</h1>
            </div>
            <div class="form">
                <form>
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="<?= $_SESSION['user']['avatar'] ?>" alt="">
                        </div>
                        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
                        <a href="#"><?= $_SESSION['user']['email'] ?></a>
                        <p><a href="index.php">На главную</a></p>
                        <a href="logout.php" class="logout">Выход</a>
                    </div>
                </form>
            </div>
            <button type="button" class="btn btn-primary mt-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-plus"></i> Добавить товар
            </button>
            <ul class="pagination pagination-lg justify-content-center" id="all-pages"></ul>
            <form action="save-prod.php" method="post" enctype="multipart/form-data">
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавить товар</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    <div class="modal-body">
                        <div class="row container">
                            <h1 class="mt-5 mb-5"><img src="images/cozysocks.png" width="250" alt=""></h1>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Заголовок</label>
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
                                        <label for="cost" class="form-label">Цена</label>
                                        <input type="text" class="form-control" name="cost" id="cost" placeholder="Enter cost"></input>
                                    </div>
                                </div>    
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="cost" class="form-label">Количество в упаковке</label>
                                        <input type="text" class="form-control" name="count_in" id="count_in" placeholder="Enter count"></input>
                                    </div>
                                </div>    
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="cost" class="form-label">Размеры</label>
                                        <input type="text" class="form-control" name="sizes" id="sizes" placeholder="Enter sizes"></input>
                                    </div>
                                </div>    
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="cost" class="form-label">Пол</label>
                                        <input type="text" class="form-control" name="sex" id="sex" placeholder="Enter sex"></input>
                                    </div>
                                </div>    
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="cost" class="form-label">Сезон</label>
                                        <input type="text" class="form-control" name="season" id="season" placeholder="Enter season"></input>
                                    </div>
                                </div>    
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="country" class="form-label">Производитель</label>
                                        <input type="text" class="form-control" name="country" id="country" placeholder="Enter country"></input>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="material" class="form-label">Материал</label>
                                        <input type="text" class="form-control" name="material" id="material" placeholder="Enter material"></input>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Описание</label>
                                        <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter description" rows="10"></textarea>
                                    </div>
                                </div>
                                    <div class="col-6">
                                        <button button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section class="popular">
        <div class="container">
            <div class="popular-inner">
                <div class="feature-items-admin" id="all-posts-admin"></div>
            </div>

                <!-- <ul class="pagination pagination-lg justify-content-center" id="all-pages">
                </ul> -->
        </div>
    </section>
    <ul class="pagination pagination-lg justify-content-center" id="all-pages"></ul>


<?php include 'includes/libs/body-libs.php'; ?>
</body>
</html>