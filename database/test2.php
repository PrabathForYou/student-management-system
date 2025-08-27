<?php
    require_once "Database.php";

    $dbo = new Database();

    $title = 'Test department';
    $code = 'Test Code';

    $cmd = "INSERT INTO programme_details (title,code) 
            VALUES(:title,:code)";

    $statement = $dbo->conn->prepare($cmd);

    try {
        $statement->execute([":title" => $title , ":code" => $code]);
    }catch (Exception $e){
        echo "Insert Failed" . $e->getMessage();
    }

    $rv = $statement->fetchAll(pdo::FETCH_ASSOC);

//    var_dump($rv);
?>