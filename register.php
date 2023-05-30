<!DOCTYPE html>
<html>
<head>
    <title>Rejestracja</title>
</head>
<body>
    <h2>Rejestracja</h2>
    <form action="register.php" method="post">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="register" value="Zarejestruj">
    </form>
</body>
</html>
