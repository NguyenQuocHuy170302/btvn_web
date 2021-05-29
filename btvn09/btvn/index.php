<?php

require "./database.php";


try {
    $sql = "SELECT * FROM Student";

    // use exec() if no results are returned
    // $conn->exec($sql);

    // If there're result from SQL query, use fetchAll
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();

    var_dump($result);
    echo "Database created successfully";

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

