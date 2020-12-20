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
    <link rel="stylesheet" href="../xemchitiet.css">

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
                    <a class="nav-link" href="../index.PHP">TRANG CHỦ</a>
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
    </div>
    <div class="container-fluid">
        <div id="name">
            <h1><strong>THÔNG TIN SẢN PHẨM</strong></h1>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    if (isset($_GET['idxe']))
                        $idxe = $_GET['idxe'];
                    $xe = new xe();
                    $anh = new image();
                    $arrayxe = $xe->xeTheoId($idxe);
                    foreach ($arrayxe as $item) {
                        $gia = $item['gia'];
                        $tenxe = $item['ten_xe'];
                        $namsx = $item['nam_sx'];
                        $idhang = $item['id_hang'];
                    }


                    $arrAnh = $anh->dsTenAnhTheoIdXe($item['id_xe']);
                    foreach ($arrAnh as $value) {
                        foreach ($value as $value2) {
                            $tenAnh = $value2;
                        }
                    }
                    ?>
                    <div class="thumbnail">
                        <?php echo '<img src="../images/hangxe/' . $idhang . '/' . $tenAnh . '">'  ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="thumbnail">
                        <div class="caption">
                            <h2><?php echo $tenxe; ?></h2>
                            <h3><?php echo '$' . number_format($gia); ?><h3>
                                    <h3>Năm sản xuất: <?php echo $namsx; ?></h3>
                        </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="thumbnail">
                        <table class="table table-bordered">
                            <?php
                            include('../controllers/thongso.php');
                            ?>
                            <thead>
                                <tr>
                                    <th colspan="2" scope="col" style="text-align: center; font-size: 25px">THÔNG SỐ KỸ THUẬT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $thongso=new ThongSo();
                                $arrThongSo=$thongso->dsThongSoTheoIdXe($idxe);
                                foreach($arrThongSo as $itemts)
                                {
                                ?>
                                <tr>
                                    <th scope="row">Tiêu thụ nhiên liệu:</th>
                                    <td><?php echo NL2br($itemts['ht_nhien_lieu']); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Hệ thống treo:</th>
                                    <td><?php echo $itemts['ht_treo']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Kích thước:</th>
                                    <td><?php echo $itemts['kich_thuoc']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Momen xoắn cực đại:</th>
                                    <td><?php echo $itemts['momen_xoan_max']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Công suất cực đại:</th>
                                    <td><?php echo $itemts['cong_suat_max']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Dung tích xylanh:</th>
                                    <td><?php echo $itemts['dung_tich_xi_lanh'].' cm3'; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Kiểu động cơ:</th>
                                    <td><?php echo $itemts['kieu_dong_co']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Số chổ ngồi:</th>
                                    <td><?php echo $itemts['so_cho_ngoi']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Chất liệu ghế:</th>
                                    <td><?php echo $itemts['chat_lieu_ghe']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Hộp số:</th>
                                    <td><?php echo $itemts['hop_so']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Công nghệ an toàn:</th>
                                    <td><?php echo NL2br($itemts['cong_nghe_an_toan']); ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Tốc độ tối đa đạt được:</th>
                                    <td><?php echo $itemts['toc_do_toi_da'].' Km/h'; ?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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