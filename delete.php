<?php
require 'config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM motorcycles WHERE id = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Motorcycle deleted successfully.";
    } else {
        echo "Error deleting motorcycle: " . $conn->error;
    }
} else {
    echo "Invalid motorcycle ID.";
}

$conn->close();
?>
