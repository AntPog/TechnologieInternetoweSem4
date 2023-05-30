<!DOCTYPE html>
<html>
<head>
    <title>Logowanie</title>
</head>
<body>
    <h2>Logowanie</h2>
    <form action="check_login.php" method="post">
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="login" value="Zaloguj">
    </form>
    <a href="register.php" class="text-center">Nie masz konta? Zarejestruj się</a>
</body>
</html>