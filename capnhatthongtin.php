<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <style>
        table {
            border: 1px solid #000;
            width: 100%;
            min-height: 450px;
            padding: 20px 100px;
        }
        input {
            width: 100%;
            height: 40px;
        }
        table tr {
            margin-bottom: 20px;
        }
        table tr td:first-child {
            text-align: left;
        }
    </style>
</head>
<body>
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
    <h1>Cập nhật thông tin cá nhân</h1>
    <table>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" name="username" placeholder="Tài khoản"></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="text" name="password" placeholder="Mật khẩu"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="Email"></td>
        </tr>
        <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="address" placeholder="Địa chỉ"></td>
        </tr>
        <tr>
            <td>Số điện thoại</td>
            <td><input type="number" name="phone" placeholder="Số điện thoại"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" name="submit" style="float:right">Cập nhật</button>
            </td>
        </tr>
        <tr>
            <td style="padding-top:5px;">
                <a href="" style="color: red;float:right">Đổi mật khẩu</a>
            </td>
        </tr>
    </table>
</body>
</html>