<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "testing";


$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql ="";
$name = $_POST['name'];
$password =$_POST['password'];
// echo '<pre>';
//     print_r($sql);



$name = mysqli_real_escape_string($conn, $name);
$password = mysqli_real_escape_string($conn, $password);


$sql = "INSERT INTO form(name, password) VALUES ('$name', '$password')";


if ($conn->query($sql) === TRUE) {
    "New record created successfully";
    echo '<pre>';
    print_r($sql);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
