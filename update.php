<?php
include 'db.php';

if(isset($_POST['update'])){

    $id = $_POST['id'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $update_query = "UPDATE students SET email = '$email', phone = '$phone' WHERE id = $id";

    if($connect->query($update_query) === TRUE){
        echo "Record update successfully!";    

    }

    else {
        echo "error: ".$connect->error;
    }

    header('Location: index.php');

}
?>