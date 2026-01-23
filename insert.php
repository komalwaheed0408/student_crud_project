<?php
require 'db.php';

if($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $insert_query = "INSERT INTO students(name, email, phone)
    VALUES ('$name', '$email', '$phone')";

    if($connect->query($insert_query)=== TRUE){
        echo "Record inserted successfully"
    }
    else {
        echo "Error: ".$connect->error;
    }

    header("Location: welcome.php");
    exit;
}


else { 
    echo "Invalid request";
}

?>