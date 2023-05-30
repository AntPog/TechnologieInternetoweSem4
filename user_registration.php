<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sprawdzanie, czy użytkownik o podanej nazwie już istnieje
    $checkQuery = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        echo "Użytkownik o podanej nazwie już istnieje.";
    } else {
        // Dodawanie użytkownika do bazy danych
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Rejestracja zakończona sukcesem.";
        } else {
            echo "Błąd rejestracji: " . $conn->error;
        }
    }
}
?>