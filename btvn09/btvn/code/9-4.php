<?php 
    require __DIR__."/../DBO.php";
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
<link rel="stylesheet" href="9-4.css">
</head>
<body>
   <div class="logout">
       <a href="http://localhost/btvn/code/9.php">Log out</a>
   </div>
    
    <div class="admin">
        <div class="delete">
            <div class="content">
                <h3>Xóa Học viên</h3>
            </div>
            <div class="block-delete">
                <form action="9-5.php" method="post">
                <input type="text" class="username-delete" name="username-delete" id="username-delete" placeholder=" tài khoản học viên">
                <p></p>
                <input type="text" class="id-delete" name="id-delete" id="id-delete" placeholder=" ID Học viên">
                <p></p>
                <input type="submit" value="Xóa Học viên" class="submit-delete" name="submit-delete" id="submit-delete">
                </form>
            </div>
        </div>
    
        <div class="fix">
            <div class="content">
                <h3>Sửa thông tin Học Viên</h3>
            </div>
            <div class="block-fix">
                <form action="9-51.php" method="post">
                <input type="text" class="username-fix" id="username-fix" name="username-fix" placeholder=" tài khoản học viên">
                <p></p>
                <input type="text" class="id-fix" id="id-fix" name="id-fix" placeholder=" ID Học viên">
                <p></p>
                <input type="text" class="newname" id="newname" name="newname" placeholder=" Tên mới">
                <p></p>
                <input type="text" class="newpassword" id="newpassword" name="newpassword" placeholder=" Mật khẩu mới">
                <p></p>
                <input type="submit" class="submit-fix" value=" Thay đổi thông tin">
                </form>
            </div>
        </div>
    
    </div>

    <div class="block">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php 
                    foreach($listUser as $user) {
                        $id = $user['id'];
                        $username = $user['username'];
                        $name = $user['name'];
                        $password=$user['password1'];
                        echo "<tr>";
                        echo "<th scope='row'>$id</th>";
                        echo "<td>$name</td>";
                        echo "<td>$username</td>";
                        echo "<td>$password</td>";
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