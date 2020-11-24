<?php

require('database.php');

if (isset($_REQUEST['submit'])) {
    
    require('var.php');


    $data = "INSERT INTO messages (firstname, topic, email, message) 
    VALUES ('$firstname', '$subject', '$email', '$message')";

    $result = mysqli_query($link, $data);

    if($result){
    echo "<br>Message Sent ". $firstname . "<br>";
        }
    else {
        header("LOCATION: index.html#contact-form");
        echo "<br>Not Sent<br>";
    }
    }
?>