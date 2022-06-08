<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #FFE5DE;
        }
        .modal_login {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: url("https://mcdelivery.vn/vn//static/1648108708506/assets/84/banners/landing_63930_thursday_WOS-min.jpg?thursday_WOS") center center no-repeat;
        }
        .main {
            position: absolute;
            right: 200px;
            top: 125px;
            width: 350px;
            background-color: rgba(255,255,255,.7);
            padding: 20px;
        }
        .main h1{
            color: #dd4715;
            text-align: center;
        }
        .main h2 {
            text-align: center;
            color: #3d3d3d;
            font-weight: bold;
            position: relative;
            margin-bottom: 20px;
        }

        .main input {
            width: 100%;
            margin-top: 10px;
            padding: 8px 15px;
            font-size: 16px;
        }
        .main table {
            width: 100%;
        }
        .main button,
        .main .button {
            display: block;
            width: 100%;
            background-color: #FF6633;
            color: #fff;
            border: none;
            outline: none;
            margin-top: 15px;
            height: 45px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
        }
        .main .button {
            text-decoration: none;
            text-align: center;
            line-height: 45px;
            margin-top: 20px;
        }
        .main button:hover,
        .main .button:hover {
            background-color: #dd4715;
        }
        form {
            border-top: 1px solid #dd4715;
            border-bottom: 1px solid #dd4715;
            margin: 10px 0 10px;
            padding: 20px 0;
        }
    </style>

</head>
<body>
    <div class="modal_login">
        <div class="main">
            <h1>Bắt đầu đặt hàng</h1>
            <h2>Đăng nhập</h2>
            <p>
                <?php
                    if( isset($_SESSION["thongbao"]) ) {
                        echo $_SESSION["thongbao"];
                        session_unset();
                    }
                ?>
            </p>
            <form action="login_submit.php" method="POST">
                <table>
                    <tr>
                        <!-- <td>Username</td> -->
                        <td><input type="text" name="username" placeholder="Tài khoản"></td>
                    </tr>
                    <tr>
                        <!-- <td>Password</td> -->
                        <td><input type="text" name="password" placeholder="Mật khẩu"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="submit">Đăng nhập</button>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top:5px;text-align: right">
                            <a href="" style="color: red;">Quên mật khẩu</a>
                        </td>
                    </tr>
                </table>
            </form>
            <a href="register.php" class="button">Đăng ký</a>
        </div>
    </div>
</body>
</html>