<?php
require 'config.php';

$search = $_GET['search'];

$sql = "SELECT * FROM motorcycles WHERE make LIKE '%$search%' OR model LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["id"] . "</td> ";
    echo "<td>" . $row["make"] . "</td> ";
    echo "<td>" . $row["model"] . "</td>";
    echo "<td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='4'>No motorcycles found.</td></tr>";
}

$conn->close();
?>
