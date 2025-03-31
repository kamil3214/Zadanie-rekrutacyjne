<?php
$connection = mysqli_connect("localhost", "root", "", "users_db");

$query = "SELECT * FROM users";
// Przygotowane zapytanie (prepared statement) dla zabezpieczenia przed SQL Injection
$stmt = mysqli_prepare($connection, $query);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

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
mysqli_stmt_close($stmt);
mysqli_close($connection);
?>