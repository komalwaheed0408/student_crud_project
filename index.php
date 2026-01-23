<!-- just html code in this file, no php needed here. But we will add forms for each operation of CRUD and link to 
 the display.php(which will have a code of how the table is displayed (basically, in a table form).) -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-CRUD-Home</title>
 </head>
 <body>
    <h1> Student CRUD</h1>


    <h2>Add/insert a new student</h2>
    <form action="insert.php" method = "post">
        <label>Name: </label>
        <input type="text" name = "name" required> <br><br>

        <label>Email: </label>
        <input type="email" required> <br><br>

        <label>Phone: </label>
        <input type="text" name="phone" required><br><br>

        <buttom type="submit> Save </button>
    </form>
 
<hr>

<a href="display.php">View all students</a>

 </body>
 </html>