<?php
    $firstname = stripslashes($_REQUEST["name"]);
    $firstname = mysqli_real_escape_string($link, $firstname);
    $subject = stripslashes($_REQUEST["topic"]);
    $subject = mysqli_real_escape_string($link, $subject);
    $email = stripslashes($_REQUEST["email"]);
            $email = mysqli_real_escape_string($link, $email);
    $message= stripslashes($_REQUEST["message"]);
    $message = mysqli_real_escape_string($link, $message);
  
?>