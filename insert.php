<?php
require 'db.php';

if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $insert_query = "INSERT INTO students(name, email, phone) VALUES ('$name', '$email', '$phone')";

        if($connect->query($insert_query)=== TRUE){
            echo "Record inserted successfully";
        }
        else {
            echo "Error: ".$connect->error;
        }

        header("Location: index.php");
        exit();
    }


else { 
    echo "Invalid request";
}

?>