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
    <link rel="stylesheet" href="../sanpham.css">

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
                    <a class="nav-link" href="v_lienhe.php">LIÊN HỆ</a>
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
        <div id="name" style="padding: 20px 0 10px 0;">
            <h1><strong>SẢN PHẨM</strong></h1>
        </div>
        <div class="container text-center">
            <div class="row">
                <?php        
                $xe = new xe();
                $arrayxe=$xe->danhSachXe();           
                $anh = new image();
                foreach ($arrayxe as $item) {
                    $arrAnh = $anh->dsTenAnhTheoIdXe($item['id_xe']);
                    foreach ($arrAnh as $value) {
                        foreach ($value as $value2) {
                            $tenAnh = $value2;
                        }
                    }
            ?>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img <?php echo 'src="../images/hangxe/' . $item['id_hang'] . '/' . $tenAnh . '"' ?>
                            style="width:100%">
                        <div class="caption">
                            <p><?php echo $item['ten_xe']?></p>
                            <p><?php echo '$' . number_format($item['gia']);?></p>
                            <a <?php echo 'href="v_chitietxe.php?idxe='.$item['id_xe'].'"'?> class="btn btn-primary">Xem
                                chi tiết</a>
                        </div>

                    </div>
                </div>
                <?php
                }
            ?>
            </div>
        </div>
    </div>
    <!-- END CONTENT-->

    <!-- FOOTER-->
    <footer class="container-fluid text-center" style="margin-top: 20px; background-color: rgba(0, 0, 0, 0.5); padding: 10px 0 5px 0; font-size: 16px">
        <a href="#" style="color: #FFC312;">
            <span class="glyphicon glyphicon-home">
        </a>
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