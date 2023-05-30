<?php
// Dane do połączenia z bazą danych
$servername = "localhost";
$username = "nazwa_uzytkownika";
$password = "haslo";
$dbname = "nazwa_bazy_danych";

// Tworzenie połączenia
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>