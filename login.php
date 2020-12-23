<?php
 session_start();
 function loadClass($c)
 {
     if (is_file("controllers/$c.php")) {
         include "controllers/$c.php";
     } else if (is_file("models/$c.php")) {
         include "models/$c.php";
     }
 }
 
 spl_autoload_register('loadClass');
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="login.css">

    <!-- ICON -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>Nikun Car Passion</title>
</head>

<body>
    <?php 
     if (isset($_POST["btn_submit"])) {
        // lấy thông tin người dùng
        $userName = $_POST["username"];
        $passWord = md5($_POST["password"]);
        $loginAcc = new Users();
        $result = $loginAcc->checkAccont($userName, $passWord);
        if (empty($userName) || empty($passWord)) {
            $alert = "Username và Password không được rỗng !!!";
        } else {
            if ($result == false) {
                $alert = "Username và Password chưa đúng !!!";
            } else {
                $result2 = $loginAcc->getTenUser($userName, $passWord);
                $_SESSION['ten_kh'] = $result2;
                header('Location:views/v_lienhe.php');
            }
        }
    }     
    ?>

    <!-- LOGIN-->
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>ĐĂNG NHẬP</h3>
                </div>
                <div class="card-body">
                    <form action="login.php" method="POST">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" placeholder="Tài khoản: nikun2999">
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu: Giathanh2999">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="btn_submit" class="btn float-right login_btn">Xác nhận</button>
                        </div>
                        <div class="error">
                        <p>
                            <?php
                            if (isset($alert))
                                echo $alert;
                            ?>
                        </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END LOGIN-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
