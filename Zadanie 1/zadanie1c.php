<!DOCTYPE html>
<html>
<head>
    <style>
        form { margin-bottom: 20px; padding: 15px; background-color: #f9f9f9; border: 1px solid #ddd; }
    </style>
</head>
<body>

    <form method="post" action="">
        <label for="user_id">Wprowadź ID użytkownika:</label><br>
        <input type="text" id="user_id" name="user_id" required>
        <button type="submit" name="submit">Wyświetl</button>
    </form>
    
<?php
$connection = mysqli_connect("localhost", "root", "password", "users_db");

// Obsługa formularza
if (isset($_POST['submit'])) {
    $userId = isset($_POST['user_id']) ? $_POST['user_id'] : "";
    
    $query = "SELECT * FROM users WHERE id = ?";
    // Bezpieczne zapytanie z użyciem prepared statements
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    
    // Wyświetlanie wyników
    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Imię</th><th>Email</th></tr>";
        // Pętla w tym przypadku jest niepotrzebna bo zakładam, że będziemy wyszukiwać po unikalnym ID użytkownika ale zostawiam ją, żeby nie modyfikować zbytnio kodu, który otrzymałem do poprawienia
        // Może się przydać jeżeli zdecydujemy się zmodyfikować kod na wyszukiwanie po nieunikalnym parametrze np. imieniu
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Nie znaleziono użytkownika o podanym ID.</p>";
    }
}

mysqli_close($connection);
?>
</body>
</html>
