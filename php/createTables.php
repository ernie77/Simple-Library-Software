 <?php
$servername = "localhost";
$username = "library";
$password = "321Kirjasto";
$dbname = "libraryDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create tables
$sql = "CREATE TABLE Books (
id INT(6) UNSIGNED AUTO_INCREMENT,
isbn INT(13) NOT NULL PRIMARY KEY,
title VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
)";
$sql = "CREATE TABLE User (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(255) NOT NULL,
lastname VARCHAR(255) NOT NULL,
)";
$sql = "CREATE TABLE Laina (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Books_isbn INT(13) NOT NULL,
User_id INT(6) NOT NULL,
)";

/*$sql = "CREATE TABLE Books (
id INT(6) UNSIGNED AUTO_INCREMENT,
isbn INT(13) NOT NULL PRIMARY KEY,
title VARCHAR(255) NOT NULL,
author VARCHAR(255) NOT NULL,
)";*/
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 