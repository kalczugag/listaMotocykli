<?php
require 'config.php';

$make = $_POST['make'];
$model = $_POST['model'];

$sql = "INSERT INTO motorcycles (make, model) VALUES ('$make', '$model')";
if ($conn->query($sql) === TRUE) {
  echo "Motorcycle added successfully.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

