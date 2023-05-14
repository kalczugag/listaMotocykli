<?php
require 'config.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM motorcycles WHERE id = '$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usunięto.";
    } else {
        echo "Błąd: " . $conn->error;
    }
} else {
    echo "Nieprawidłowe ID.";
}

$conn->close();
?>
