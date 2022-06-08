<?php
    session_start();
    if( !isset($_SESSION["user"]) ) {
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/hinh.png" type="image/x-icon">
    <title>| Group1-TH2426</title>
    <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">

</head>
<body>
    <?php
        include 'config.php';
        $products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY `id` ASC");
    ?>
    <?
        $search = isset($_GET['name']) ? $_GET['name'] : "";
        if($search) {
            $where = "WHERE `name` LIKE '%".$search."%'"
        }
    ?>
    <div id="banner">
        <img src="./assets/img/banner.png" alt="banner1" width="1000" height="260" id="slider" onclick="changeImg">
    </div>

    <div class="menu text-center">
        <div class="wrapper">
            <div class="menu-bar">
                <i class="wrapper-icon fas fa-bars"></i>

            </div>
            <ul class="wrapper-lists">
            <li><a href="index.php">TRANG CHỦ </a></li>
            <li class="lists-group">
                <a href="#">COMBO NHÓM</a>
                <ul class="sub-list-group">
                    <li>Combo nhóm A</li>
                    <li>Combo nhóm B</li>
                    <li>Combo nhóm C</li>
                </ul>
            </li>

            <li><a href="">MENU ƯU ĐÃI</a></li>
            <li><a href="">MÓN LẺ</a></li>

            <li><a href="">GIAO HÀNG </a></li>
            <li class="wrapper-list">
                <a href="#">
                    GIỎ HÀNG
                    <i class="fas fa-cart-plus"></i>
                </a>

                <div class="menu-cart">
                    <img src="https://foodhub.vn/assets/images/no-cart.png" alt="" class="items-no-car">
                    <p>Chưa có sản phẩm</p>
                </div>
            </li>
        </ul>

    </div>

   <div id="content">
           <div id="left">
            <img src="./assets/img/hinh.png" alt="hinhkfc">
        <h3 style="font-size: 28px;">Combo 1 Người</h3>
        <div class="box">
            <!-- <form class="sbox" action="/search" method="GET">
                <input class="stext" type="text" name="name" placeholder="Tìm kiếm bài viết...">
                <button class="sbutton" type="submit" href="">
                    <i class="fa fa-search"></i>
                </button>
            </form> -->
            <?php include "search.php" ?>
        </div>
        <div id="menu1">
            <ul>
               <h2 style="margin-top: 20px;">Trang chủ</h2>
                <hr>
                <li class="menu-seclect"><a href="">COMBO 1 NGƯỜI</a>
                    <hr>
                    <ul class="sub-menu1">
                        <li class="sub-menu-li">
                            <a href="">COMBO 2 NGƯỜI</a>
                            <ul class="sub-2">
                                <li>Combo nhóm A</li>
                                <li>Combo nhóm B</li>
                            </ul>

                        </li><hr>
                        <li class="sub-menu-li">
                            <a href="">COMBO 3 NGƯỜI</a>
                            <ul class="sub-2">
                                <li>Combo nhóm C</li>
                                <li>Combo nhóm D</li>
                                <li>Combo nhóm E</li>
                            </ul>
                        </li><hr>
                        <li class="sub-menu-li">
                            <a href="">COMBO GIA ĐÌNH</a>
                            <ul class="sub-2">
                                <li>Combo gia đình A</li>
                                <li>Combo gia đình B</li>
                            </ul>
                        </li><hr>
                    </ul>
                </li>
                <li><a href="">COMBO LỚN</a></li><hr>
                <li><a href="">SIÊU COMBO</a></li><hr>
                <li><a href="">MÓN LẺ</a></li><hr>
            </ul>
        </div>
    </div>
</div>
<div id="right">
    <div style="overflow: hidden;">
        <div class="form" style="float: right;">
            <a href="capnhatthongtin.php" id="right-register">
                Xin chào
                <span style="color: #dd4715"><?php echo $_SESSION['user']; ?></span>
            </a>
            <a href="logout.php" id="right-login" style="margin: 10px">Đăng xuất</a>
        </div>
    <div class="right-heading" style="background-color:#FF6633;height: 68px;">
        <h3 id="right-heading">Combo 1 Người</h3>
        <!-- Menu -->
        <?php include "sanpham.php" ?>
    </div>
</div>

        <!-- <ul class="pagination">
            <li class="pagination-item">
                <i class="fas fa-angle-left"></i>
            </li>
            <li class="pagination-item pagination-here">1</li>
            <li class="pagination-item">2</li>
            <li class="pagination-item">3</li>
            <li class="pagination-item">4</li>
            <li class="pagination-item">...</li>
            <li class="pagination-item">10</li>

            <li class="pagination-item">
                <i class="fas fa-angle-right"></i>
            </li>
        </ul> -->
        <div class="banner-ft" style="margin-top: 70px;padding-bottom: 50px;display: flex;width:1000px;justify-content: space-between;border-bottom: 3px solid #ccc;">
            <img src="https://kfcvietnam.com.vn/uploads/banner/55e251880deec0ecc66ec6ad17e10832.png" alt="" style="width: 497px;height: 172px;">
            <img src="https://kfcvietnam.com.vn/uploads/banner/71705e87d5d8af3ffcd70fafab3548d3.png" alt="" style="width: 497px;height: 172px;">
        </div>
            <div id="footer">
               <p>
                   <b>NHÓM 1 - TH24.26 - HUBT
                   </b> <br>

                    Số 292 Bà Triệu, P. Lê Đại Hành, Q. Hai Bà Trưng, TP. Hà Nội.<br>

                    Điện thoại: (028) 38489828 <br>

                    Email: lienhe@kfcvietnam.com.vn <br>

                    Mã số thuế: 0100773885 <br>

                    Ngày cấp: 29/10/1998 - Nơi cấp: Cục Thuế Thành Phố Hà Nội <br>
                </p>
                <img src="https://kfcvietnam.com.vn/templates/images/logo_bocongthuong.png" alt=""> <br>
            </div>

            </div>

   </div>

   <!-- fixed -->
   <div class="fixed">
       GroupOne_TH24.26
   </div>
    <!-- form acc -->

    <!-- Form register -->

    <!-- Form Login -->

</body>
</html>