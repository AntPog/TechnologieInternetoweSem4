
<?php

require_once "./connect.php";

$stmt = $conn->prepare(query: "INSERT INTO `students` (`FirstName`, `LastName`, `Gender`, `Address`, `Password`, `Email`) VALUES (?, ?, ?, ?, ?, ?);");
