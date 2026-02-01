<?php

include 'db.php';

if (isset($_POST['delete'])){

$id = $_POST['id'];

$delete_query = "DELETE FROM students WHERE id = $id";

if ($connect->query($delete_query) === TRUE) {

echo "Record deleted successfully <br><br><br><br>";
            echo '<a href="index.php">Go back to Home Page</a>';
exit();

}

else {
  echo "Error occured: ". $connect->error;

}


}
?>