<?php

    require __DIR__."/../DBO.php";
    $username_fix=$_REQUEST['username-fix'];
    $id_fix=$_REQUEST['id-fix'];
    $newname=$_REQUEST['newname'];
    $newpassword=$_REQUEST['newpassword'];
    
    $checkUser = getData("SELECT id FROM user1 WHERE username='$username_fix' AND id='$id_fix'");
    $temp=getData("SELECT * FROM user1 WHERE username='$username_fix' AND id='$id_fix'");

    $oldpassword=$temp[0]['password1'];
    $oldname=$temp[0]['name'];


    if(count($checkUser)<1||$username_fix=="admin@gmail.com") {
        header('location: http://localhost/btvn/code/9-4.php');
        die();
       } 

       if($newname=='' && $newpassword=='') {
        header('location: http://localhost/btvn/code/9-4.php');
        die();
       }
    if($newname=="") {
        executeQuery("UPDATE user1 SET password1='$newpassword' WHERE id='$id_fix' AND username='$username_fix'");
    }

    if($newpassword=='') {
        executeQuery("UPDATE user1 SET name='$newname' WHERE id='$id_fix' AND username='$username_fix'");
    }

    if($newname!=''&&$newpassword!='') {
        executeQuery("UPDATE user1 SET password1='$newpassword' WHERE id='$id_fix' AND username='$username_fix'");
        executeQuery("UPDATE user1 SET name='$newname' WHERE id='$id_fix' AND username='$username_fix'");
    }

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


<h1>Bạn đã thay đổi thông tin Học viên thành công</h1>
<div class="block">
    <?php 
    
    echo "<p> Tên học viên: $oldname </p>";
    echo "<p>Tài khoản Học Viên: $username_fix</p>";
    echo "<p>ID: $id_fix</p>";

    if(!($newpassword==''||$newpassword==$oldpassword)) {

        echo "<p> Mật khẩu mới: $newpassword </p>";
    }
    
    if(!($newname==''||$newname==$oldname)) {
        echo "<p>Tên mới: $newname </p>";
    }

    ?>
    <form action="9-4.php">
    <input type="submit" class="submit" value="Quay lại">
    </form>
    <?php
    ?>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>