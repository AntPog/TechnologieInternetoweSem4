<?php
if (isset($_POST['faggot3'])) {
    $LastName = $_POST['Email'];
    $password = $_POST['password'];

    // Sprawdzanie, czy użytkownik o podanej nazwie już istnieje
    $checkQuery = "SELECT * FROM students WHERE Email='$LastName'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        echo "Użytkownik o podanej nazwie już istnieje.";
    } else {
        // Dodawanie użytkownika do bazy danych
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $insertQuery = "INSERT INTO students (Email, password) VALUES ('$LastName', '$hashedPassword')";

        if ($conn->query($insertQuery) === TRUE) {
            echo "Rejestracja zakończona sukcesem.";
        } else {
            echo "Błąd rejestracji: " . $conn->error;
        }
    }
}
?>