<?php

include 'db.php';

// Fetch data from the database through select query and store it in a varibale.
//then cal that query throught that variable by using$connect->query and store it in another variable.
$display = "SELECT * FROM students";
$result = $connect->query($display);

?>

<!-- Now html code: In body make a table, in its first row make table headings <th like normal.
 Then in the second row, first of all make php code in which u will write if conditon that if rows > 0 then run 
 a while loop, in that while loop display the table data one by one <td. 
 In each <td in the while loop again you will use php code, in which you use echo to write the values.  -->

 <!-- Then after this, you will finally make else no record found in <tr> <td> in the echo -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1> Displaying Student Record </h1>
 <table border="1" cellpadding = "10" cellspacing = "0">  
    <tr>
        <th>Student's ID</th>
        <th>Name</th>
        <th>email</th>
        <th>phone</th>
    </tr>

    <tr>
        <?php
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc ()){
?>
            <td> <?php echo $row['id'] ?> </td>                
            <td> <?php echo $row['name'] ?> </td>
            <td> <?php echo $row['email']?> </td>
            <td> <?php echo $row['phone']?> </td>

</tr>

<?php
            }}
            else {
                echo "<tr><td colspan='4'> No record found </td></tr>";
            }

?>
</table>

       
 </body>
 </html>