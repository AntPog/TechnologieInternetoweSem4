<?php
            require_once "../../scripts/connect.php";
            $sql = "SELECT * FROM cities";
            $result = $conn -> query($sql);
            while($city = $result -> fetch_assoc()){
              echo "<option>$city[city]</option>";
            }
          ?>

<?php

require_once "./connect.php";

$stmt = $conn->prepare(query: "INSERT INTO `users` (`email`, `city_id`, `firstName`, `lastName`, `password`, `birthday`, `created_at`) VALUES (?, ?, ?, ?, ?, ?, current_timestamp());");

if($_POST["email"])