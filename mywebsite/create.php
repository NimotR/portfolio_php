<?php


$host = "localhost";
$username = "root";
$password = "";
// $db = "getintouchDB";
// $table = "messages";


//Creating connection
$sql = mysqli_connect($host, $username, $password);


//Checking if connection works
if (!$sql) 
    die("Connection failed. Error: " . mysqli_connect_error() . " :(<br>");
    echo "Connected successfully :) <br>";


//Creating database
$database = "CREATE DATABASE getintouch";
if (mysqli_query($sql, $database)){
    echo "<br> Database created successfully <br>";
}else {
    echo "<br> Database not created. Error: " . mysqli_error($sql) . " :(<br>";
}    

//Closing connection
mysqli_close($sql);


//Reopening connection
$sql = mysqli_connect($host, $username, $password, "getintouch");


if(!$sql)
    die("<br>Connection failed. Error: " . mysqli_connect_error() . " :(<br>");
    echo "<br> Connected successfully :) <br>"; 


$table = "CREATE TABLE messages(
    id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    topic VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message VARCHAR(255) NOT NULL,
    reg_date TIMESTAMP
)";

if (mysqli_query($sql, $table)){
    echo "<br> Database table successfully created :) <br>". var_dump(mysqli_query($sql, $table));
}else {
    echo "<br> Database not created. Error: " . mysqli_error($sql) . " :( <br>";
}

mysqli_close($sql);


$sql = mysqli_connect($host, $username, $password, "getintouch");
if(!$sql)
    die("<br> Connection failed. Error: " . mysqli_connect_error() . " :( <br>");
    echo "<br> Connected successfully :) <br>";

if(isset($_POST["submit"])) {
    $firstname = $_POST["name"];
    $subject = $_POST["topic"];
    $email = $_POST["email"];
    $message = $_POST["message"];
}    

    

    $table = "INSERT INTO messages (firstname, topic, email, message)
    VALUES ('$firstname', '$subject', '$email', '$message')";


    if (mysqli_query($sql, $table)){
        echo "<br>New record created sucessfully<br>";
        echo "<br>Message Sent " . $firstname . "<br>";
    }else{
        echo "<br>Error: " . mysqli_error($sql) . "<br>";
        echo "<br>Message not sent <br>";
    }    





?>