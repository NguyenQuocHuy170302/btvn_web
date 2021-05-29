<?php 

    require __DIR__."/../DBO.php";

    $username=$_REQUEST['account'];
    $name=$_REQUEST['fullname'];
    $password=$_REQUEST['password'];
    $confirm_password=$_REQUEST['conform-password'];

    if ($password != $confirm_password||$password=='') {
        header('location: http://localhost/btvn/code/9-1.php');
        die();
    }

   if(!(preg_match("/.@gmail.com/",$username)||preg_match("/0[0-9]{9}/",$username))) {
        header('location: http://localhost/btvn/code/9-1.php');
         die();
   }

   $email_data=getData("SELECT * FROM user1");
   foreach($email_data as $user) {
        $check = $user['username'];
        if($check== $username) {
            header('location: http://localhost/btvn/code/9-1.php');
            die();
        }
       }
   
    executeQuery("INSERT INTO user1 (name, username, password1) VALUES ('$name', '$username', '$password')");

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
<link rel="stylesheet" href="9-3.css">
<title>Title</title>
</head>
<body>

    <h1>Bạn đã đăng ký thành công </h1>

<div class="body">
    <p>You have register an account successfully </p>
    <p>Go back to <a href="9.php">Sign in </a> page</p>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>