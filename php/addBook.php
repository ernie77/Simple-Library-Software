<?php
require('test_input.php');
$servername = "127.0.0.1:49227";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "libraryDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// values will come from webform
$isbn=test_input($_POST["isbn"]);
$title=test_input($_POST["title"]);
$author=test_input($_POST["author"]);
$sql = "INSERT INTO Books (isbn, title, author)
VALUES ('$isbn', '$title', '$author')";


if ($conn->query($sql) === TRUE) {
    echo "Created successfully. Return in 5 seconds.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header( "refresh:5; url=../index.html" );
?>
