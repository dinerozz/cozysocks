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
<?php include 'includes/header.php'?>
    <section class="details">
        <div class="container">
            <div class="details-header">
                <h1><?php echo $post->title ?></h1>
                <a href="index.php">На главную</a>
            </div>
            <div class="details-inner">
                <div class="details-items">
                    <div class="detail-img">
                        <img src="<?php echo $post->img ?>" alt="">
                    </div>
                    <div class="detail-info">
                        <div class="detail-mob-img">
                            <img src="<?php echo $post->img ?>" alt="">
                        </div>
                        <h2><?php echo $post->cost ?>₸</h2>
                        <h5>Выгодная цена!</h5>
                        <div class="detail-availibility">
                            <h4>Наличие<span class="availibility-arrow-down"><i class="fas fa-arrow-down"></i></span></h4>
                            <div class="availibility-bar">
                                <div class="availibility"></div>
                            </div>
                        </div>
                        <div class="detail-specs">
                            <ul class="specs fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Страна-производитель: <?php echo $post->country ?></li>
                                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Материал: <?php echo $post->material ?></li>
                                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Цена за штуку: <?php echo $post->cost ?>₸</li>
                                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Количество в упаковке: <?php echo $post->count_in ?></li>
                                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Размеры: <?php echo $post->sizes ?></li>
                                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Пол: <?php echo $post->sex ?></li>
                                <li><span class="fa-li"><i class="fas fa-check-square"></i></span>Сезон: <?php echo $post->season ?></li>
                            </ul>
                        </div>  
                        <div class="detail-stats">
                            <div class="like"><span class="heartt"><i class="fas fa-heart"></i></span><p><?php echo $post->likes ?></p></div>
                            <div class="comment"><span class="comment"><i class="fas fa-comment"></i></span><p><?php echo $post->feed ?></p></div>
                            <div class="views"><span class="views"><i class="far fa-eye"></i></span><p><?php echo $post->views ?></p></div>
                        </div>
                        <div class="buy-buttn"><a href=""><i class="fas fa-cart-arrow-down"></i>Купить</a></div>
                    </div>
                    <div class="buy-btn">
                        <a href=""><i class="fas fa-cart-arrow-down"></i>Купить</a>
                    </div>
                </div>
                <div class="details-description">
                    <div class="details-description-header">
                        <h2>Описание товара</h2>
                    </div>
                    <p><?php echo $post->description ?>. Премиальное качество, удобство, комфорт и польза только с <span>COZYSOCKS</span>. Отправка во все регионы РК и не только!</p>
                </div>

            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'?>
    <?php include 'includes/libs/body-libs.php'?>
</body>
</html>