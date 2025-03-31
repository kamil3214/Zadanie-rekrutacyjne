<?php
$connection = mysqli_connect("localhost", "root", "", "users_db");

$query = "SELECT * FROM users";
// Poprawienie błędu
$result = mysqli_query($connection, $query);

echo "<table border='1'>";
echo "<tr><th>ID</th><th>Imię</th><th>Email</th></tr>";

// Dodanie zabezpieczenia przed XSS wykorzystując htmlspecialchars()
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "</tr>";
}

echo "</table>";
mysqli_close($connection);
?>