
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1> Welcome to the Student Record System</h1>
    
    <header>
        <nav class="navbar">
            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="insert.php">Add Student</a></li>
            <li><a href="display.php">View Students</a></li>
            <li><a href="update.php">Update Student</a></li>
            <li><a href="delete.php">Delete Student</a></li>
            </ul>
        </nav>
     </header>


    <main>
        <p>This system allows you to manage student records efficiently.</p>


        <!-- insert a student:  -->
        <h1>Insert Student Records</h1>
        <form action=insert.php method="POST">

            <label>Name: </label>
            <input type="text" name = "name" required> <br><br>
            <label>Email: </label>
            <input type="email" name ="email" required> <br><br>
            <label>Phone: </label>
            <input type="text" name="phone" required><br><br>

        <input type="submit" name="submit" value="submit">
        </form>



        <!-- delete record:  -->
         <h1>Delete Student Records</h1>
    
            <form action="delete.php" method="POST">
            <label>Student ID: </label> 
            <input type="number" name="id"> <br><br>
            <input type= "submit" name ="delete"value = "Delete Student">  <br><br>

           <a href="display.php"> View Student IDs </a>
        
        </form>


        <!-- update record:  -->
         <h1> Update the record of student: </h1>
         <form action="update.php" method="POST">
            <label> Student ID: </label>
            <input type ="number" name ="id"> <br><br>
            <label> New email</label>
            <input type="email" name="email"> <br><br>
            <label> New phone</label>
            <input type="text" name="phone"> <br><br>
            <input type="submit" name = "update" value= "update">  <br><br>

            <a href="display.php"> View Student IDs </a>
         </form>

    </main>

    <footer>
        <p>&copy; 2026 Student Record System</p>
    </footer>


</body>
</html>
