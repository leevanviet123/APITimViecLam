<!DOCTYPE html>
<?php
require_once './connection.php';
$name_qt = $password = null;
if(isset($_POST['txtname'])){
    
    $name_qt = $_POST["txtname"];
    $password = $_POST["txtpassword"];
}

//sử lí đăng nhập
if ($name_qt && $password) {
    
    require_once'./connect.php';
    $sql = "SELECT * FROM admin WHERE username = '$name_qt' AND password = '$password' ";
    $result = mysqli_query($connect,$sql);
    if (mysqli_num_rows($result)==1){  
        echo "đăng nhập thành công";
        exit();
    } else {
        echo "Sai tài khoản hoặc mật khẩu ";
    }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        
    </head>
    <body>    

        <form id="formlogin" action="index.php" method="post">
        	<div id="login">
                  Đăng nhập
                  <br>
                  <br>
                   Tài khoản: <input placeholder="Username" type="text" name="txtname" required="">
                    <br>
                    <br>
                    Mật khẩu: <input placeholder="Password" type="password" name="txtpassword" required="">
                    <br>
                    <br>
                    <div>
                    <input type="submit" value="Login" >
                    </div>
                    <hr>
                    <input type="checkbox" name="cbremember">Nhớ mật khẩu | <a href="">Quên mật khẩu?</a>
              
            </div>
        </form>
    </body>
</html>