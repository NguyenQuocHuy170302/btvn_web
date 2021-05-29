<?php 
    require __DIR__."/../DBO.php";
   $username=$_REQUEST['account'];
   $password=$_REQUEST['password'];

    $checkAddmin=getData("SELECT * FROM user1 WHERE username='admin@gmail.com'");
   if($username=='admin@gmail.com'&&$password===$checkAddmin[0]['password1']) {
    header('location: http://localhost/btvn/code/9-4.php');
    die();
   }


   $loginUser = getData("SELECT * FROM user1 WHERE username='$username' AND password1='$password'");

   if(count($loginUser)<1) {
    header('location: http://localhost/btvn/code/9.php');
    die();
   } 

  

   $listUser = getData("SELECT * FROM user1");

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
<title>Title</title>
<link rel="stylesheet" href="9-2.css">
</head>
<body>

    <div class="instruction">
    <img src="https://codestar.vn/wp-content/uploads/2020/11/Logo-1.png" alt="">    
        <h2>CodeStar hướng đến việc mang lại những trải nghiệm mới cho Học viên</h2>
    </div>

   <div class="logout">
       <a href="http://localhost/btvn/code/9.php">Log out</a>
   </div>
    
    <div class="block">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    foreach($listUser as $user) {
                        $id = $user['id'];
                        $username = $user['username'];
                        $name = $user['name'];

                        echo "<tr>";
                        echo "<th scope='row'>$id</th>";
                        echo "<td>$name</td>";
                        echo "<td>$username</td>";
                        echo "</tr>";
                    }
                    
                ?>
                <hr>
        </tbody>
        </table>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>