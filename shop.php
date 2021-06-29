<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'includes/libs/head-libs.php';?>
</head>
<body>
<?php include 'includes/header.php';?>

<section class="popular">
            <div class="container">
                <div class="popular-inner">
                    <p>Popular Item in the market</p><br>
                    <h2>Trending <span class="section-intro__style">Product</span></h2>
                    <div class="feature-items  _anim-items" id="preview-posts"></div>
                </div>

                <ul class="pagination pagination-lg justify-content-center" id="all-pages">
                </ul>
            </div>
        </section>


<?php include 'includes/footer.php';?>
<?php include 'includes/libs/body-libs.php';?>
</body>
</html>