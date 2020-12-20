<?php
session_start();

function loadClass($c)
{
    if (is_file("../controllers/$c.php")) {
        include "../controllers/$c.php";
    } else if (is_file("../models/$c.php")) {
        include "../models/$c.php";
    }
}

spl_autoload_register('loadClass');
$lienHe = new LienHe();

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
    <link rel="stylesheet" href="../lienhe.css">

    <!-- ICON -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <title>Nikun Car Passion</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#gioi_thieu">GIỚI THIỆU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#hang_xe">HÃNG XE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#bang_gia">BẢNG GIÁ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="v_sanpham.php">SẢN PHẨM</a>
                </li>
                <?php
                    if (isset($_SESSION['ten_kh'])) {
                        $tenKH=$_SESSION['ten_kh'];
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="v_logout.php">ĐĂNG XUẤT</a>
                        </li>
                        <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px; margin-left: 30px; margin-top: 5px; color: #FFC312; border: 1px solid #FFC312; padding: 10px 10px 10px 10px; border-radius: 10px;"><?php echo "HELLO ".$tenKH ?></a>
                </li>
                        <?php
                        } 
                        else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../login.php">ĐĂNG NHẬP</a>
                        </li>
                        <?php
                    }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form action="v_search.php" method="POST" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm xe..." aria-label="Search" name="text">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_search"><span
                            class="glyphicon glyphicon-search"></span></button>
                </form>
            </ul>
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- CONTENT-->
    <div class="container-fulid text-center">
        <img src="../images/lien_he/1.png" class="img-fluid" alt="Responsive image">
    </div>
    <!-- END CONTENT-->
    <!-- CHĂM SÓC KHÁCH HÀNG -->
    <div class="container-fluid">
        <div id="name">
            <h1><strong>THÔNG TIN LIÊN HỆ</strong></h1>
        </div>
        <?php
            function postIndex($index, $value=""){
                if (!isset($_POST[$index]))	
                    return $value;
                return trim($_POST[$index]);
            }
            if(isset($_POST['btn_nhap'])){
                $hoten=postIndex("ho_ten");
                $email=postIndex("email");
                $noidung=postIndex("noi_dung");
                
                $lienHe->themLienHe($hoten, $email, $noidung);
            }
        ?>
        <div class="row">
            <div class="col-sm-5">
                <p><strong>Thông tin liên lạc:</strong></p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Trụ sở
                    chính: 180 Đường Cao Lỗ, Phường 4, Quận 8, Thành phố Hồ Chí Minh, Việt Nam</p>
                <p><span class="glyphicon glyphicon-phone"></span> 09080888888</p>
                <p><span class="glyphicon glyphicon-envelope"></span> nikuncarpassion@gmail.com
                </p>
            </div>
            <div class="col-sm-7">
                <div class="container-fulid">
                    <form action="v_lienhe.php" method="POST" style="color: #FFC312;">
                        <div class="form-group">
                            <label>Họ và tên:</label>
                            <input type="text" class="form-control" placeholder="Nhập họ và tên" name="ho_ten">
                        </div>
                        <div class="form-group">
                            <label>Emails:</label>
                            <input type="email" class="form-control" placeholder="Nhập email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Nội dung:</label>
                            <textarea type="text" class="form-control" placeholder="Nhập thông tin nội dung cần liên hệ" name="noi_dung"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning" name="btn_nhap" style="color: black;"><span class="glyphicon glyphicon-envelope"></span> Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- KẾT THÚC-->

    <!-- FOOTER-->
    <footer class="container-fluid text-center" style="margin-top: 20px; background-color: rgba(0, 0, 0, 0.5); padding: 10px 0 5px 0; font-size: 16px">
        <p style="color: #FFC312; padding-top: 5px;">Bản quyền © 2020 Nikun Car Passion Viet Nam Company</p>
    </footer>
    <!-- END FOOTER-->
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