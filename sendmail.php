<?php
if($_POST){
    $to = "developers@turbainc.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

//send email
    mail($to, "This is an email from:" .$email, $message);
}
?>