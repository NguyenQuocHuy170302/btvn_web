<?php

    require __DIR__."/../DBO.php";
    $username_delete=$_REQUEST['username-delete'];
    $id_delete=$_REQUEST['id-delete'];

    $checkUser = getData("SELECT id FROM user1 WHERE username='$username_delete' AND id='$id_delete'");
    $temp=getData("SELECT * FROM user1 WHERE username='$username_delete' AND id='$id_delete'");
    $name = $temp[0]['name'];
    if(count($checkUser)<1||$username_delete=="admin@gmail.com") {
        header('location: http://localhost/btvn/code/9-4.php');
        die();
       } 

       executeQuery("DELETE FROM user1 WHERE id='$id_delete' AND username='$username_delete'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="9-5.css">
<title>Title</title>
</head>
<body>

<h1>Học viên đã được xóa thành công</h1>

<div class="block">
     <?php 
       echo "<p> Tên học viên: $name</p>";
       echo "<p>Tài khoản Học Viên: $username_delete </p>";
       echo "<p>ID: $id_delete</p>"
        ?>
        <form action="9-4.php">
        <input type="submit" value="Quay lại" class="submit">
        </form>
       <?php
     ?>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>