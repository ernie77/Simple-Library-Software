<?php
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

$sql = "SELECT * FROM Books WHERE title LIKE '%$title%'"; //$title will come from webform
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "isbn: " . $row["isbn"]. " - Title: " . $row["title"]. " Author: " . $row["author"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 