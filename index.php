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
    <link rel="stylesheet" href="styles.css">

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
                    <a class="nav-link" href="#gioi_thieu">GIỚI THIỆU</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/v_sanpham.php">SẢN PHẨM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#hang_xe">HÃNG XE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#bang_gia">BẢNG GIÁ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="views/v_lienhe.php">LIÊN HỆ</a>
                </li>
                <?php
                    if (isset($_SESSION['ten_kh'])) {
                        $tenKH=$_SESSION['ten_kh'];
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="views/v_logout.php">ĐĂNG XUẤT</a>
                        </li>
                        <li class="nav-item">
                    <a class="nav-link" style="font-size: 18px; margin-left: 30px; margin-top: 5px; color: #FFC312; border: 1px solid #FFC312; padding: 10px 10px 10px 10px; border-radius: 10px;"><?php echo "HELLO ".$tenKH ?></a>
                </li>
                        <?php
                        } 
                        else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">ĐĂNG NHẬP</a>
                        </li>
                        <?php
                    }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form action="views/v_search.php" method="POST"  class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm xe..." aria-label="Search" name="text">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="btn_search"><span
                            class="glyphicon glyphicon-search"></span></button>
                </form>
            </ul>
        </div>
    </nav>
    <script>
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "30px 10px";
        } else {
            document.getElementById("navbar").style.padding = "80px 10px";
        }
        }      
    </script>
    <!-- END NAVBAR -->
    <!-- CAROUSEL -->
    <div class="carousel" style="margin-top: -20px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/huracan/1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/huracan/13.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/huracan/4.jpg" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
    <!-- END CAROUSEL -->

    <!-- CONTENT-->
    <div id="gioi_thieu" class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <div id="name">
                    <h1><strong>Nikun Car Passion</strong></h1>
                    <h4>Vượt qua mọi thách thức với phong cánh riêng của bạn</h4>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <a class="btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Giới thiệu
                                </a>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    Được thành lập vào năm 2020, công ty Car Passion Việt Nam với ngành sản phẩm chính
                                    là bán xe ô tô. Sau hơn vài tháng có mặt tại Việt Nam, Car Passion Việt Nam đã không
                                    ngừng phát triển và trở thành một trong những công
                                    ty dẫn đầu trong lĩnh vực bán ô tô uy tín tại thị trường Việt Nam. Với hơn 500
                                    công nhân viên,10 chi nhánh khắp cả nước. Car Passion Việt Nam tự hào mang đến cho
                                    khách hàng những sản phẩm chất lượng cao, dịch vụ
                                    tận tâm và những đóng góp vì một xã hội giao thông lành mạnh. Với khẩu hiệu
                                    “Vượt qua mọi thách thức với phong cánh riêng của mình”, Car Passion mong muốn được
                                    chia
                                    sẻ và cùng mọi người thực hiện ước mơ thông qua việc
                                    tạo thêm ra nhiều niềm vui mới cho người dân và xã hội. Đến với Car Passion bạn sẽ
                                    có cơ hội sở hữu những mẫu siêu xe hàng đầu thế giớ cùng với những dịch vụ chăm
                                    sóc khách hàng tốt nhất.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <a class="btn-block text-left collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Nhiệm vụ và tầm nhìn
                                </a>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                <h4><strong>Nhiệm vụ:</strong> Mục tiêu của Car Passion được đúc kết trong câu 'Vượt qua
                                    mọi thách thức với phong cách riêng của mình', có thể hiểu là động lực, là ý
                                    nghĩa của mọi việc chúng tôi thực hiện. 'Vượt qua mọi
                                    thách thức với phong cách riêng của mình' là lời thúc đẩy phải đạt được nhiều
                                    hơn, tiến xa hơn những mục tiêu ngay trước mắt. Tinh thần quả cảm đó là sức sống
                                    của thương hiệu, hoặc theo cách gọi của chúng tôi
                                    - ADN của thương hiệu.<br> <br>
                                    <strong>Tầm nhìn:</strong>Giữa những biến đổi, tinh thần ấy giúp định hướng cho
                                    chiến lược kinh doanh hòa hợp và bền vững, và cho mọi quyết định. Tinh thần đó
                                    được thể hiện qua Tầm nhìn 2039 – con đường đến
                                    với di chuyển bền vững, tìm các nguồn năng lượng xanh, and duy trì quan hệ đối
                                    tác chiến lược cho các hãng xe lớn của thế giới.
                                </h4>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="hang_xe" class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <div id="name">
                    <h1><strong>HÃNG XE</strong></h1>
                </div>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/hang xe/lamborghini.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=lam">LAMBORGHINI</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/bugatti.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=bug">BUGATTI</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/mclaren.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=mcl">MCLAREN</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/astmartin.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=ast">AST MARTIN</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/Bentley.png" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=ben">BENTLEY</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/f12tdf.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=fer">FERRARI</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/koenigsegg.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=koe">KOENIGSEGG</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/land-rover.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=lan">LAND-ROVER</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/maybach.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=may">MAYBACH</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/pagani.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=pag">PAGANI</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/porsche.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=por">PORSCHE</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="images/hang xe/rolls-royce.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="views/v_showxe.php?id=rol">ROLL-ROYCE</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="bang_gia" class="container">
        <div id="name">
            <h1><strong>BẢNG GIÁ</strong></h1>
        </div>
        <div class="w3-border">
            <div class="w3-bar w3-theme">
                <a class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Lamborghini')">Lamborghini</a>
                <a class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Ferrari')">Ferrari</a>
                <a class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Koenigsegg')">Koenigsegg</a>
                <a  class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Maybach')">Maybach</a>
                <a class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Bentley')">Bentley</a>
                <a class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Aston Martin')">Aston Martin</a>
                <a  class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Bugatti')">Bugatti</a>
                <a class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Land-Rover')">Land-Rover</a>
                <a class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Mclaren')">Mclaren</a>
                <a  class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Pagani')">Pagani</a>
                <a  class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Porsche')">Porsche</a>
                <a  class="w3-bar-item w3-button testbtn w3-padding-16"
                    onclick="openCity(event,'Rolls-Royce')">Rolls-Royce</a>
            </div>

            <div id="Lamborghini" class="w3-container city w3-animate-opacity">
                <h2>Lamborghini</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                include('controllers/xe.php');
                                $xe = new xe();

                                $id_xe = 'lam';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="Ferrari" class="w3-container city w3-animate-opacity">
                <h2>Ferrari</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'fer';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div id="Koenigsegg" class="w3-container city w3-animate-opacity">
                <h2>Koenigsegg</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'koe';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Maybach" class="w3-container city w3-animate-opacity">
                <h2>Maybach</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'may';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Bentley" class="w3-container city w3-animate-opacity">
                <h2>Bentley</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'ben';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Aston Martin" class="w3-container city w3-animate-opacity">
                <h2>Aston Martin</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'ast';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Bugatti" class="w3-container city w3-animate-opacity">
                <h2>Bugatti</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'bug';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>             
            </div>
            <div id="Land-Rover" class="w3-container city w3-animate-opacity">
                <h2>Land-Rover</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'lan';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Mclaren" class="w3-container city w3-animate-opacity">
                <h2>Mclaren</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'mcl';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="Pagani" class="w3-container city w3-animate-opacity">
                <h2>Pagani</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'pag';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>               
            </div>
            <div id="Porsche" class="w3-container city w3-animate-opacity">
                <h2>Porsche</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'por';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>               
            </div>
            <div id="Rolls-Royce" class="w3-container city w3-animate-opacity">
                <h2>Rolls-Royce</h2>
                <div class="container">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">STT</th>
                                    <th scope="col">Tên xe</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Năm sản xuất</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $xe = new xe();
                                $id_xe = 'rol';
                                $i = 1;
                                foreach ($xe->dsXeTheoId($id_xe) as $item) {
                                ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i ?>
                                        </th>
                                        <td>
                                            <?php echo $item['ten_xe']; ?>
                                        </td>
                                        <td>
                                            <?php echo '$' . number_format($item['gia']); ?>
                                        </td>
                                        <td>
                                            <?php echo $item['nam_sx']; ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openCity(evt, cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        var activebtn = document.getElementsByClassName("testbtn");
        for (i = 0; i < x.length; i++) {
            activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " w3-dark-grey";
        }

        var mybtn = document.getElementsByClassName("testbtn")[0];
        mybtn.click();
    </script>
    <!--END CONTENT-->

    <!-- FOOTER-->
    <footer class="container-fluid text-center" style="margin-top: 20px; background-color: rgba(0, 0, 0, 0.5); padding: 10px 0 5px 0; font-size: 16px">
        <a href="#">
            <span class="glyphicon glyphicon-home" style="color: #FFC312;">
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
