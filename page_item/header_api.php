<?php
require __DIR__ . '/../__db_connect.php';

if(!empty($_SESSION['cart'])) {
    $keys = array_keys($_SESSION['cart']);
//字面上意思是拿到$_SESSION['cart']所有的key
    $sql = sprintf("SELECT * FROM `products_list` WHERE `product_sid` IN (%s)", implode(',', $keys));
    //IN (這邊要塞sid逗號隔開)
//黏著符號js叫做join()
//php叫做implode
//SELECT * FROM `products_list` WHERE `product_sid` IN (1,2)
    $rs = $mysqli->query($sql);

    $data = [];

    while ($r = $rs->fetch_assoc()) {
        $r['qty'] = $_SESSION['cart'][$r['product_sid']];

        $data[$r['product_sid']] = $r;
    }

}




if(!empty($_SESSION['cart'])): ?>
    <?php
    $total = 0;
    foreach($keys as $k):
        $r = $data[$k]; // 整筆資料(包含 qty)
        $total += $r['price'] * $r['qty'];
        ?>
        <div class="order_listbox" data-sid="<?= $k ?>">
            <figure class="description_20"><a href="#"><img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>"></a></figure>
            <div class="description_70">
                <a href="#" class="product_name"><?= $r['product_name'] ?></a>
                <p>Ｘ<?= $r['qty'] ?></p>
                <p>$<?= $r['price'] ?></p>
            </div>
            <div class="description_10"><div class="icon_garbage"></div></div>
        </div>
    <?php endforeach; ?>

    <div class="check_outbox"><a class="check_out" href="/thepalette/thepalette/shoppingcar_01.php">CHECK OUT</a></div>

<?php else: ?><!-- 購物車沒有商品時的狀態 -->
    <div class="order_listbox carts_none">
        <h3>購物車目前沒有任何商品</h3>
    </div>
<?php endif ?>