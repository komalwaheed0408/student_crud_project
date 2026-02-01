<?php

include 'db.php';

if (isset($_POST['delete'])){

$id = $_POST['id'];

$delete_query = "DELETE FROM students WHERE id = $id";

if ($connect->query($delete_query) === TRUE) {

echo "Record deleted successfully <br><br><br><br>";
header("Location: index.php");
exit();

}

else {
  echo "Error occured: ". $connect->error;

}


}
?>