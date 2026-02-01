<?php
include 'db.php';

$display = "SELECT * FROM students";
$result = $connect->query($display);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records Table</title>
    <!-- Link to external CSS -->
    <link rel="stylesheet" href="display_style.css">
</head>
<body>

    <header class="table-header">
        <h1>Student Database Records</h1>
        <a href="index.php" class="back-btn">← Back to Dashboard</a>
    </header>

    <main class="table-container">
        <table>  
            <thead>
                <tr>
                    <th>Student's ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc ()){
                        echo "<tr>
                                <td>" . $row['id'] . "</td>                
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['phone'] . "</td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='no-data'>No records found in the database.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <!-- Link to external JS -->
    <script src="display_script.js"></script>
</body>
</html>