
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
            <li><a href="courses.html">Courses</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
     </header>


    <main>
        <p>This system allows you to manage student records efficiently.</p>

        <div class="parent-div">

                <!-- insert a student:  -->

              <div class="child-div" id="id1">
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
                </div>



                <!-- delete record:  -->

                <div class="child-div" id="id2">
                        <h1>Delete Student Records</h1>
                    
                            <form action="delete.php" method="POST">
                            <label>Student ID: </label> 
                            <input type="number" name="id"> <br><br>
                            <input type= "submit" name ="delete"value = "Delete Student">  <br><br>

                        <a href="display.php"> View Student IDs </a>
                        
                        </form>
                </div>


                <!-- update record:  -->

                <div class="child-div" id="id3">
                    <h1> Update the record of student </h1>
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
                </div>


            <!-- courses div:  -->
             <div class="child-div" id="id4">
                <h1><li><a href="courses.html">Courses Offered</a></li> </h1>
            </div>


             <!-- about div div:  -->
             <div class="child-div" id="id5">
                <h1><li><a href="about.html">About Us</a></li> </h1>
            </div>



             <!-- contact div:  -->
             <div class="child-div" id="id6">
                <h1><li><a href="contact.html">Contact Us</a></li> </h1>
            </div>
         </div>
    </main>

    <footer>
        <p>&copy; 2026 Student Record System</p>
    </footer>

<script src="script.js"></script>
</body>
</html>