<div class="group-hinhanh">
    <?php
    while ($row = mysqli_fetch_array($products)) {
    ?>
    <div class="hinhanh">
        <div style="background-color:gainsboro; padding: 10px;">
        <img style="width:100%" src="./assets/img/combo ga ran g.jpg" alt="garancoca">
        <h5><?=$row['name']?></h5>
        <h3><?=number_format($row['price'],0,",",".")?>đ</h3>
        <P><?=$row['content']?>
        </P>
            <div class="seclect-order">
                <a href="cart.php" style="color: #fff;text-decoration: none;">Đặt hàng</a>
            </div>
        </div>
    </div>
    <?php } ?>
</div>