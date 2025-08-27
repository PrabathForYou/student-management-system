<?php
    require_once "Database.php";
    $dbo = new Database();

    $cmd = "SELECT title FROM programme_details";
    $statement = $dbo->conn->prepare($cmd);
    $statement->execute();

//    assign values to an associate array
    $returnValue = $statement->fetchAll(pdo::FETCH_ASSOC);
    var_dump($returnValue);

//    $values;

//foreach ($returnValue as $values) {
//    foreach ($values as $key => $value) {
//        echo "$key: $value\n <br>";
//    }
//    echo "\n"; // Optional: add a newline for better readability between records
//}

?>