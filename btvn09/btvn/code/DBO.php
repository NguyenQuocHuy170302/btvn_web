<?php


function getData($sql){
    require __DIR__."/database.php";
    try {

        // use exec() if no results are returned
        // $conn->exec($sql);
    
        // If there're result from SQL query, use fetchAll
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}


function getDataSecure($sql, $input){
    require __DIR__."/database.php";
    try {

        // use exec() if no results are returned
        // $conn->exec($sql);
    
        // If there're result from SQL query, use fetchAll
        $stmt = $conn->prepare($sql);
        $stmt->execute($input);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}

function executeQuery($sql){
    require __DIR__."/database.php";
    try {

        // use exec() if no results are returned
        $conn->exec($sql);
    
        // If there're result from SQL query, use fetchAll
        // $stmt = $conn->prepare($sql);
        // $stmt->execute($input);
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $stmt->closeCursor();
        $result=$conn;
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}