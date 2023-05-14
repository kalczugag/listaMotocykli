<?php
$servername = "localhost";
$username = "id20752036_kalczugag";
$password = "CHWhhy<1L#u3F(tS";
$dbname = "id20752036_motorcycles_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Utracono połączenie: " . $conn->connect_error);
}
?>
