<?php

if(isset($_POST['submit'])){
$to = "mintality228@gmail.com"; // Здесь нужно написать e-mail, куда будут приходить письма
$from = "ask@mindofweb.xyz"; // this is the sender's Email address
$select_question = $_POST['select_question'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
// $msg = $_POST['message'];
$subject = "cozysocks | new message";
$subject2 = "Copy of your form submission";
$message = "Пользователь " . $first_name . " " . "$last_name" . " оставил сообщение:" . "\n\n" . "email: " . $email . "\n\n" . "Номер телефона: " . $phonenumber . "\n\n" . "Вопрос: " . $select_question . "\n\n" . "Сообщение: " . $_POST['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

$headers = "From:" . $from;
$headers2 = "From:"  . $to;

mail($to,$subject,$message,$headers);
// mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
echo "Сообщение отправлено. Спасибо Вам " . $first_name . ", мы скоро свяжемся с Вами.";
echo "<br /><br /><a href='https://www.mindofweb.xyz/'>Вернуться на сайт.</a>";

}

?>

<!--Переадресация на главную страницу сайта, через 3 секунды-->
<script language="JavaScript" type="text/javascript">
function changeurl(){eval(self.location="https://www.mindofweb.xyz/index.php");}
window.setTimeout("changeurl();",3000);
</script>