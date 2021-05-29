<?php

require "./database.php";

try {
    $sql = "SELECT * FROM Student WHERE name like :tableName";

    $tableName = $_POST['tableName'];

    $stmt = $conn->prepare($sql);
    $stmt->execute([ "tableName" => $tableName ]);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    var_dump($result);

    

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}