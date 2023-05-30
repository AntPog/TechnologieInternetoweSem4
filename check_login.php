<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Pobieranie danych użytkownika z bazy danych
    $selectQuery = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // Weryfikacja hasła
        if (password_verify($password, $storedPassword)) {
            echo "Logowanie zakończone sukcesem.";
        } else {
            echo "Nieprawidłowe hasło.";
        }
    } else {
        echo "Użytkownik o podanej nazwie nie istnieje.";
    }
}
?>