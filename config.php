<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
        $servername = "127.0.0.1";
        $username   = "root";
        $password   = "";
        $dbname     = "mydb";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "CREATE DATABASE myDB";
        mysqli_query($conn, $sql);
        $sql = " CREATE TABLE MyGuests (
        		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        		name VARCHAR(30) NOT NULL,
        		address VARCHAR(100),
        		telp VARCHAR(20),
        		email VARCHAR(30)
        )";
        mysqli_query($conn,$sql);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            header("Location: " . $_SERVER['PHP_SELF']);
        }
        ?>
   </body>

</html>