<!DOCTYPE html>
<html>
<head>
    <title>Rejestracja</title>
</head>
<body>
    <h2>Rejestracja</h2>
    <form action="reg_con.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Imię" name="firstName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nazwisko" name="lastName">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Hasło" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Potwierdź hasło" name="confirmPassword">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" name="birthday">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-calendar-alt"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        Kim jesteś?<br>
          <select>
            <option>Uczeń</option>
            <option>Nauczyciel</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <select class="form-control" name="city_id">
            <option>Poznań</option>
            <option>Szczecin</option>
            <option>Warszawa</option>
            <option>Łódź</option>
            <option>Wrocław</option>
            <option>Katowice</option>
          </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-city"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
              Zgadzam się na <a href="#">warunki regulaminu</a>
              </label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Zarejestruj się</button>
          </div>
        </div>
      </form>
      <a href="login.php" class="text-center">Zaloguj się</a>
</body>
</html>
