
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
                <h1><a href="courses.html">Courses Offered</a></h1>
                
                <div class="course-body">
                    <p>Master the most in-demand technical skills with our comprehensive curriculum:</p>
                    <ul>
                        <li><strong>Web Development:</strong> Full-stack HTML, CSS, JavaScript, and React.</li>
                        <li><strong>App Development:</strong> Building native iOS and Android applications.</li>
                        <li><strong>Artificial Intelligence:</strong> Python, Machine Learning, and Data Science.</li>
                        <li><strong>Cyber Security:</strong> Ethical hacking and network protection.</li>
                    </ul>
                    <a href="courses.html" class="learn-more">View Full Syllabus →</a>
                </div>
            </div>

                    <!-- View Students div: -->
            <div class="child-div" id="id5">
                <h1><a href="display.php">Student Directory</a></h1>
                
                <div class="course-body">
                    <p>Manage and monitor all registered students within the centralized database:</p>
                    <ul>
                        <li><strong>Quick Search:</strong> Locate student profiles instantly by their unique ID.</li>
                        <li><strong>Contact Info:</strong> Access up-to-date emails and phone numbers.</li>
                        <li><strong>Data Integrity:</strong> View real-time records synced with the database.</li>
                        <li><strong>Reporting:</strong> Review total enrollment and student distribution.</li>
                    </ul>
                    <a href="display.php" class="learn-more">Open Database View →</a>
                </div>
            </div>


             <!-- contact div:  -->
             <div class="child-div" id="id6">
                            <h1><li><a href="contact.html">Contact Us</a></li> </h1>
                            
                <p>Want to learn web development or have questions about our projects? We're here to help! Reach out to discuss ideas, get guidance, or just say hello.</p>
                <ul>
                    <li>Looking for tips on HTML, CSS, or PHP? We've got you covered!</li>
                    <li>Need advice on building projects or your portfolio? Ask away!</li>
                    <li>Interested in collaboration or feedback on your work? Let's connect!</li>
                </ul>
                
            </div>
         </div>
    </main>

    <footer>
        <p>&copy; 2026 Student Record System</p>
    </footer>

<script src="script.js"></script>
</body>
</html>