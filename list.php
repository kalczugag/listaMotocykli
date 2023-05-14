<?php
require 'config.php';

$sql = "SELECT * FROM motorcycles";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["make"] . "</td>";
    echo "<td>" . $row["model"] . "</td>";
    echo "<td><a href='delete.php?id=" . $row["id"] . "'>Usuń</a></td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='4'>No motorcycles found.</td></tr>";
}

$conn->close();
?>
