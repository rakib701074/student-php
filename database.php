<?php
// Database connection details
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "testing";

// Create connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$description =$_POST['description'];
echo '<pre>';
    print_r($sql);

// Sanitize the data (optional)
$name = mysqli_real_escape_string($conn, $name);
$description = mysqli_real_escape_string($conn, $description);
// $sql = mysqli_real_escape_string($conn, $sql);

// Prepare SQL statement
$sql = "INSERT INTO employee(name, description) VALUES ('$name', '$description')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    "New record created successfully";
    echo '<pre>';
    print_r($sql);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
