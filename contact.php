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

<section class="contact">
    <div class="container">
        <div class="contact-inner">
            <h1 class="contact-main-title">Contact</h1>
            <div class="content_centered">
                <h3 class="contact-title">Contact</h3>
                <p>For all enquiries, please email us using the form below.</p>
            </div>
            <form id="contactForm" action="send.php" method="post">
                <label for="">Что Вас интересует?</label><br>
                <div class="select_centered">
                    <div class="custom-select">
                        <div class="tab">
                            <select name="select_question" id="">
                                <option value="1">О доставке в регионы</option>
                                <option value="2">Ценовая политика</option>
                                <option value="3">Наличие товара</option>
                                <option value="4">Сотрудничество</option>
                                <option value="5">Прочее</option>
                            </select>
                        </div>
                    </div>
                    <div class="tab">
                        <p><input name="first_name" placeholder="First name..." oninput="this.className = ''"></p>
                        <p><input name="last_name" placeholder="Last name..." oninput="this.className = ''"></p>
                    </div>
                    <div class="tab">
                        <p><input name="email" placeholder="E-mail..." oninput="this.className = ''"></p>
                        <p><input name="phonenumber" placeholder="Phone..." oninput="this.className = ''"></p>
                        <p><textarea name="message" placeholder="Message..." oninput="this.className = ''" ></textarea></p>
                    </div>
                </div>

                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
                <div style="text-align:center;margin-top:40px;">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>

                <!-- <div class="contact-items">
                    <div class="contact-form">
                            
                    </div>
                </div> -->
                <!-- <button type="submit" name="submit" value="Submit">Отправить</button> -->
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php' ;?>
<script src="js/contact_steps.js"></script>
<?php include 'includes/libs/body-libs.php';?>
</body>
</html>