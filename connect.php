<?php
// Dane do połączenia z bazą danych
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "faggot3";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>