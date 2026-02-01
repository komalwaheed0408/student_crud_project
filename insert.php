<?php
require 'db.php';

if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $insert_query = "INSERT INTO students(name, email, phone) VALUES ('$name', '$email', '$phone')";

        if($connect->query($insert_query)=== TRUE){
            echo "Record inserted successfully <br><br><br><br>";
           // echo '<a href="index.php">Go back to Home Page</a>';
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