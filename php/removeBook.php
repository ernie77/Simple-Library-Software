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

// values will come from webform
$isbn = $_POST['isbn'];
$sql = "DELETE FROM Books Where isbn = $isbn";

if ($conn->query($sql) === TRUE) {
    echo "Created successfully. Return in 5 seconds.";
} else {
    echo "Error creating: " . $conn->error;
}

$conn->close();
  header( "refresh:5; url=../index.html" );
?> 