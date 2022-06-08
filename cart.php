<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dat hang</title>
<style>
    body{
       font-family: arial;
   }
   *{
       box-sizing: border-box;
   }
   .content{
       width: 1200px;
       margin: 0 auto;
       border: 1px solid #000;
       padding: 15px;
   }
   h1{
       text-align: center;
   }
   .product-items{
       border: 1px solid #000;
       padding: 30px;
   }
   .product-item{
       float: left;
       width: 23%;
       margin: 1%;
       padding: 10px;
       box-sizing: border-box;
       border: 1px solid #000;
       line-height: 26px;
   }
   .product-item label{
       font-weight: bold;
   }
   .product-item p{
       margin: 0;
       line-height: 26px;
       max-height: 52px;
       overflow: hidden;
   }
   .product-price{
       color: red;
       font-weight: bold;
   }
   .product-img{
       padding: 5px;
       border: 1px solid #000;
       margin-bottom: 5px;
   }
   .product-item img{
       max-width: 100%;
   }
   .product-item ul{
       margin: 0;
       padding: 0;
       border-right: 1px solid #000;
   }
   .product-item ul li{
       float: left;
       width: 33.3333%;
       list-style: none;
       text-align: center;
       border: 1px solid #000;
       border-right: 0;
       box-sizing: border-box;
   }
   .clear-both{
       clear: both;
   }
   a{
       text-decoration: none;
   }
   .buy-button{
       text-align: right;
       margin-top: 10px;
   }
   .buy-button a{
       background: #444;
       padding: 5px;
       color: #fff;
   }
   #pagination{
       text-align: right;
       margin-top: 15px;
    }
   .page-item{
       border: 1px solid #000;
       padding: 5px 9px;
       color: #000;
   }
   .current-page{
       background: #000;
       color: #FFF;
   }
   #product-detail{
       border-top: 1px solid #000;
       padding: 15px 0 0 0;
   }
   #product-img{
       width: 30%;
       float: left;
   }
   #product-info{
       float: right;
       width: 70%;
       text-align: left;
       padding-left: 30px;
   }
   #product-img img{
       max-width: 100%;
       padding: 5px;
       border: 1px solid #000;
       background: #eee;
   }
   h1{
       text-align: left;
       margin-top: 0;
   }
   label.add-to-cart{
       background: #000;
       border: 1px solid #000;
       margin-top: 15px;
       padding: 15px;
       display: inline-block;
       color: #fff;
   }
   label a{
       color: #FFF;
   }
   #gallery{
       margin-top: 10px;
   }
   #gallery ul{
       margin: 0;
       padding: 0;
   }
   #gallery ul li{
       width: 150px;
       float: left;
       list-style: none;
       margin-right: 5px;
       margin-bottom: 5px;
       height: 100px;
       text-align: center;
       padding: 5px;
       border: 1px solid #000;
       background: #eee;
   }
   #gallery ul li img{
       max-width: 100%;
       max-height: 100%;
       vertical-align: middle;
   }
   table{
       border-collapse: collapse;
       width: 1170px;
   }
   table, th, td {
       border: 1px solid black;
   }
   table .product-img img{
       max-width: 100px;
   }
   table .product-name{
       width: 350px;
       padding-left: 20px;
   }
   table .product-img{
       width: 120px;
       text-align: center;
   }
   table .product-number{
       width: 50px;
       text-align: center;
   }
   table .product-price{
       width: 100px;
       text-align: center;
   }
   table .product-quantity input{
       width: 40px;
       text-align: center;
   }
   table .product-quantity{
       width: 60px;
       text-align: center;
   }
   table .total-money{
       width: 100px;
       text-align: center;
   }
   #form-button{
       text-align: right;
       margin-top: 15px;
   }
   .product-delete{
       width: 100px;
       text-align: center;
   }
   #cart-form label{
       width: 100px;
       display: inline-block;
       margin-top: 15px;
   }
   #cart-form textarea{
       margin-top: 15px;
   }
   #cart-form input{
       line-height: 30px;
       height: 30px;
   }
   input[name="order_click"]{
       margin-top: 15px;
   }
   #row-total{
       background: #eee;
       color: #000;
   }

   #add-to-cart-form input[type='text']{
       margin-top: 10px;
       height: 30px;
       line-height: 30px;
   }
   #add-to-cart-form input[type='submit']{
       background: #000;
       border: 1px solid #000;
       margin-top: 10px;
       padding: 15px;
       display: inline-block;
       color: #fff;
   }
</style>
</head>
<body>
    <?php
        include 'config.php';
        if(isset($_GET['action'])) {
            var_dump($_POST);exit;
        }
    ?>
    <div class="content">
        <a href="index.php">Trang chủ</a>
        <h1>Gio hang</h1>
        <form id="cart-form" action="cart.php?action=submit" method="POST">
            <table>
                <tr>
                    <th class="product-number">STT</th>
                    <th class="product-name">Tên sản phẩm</th>
                    <th class="product-img">Ảnh sản phẩm</th>
                    <th class="product-price">Đơn giá</th>
                    <th class="product-quantify">Số lượng</th>
                    <th class="product-money">Thành tiền</th>
                    <th class="product-delete">Xóa</th>
                </tr>
                <tr>
                    <td class="product-number">1</td>
                    <td class="product-name">COMBO GÀ RÁN A</td>
                    <td class="product-img"><img src="http://localhost/webphp/assets/img/combo%20ga%20ran%20g.jpg" alt=""></td>
                    <td class="product-price">79.000đ</td>
                    <td class="product-quantify"><input type="text" value="" name="quantify[1]" /></td>
                    <td class="product-money">2.500.000</td>
                    <td class="product-delete">Xóa</td>
                </tr>
                <tr>
                    <td class="product-number">1</td>
                    <td class="product-name">COMBO GÀ RÁN B</td>
                    <td class="product-img"><img src="http://localhost/webphp/assets/img/combo%20ga%20ran%20g.jpg" alt=""></td>
                    <td class="product-price">79.000đ</td>
                    <td class="product-quantify"><input type="text" value="" name="quantify[2]" /></td>
                    <td class="product-money">2.500.000</td>
                    <td class="product-delete">Xóa</td>
                </tr>
                <tr id="row-total">
                    <td class="product-number">&nbsp</td>
                    <td class="product-name">Tổng tiền</td>
                    <td class="product-img">&nbsp</td>
                    <td class="product-price">&nbsp</td>
                    <td class="product-quantify">&nbsp</td>
                    <td class="product-money">2.500.000</td>
                    <td class="product-delete">Xóa</td>
                </tr>
            </table>
            <div id="form-button">
                <input type="submit" name="update_click" value="Cap nhat">
            </div>
            <hr>
            <div><label for="">Người nhận: </label><input type="text" name="name"></div>
            <div><label for="">Điện thoại: </label><input type="text" name="phone"></div>
            <div><label for="">Điạ chỉ: </label><input type="text" name="address"></div>
            <div><label for="">Ghi chú: </label><input type="text" name="note" cols="50" rows="7"></div>
            <input type="submit" name="order_click" value="Đặt hàng">
        </form>
    </div>
</body>
</html>