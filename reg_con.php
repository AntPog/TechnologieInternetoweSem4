<?php
            require_once "./connect.php";
            $sql = "SELECT * FROM cities";
            $result = $conn -> query($sql);
            while($city = $result -> fetch_assoc()){
              echo "<option>$city[city]</option>";
            }
          ?>
<?php

require_once "./connect.php";

$stmt = $conn->prepare(query: "INSERT INTO `students` (`FirstName`, `LastName`, `Gender`, `Address`, `Password`, `Email`) VALUES (?, ?, ?, ?, ?, ?, ?);");

if($_POST["email"]);