<form id="product-search" action="" method="GET">
    <input type="text" name="name" placeholder="Nhập tìm kiếm..." style="padding:10px;font-size:16px;">
    <input type="submit" value="Tìm kiếm" style="padding: 8px 80px; ">
</form>

<?php
    $search = isset($_GET['name']) ? $_GET['name'] : "";
    if ($search) {
         $where = "WHERE `name` LIKE '%".$search."%' ";
    }
    include 'config.php';
    if ($search) {
        $products = mysqli_query($conn, "SELECT * FROM `product` WHERE `name` LIKE '%".$search."%' ORDER BY `id` ASC");
    } else {
        $products = mysqli_query($conn, "SELECT * FROM `product` ORDER BY `id` ASC");
    }
?>
