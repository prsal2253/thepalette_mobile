
<?php
require __DIR__ . '/__db_connect.php';


if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}

// 先取得會員的訂單資料 (半年內)
$t = date("Y-m-d H:i:s", time()-180*24*60*60);
$sql = sprintf("SELECT * FROM `orders` WHERE member_sid=%s AND order_date>'%s' ORDER BY orders_sid DESC",
    $_SESSION['user']['member_sid'], $t);

$rs = $mysqli->query($sql);
$my_orders = $rs->fetch_all(MYSQLI_ASSOC);

$order_sids = [];
foreach($my_orders as $v){
    $order_sids[] = $v['orders_sid'];



    $sql2 = sprintf("SELECT d.*, p.* FROM orders_details d JOIN products_list p ON d.product_sid=p.product_sid WHERE d.order_sid IN (%s)",
        implode(',', $order_sids)
    );


    $rs2 = $mysqli->query($sql2);

    $my_details = $rs2->fetch_all(MYSQLI_ASSOC);

//
    $sql3 = sprintf("SELECT `product_color_sid`, `color` FROM `products_color_sid` WHERE 1");
    $rs3 = $mysqli->query($sql3);

    $c_ar = [];
//先給空陣列
    while($c = $rs3->fetch_assoc()){
//    這裡迴圈先一一取出$rs3陣列
        $c_ar[$c['product_color_sid']] = $c['color'];
//以'product_color_sid'當作key對應'color'的val
    }
}
?>

<?php include 'page_item/head.php';?>
</head>
<body id="member" class="order_list">
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <!-- <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>order</li>
            </ul></section> -->
    <section>
    <div class="index_conten_flex">
        <div class="index_conten_l">
            <div class="item_01">
                <div class="item_01menu item_01menu_in"><h6 class="transition">訂單列表</h6><span class="transition">Order List</span></div>
                <div class="item_01menu "><a href="member_profile.php"><h6 class="transition">會員資料</h6><span class="transition">member profile</span></a></div>
                <div class="item_01menu"><a href="favorite_list.php"><h6 class="transition">追蹤清單</h6><span class="transition">my favourite</span></a></div>
            </div>
        </div>
        <div class="index_conten_r">
            <div class="member_title"><h2>Order list</h2><span>訂單列表</span></div>
            <div class="member_conten">
                <div class="item_02 item_03">
                    <!-- top -->
                    <div class="item_02_conten">
                        <div class="palette_select">
                                <select class=" ">
                                <option>請選擇問題類型</option>
                                    <option>三個月內</option>
                                    <option>三個月以上</option>
                                </select>
                        </div>
                        <p class="description">總共<span class="description_mark total_howmuch"></span>筆訂單</p>
                    </div>

                    <!-- 一張訂單 -->
                    <?php foreach($my_orders as $order):
                    $t = 0;
                    $t_q=0;
                    ?>
                    <div class="item_02_conten howmuch">
                        <div class="order_listbox">
                            <p class=""><span class="description_mark">訂單狀態：款項確認</span></p>
                        </div>
                        <div class="order_listbox">
                            <p class="">訂購日期：<?= $order['order_date'] ?></p>
                        </div>
                        <div class="order_listbox">
                            <p class="">訂單編號：000000<?= $order['orders_sid'] ?></p>
                        </div>
                        <?php
                        foreach($my_details as $dt):
                        if($order['orders_sid']==$dt['order_sid']):
                        $t_q += $dt['quantity'];
                        $t += $dt['price'] * $dt['quantity'];
                        ?>
                        <div class="order_listbox">
                                <figure class="description_20"><a href="product_detail.php?id=<?= $dt['product_sid'] ?>">
                                        <img src="images/<?= $dt['img'] ?>.png" alt="<?= $dt['product_name'] ?>"></a></figure>
                                <div class="description_80">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="product_detail.php?id=<?= $dt['product_sid'] ?>" class="product_name"><?= $dt['product_name'] ?></a>
                                    <P><?= $c_ar[$dt['product_color_sid']] ?></P>
                                    <P class="product-item-qty"  data-qty="<?= $dt['quantity'] ?>"> x <?= $dt['quantity'] ?> </P>
                                    <P class="product-item-price" data-price=" <?= $dt['price'] ?>"><?= $dt['price'] ?></P>
                                </div>
                        </div>
                        <?php
                        endif;
                        endforeach; ?>
<!--                        <div class="order_listbox">-->
<!--                            <p class="more_product">還有1件商品</p>-->
<!--                        </div>-->
                        <div class="order_listbox order_listbox_tatle product-item">
                            <div>
                                    <p>總共 <span class="description_mark" ><?=$t_q?></span> 件商品，訂單金額</p>
                                <h3 class="product_price sub-total" data-totalprice="<?=$t?>"></h3>
                            </div>
                        </div>
                        <div class="order_listbox order_listbox_tatle">
                                <a href="#" class="palette_btn palette_btncolor2"
                                   onclick="location.href='order_detail.php?id=<?= $order["orders_sid"] ?>'">訂單明細</a>
                        </div>
                    </div>

                    <?php endforeach; ?>
                    <?php if (!empty($order['order_date'])): ?>
                    <?php else: ?>
                        <!-- 追蹤清單沒有商品時的狀態 -->
                        <div class="order_listbox carts_none">
                            <h3>訂單列表目前沒有任何訂單</h3>
                        </div>
                    <?php endif ?>

                    <!-- 頁碼 -->
<!--                    <div class="page_num">-->
<!--                        <ul>-->
<!--                            <li><a href="#"></a></li>-->
<!--                            <li>1</li>-->
<!--                            <li><a href="#">2</a></li>-->
<!--                            <li><a href="#">3</a></li>-->
<!--                            <li><a href="#"></a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
<script>

    var dallorCommas = function (n) {    // 這是加$跟三三為單位中間加逗號
        return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    var items = $('.sub-total');

    items.each(function () {    // 抓到所有項目，所以用each迴圈下去跑，每跑到一個就抓它價格跟數量乘起來

        var p = parseInt($(this).attr('data-totalprice'));
        $(this).text(dallorCommas(p));

    });



    $('.total_howmuch').text($( ".howmuch").length);

</script>
<div class="index_footer">
<?php include 'page_item/footer.php';?>
</div>
</body>
</html>