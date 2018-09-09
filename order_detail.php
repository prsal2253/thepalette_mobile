<?php

require __DIR__ . '/__db_connect.php';

if (!isset($_SESSION['user'])) {
    header("Location: index_.php");
    exit;
}

if (isset($_GET['id'])) {

    $sql = sprintf('SELECT * FROM `orders` WHERE `orders_sid`=' . $_GET['id']);


    $rs = $mysqli->query($sql);
    $my_orders = $rs->fetch_all(MYSQLI_ASSOC);

    $order_sids = [];
    foreach ($my_orders as $v) {
        $order_sids[] = $v['orders_sid'];
    }


    $sql2 = sprintf("SELECT d.*, p.* FROM orders_details d JOIN products_list p ON d.product_sid=p.product_sid WHERE d.order_sid IN (%s)",
        implode(',', $order_sids)
    );


    $rs2 = $mysqli->query($sql2);

    $my_details = $rs2->fetch_all(MYSQLI_ASSOC);

    $sql3 = sprintf("SELECT `product_color_sid`, `color` FROM `products_color_sid` WHERE 1");
    $rs3 = $mysqli->query($sql3);

    $c_ar = [];
//先給空陣列
    while ($c = $rs3->fetch_assoc()) {
//    這裡迴圈先一一取出$rs3陣列
        $c_ar[$c['product_color_sid']] = $c['color'];
//以'product_color_sid'當作key對應'color'的val
    }

    $sql4 = "SELECT * FROM `reservation_sid` WHERE`order_sid`=" . $_GET['id'];
    $rs4 = $mysqli->query($sql4);
    $rt1 = $rs4->fetch_assoc();



}

?>
<?php include 'page_item/head.php';?>
</head>
<body id="member" class="order_detail">
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
            <div class="member_title"><h2>Order detail</h2><span>訂單詳細</span></div>
            <div class="member_conten">
                <div class="item_02 item_03 item_04">
                    <!-- top -->
                    <div class="item_02_conten">
                        <a class="palette_btn palette_btn_back" href="order_list.php">回訂單列表頁</a>
                        <!-- <p class="description">總共<span class="description_mark" id="total_howmuch"></span>筆訂單</p> -->
                    </div>

                    <!-- 狀態列 -->
                    <?php foreach ($my_orders as $order): ?>
                    <div class="item_02_conten">
                            <div class="order_listbox">
                                <?php if (!empty($rt1['date'])): ?>
                                    <p class=""><span class="description_mark">訂單狀態：預約完成</span></p>
                                <?php else: ?>
                                    <p class=""><span class="description_mark">訂單狀態：款項確認</span></p>
                                <?php endif; ?>
                                </div>
                                <div class="order_listbox">
                                    <p class="">訂購日期：<?= $order['order_date'] ?></p>
                                </div>
                                <div class="order_listbox">
                                    <p class="">訂單編號：000000<?= $order['orders_sid'] ?></p>
                                </div>
                        <div class="order_listbox order_detail_box">
                               
                                   <ul class="order_timebar">
                                       <li></li>
                                       <li class="this_time"></li>
                                       <?php if (!empty($rt1['date'])): ?>
                                           <li class="this_time"></li>
                                       <?php else: ?>
                                           <li class=""></li>
                                       <?php endif; ?>
                                       <li class=""></li>
                                   </ul>
                                   <div class="order_timebar_detail">
                                       <p>訂單成立<br/><span><?= $order['order_date'] ?></span></p>
                                       <p>匯款確認<br/><span><?= $order['order_date'] ?></span></p>
                                       <p>預約確認<br/><span><?= $rt1['date']  ?></span></p>
                                       <p>訂單完成<br/><span></span></p>
                                   </div>
                               
                        </div>
                        
                    </div>

                    <!-- 訂購方式、運送方式 -->

                    <div class="item_02_conten">
                        <div class="item_02_conten">
                            <div class="order_listbox">付款方式 : <span class="description_mark_b">信用卡一次付清(已付款)</span><a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html" href="javascript:;" class="description_q transition" class="description_q transition" href="#" title="付款說明">?</a></div>
                            <div class="order_listbox">
                                <div style="width: 100%;">
                                    <p>付款時間：<?= $order['order_date'] ?></p>
                                    <p>發卡銀行：國泰世華銀行</p>
                                    <p>卡片種類：VISA</p>
                                    <p>信用卡卡號：4023-xxxx-xxxx-1942</p>
                                </div>
                            </div>
                        </div>
                        <?php if (!empty($rt1['reservation_date'])): ?>
                            <div class="item_02_conten">
                                <div class="order_listbox">運送方式 : <span
                                            class="description_mark_b">貨運(已預約)</span><a
                                            data-fancybox data-type="ajax"
                                            data-src="https://codepen.io/fancyapps/pen/oBgoqB.html"
                                            href="javascript:;" class="description_q transition"
                                            class="description_q transition" href="#">?</a></div>
                                <div class="order_listbox">
                                    <div style="width: 100%;">
                                        <p>預約日期：<?= $rt1['reservation_date'] ?></p>
                                        <p>配送時間：<?= $rt1['reservation_time'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="item_02_conten">
                                <div class="order_listbox">運送方式 : <span
                                            class="description_mark_b">貨運(未預約)</span><a
                                            data-fancybox data-type="ajax"
                                            data-src="https://codepen.io/fancyapps/pen/oBgoqB.html"
                                            href="javascript:;" class="description_q transition"
                                            class="description_q transition" href="#">?</a></div>
                                <div class="order_listbox">
                                    <!-- 預約完成後顯示資料 -->
                                    <!-- <div>
                                            <p>預約時間：2018/07/31 17:30</p>
                                            <p>收件人：王ＫＫ</p>
                                            <p>聯絡電話：0910110220</p>
                                            <p>送貨地址：台北市中山區中山北路二段14巷2號5樓</p>
                                    </div> -->
                                    <a href="reservation_01.php?id=<?= $order['orders_sid'] ?>"
                                       class="palette_btn">尚未預約前往預約</a>

                                </div>
                            </div>
                        <?php endif; ?>
                </div>

                <!-- 訂購商品 -->

                <div class="item_02_conten">
                        <div class="order_listbox">
                                <div class="description_70">訂單商品</div>
                        </div>

                        <!-- 一件商品 -->
                        <!-- <div class="order_listbox">
                                <figure class="description_20"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>
                                <div class="description_80">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>
                                <p>黃色x 1 $120000</p>
                                </div>
                        </div> -->

                        <!-- 一件商品 -->
                    <?php
                    foreach ($my_details as $dt):
                    if ($order['orders_sid'] == $dt['order_sid']):
                    ?>
                        <div class="order_listbox howmuch product-item">
                                <figure class="description_20">
                                    <a href="product_detail.php?id=<?= $dt['product_sid'] ?>">
                                        <img src="images/<?= $dt['img'] ?>.png" alt="<?= $dt['product_name'] ?>">
                                    </a>
                                </figure>
                                <div class="description_80">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name"><?= $dt['product_name'] ?></a>
                                    <div class="flex">
                                    <p><?= $c_ar[$dt['product_color_sid']] ?></p>
                                    <p class="product-item-qty"   data-qty="<?= $dt['quantity'] ?>"> x <?= $dt['quantity'] ?></p>
                                    <p class="product-item-price"  data-price=" <?= $dt['price'] ?>">＄<?= $dt['price'] ?></p></div>
                                    </div>
                                </div>
                    <?php
                    endif;
                    endforeach; ?>
                        </div>






                        <div class="order_listbox order_listbox_tatle" style="
    padding-bottom: 0;">
                            <div>
                                <p>總共 <span class="description_mark" id="total-qty"></span> 件商品</p>
                            </div>
                        </div>
 
                                <?php if ($order['transport'] == 2): ?>
                                <div class="order_listbox order_listbox_tatle">
                                <div>
                                    <p>運費</p>
                                    <h3 class="product_price" id="transport_pay" data-price="800"><span>＄</span>800
                                    </h3>
                                    <p>，訂單金額</p>
                                    <h3 class="product_price" id="total-price"></h3>
                                 </div></div>
                                <?php else: ?>
                                <div class="order_listbox order_listbox_tatle">
                                <div>
                                    <p>訂單金額</p>
                                    <h3 class="product_price" id="total-price"></h3>
                                </div></div>
                                <?php endif ?>

                        <!-- <div class="order_listbox order_listbox_tatle">
                            <div>
                                <p>總共 <span class="description_mark" id="total-qty"></span> 件商品</p>
                                <?php if ($order['transport'] == 2): ?>
                                    <p>，運費</p>
                                    <h3 class="product_price" id="transport_pay" data-price="800"><span>＄</span>800
                                    </h3>
                                    <p>，訂單金額</p>
                                    <h3 class="product_price" id="total-price"></h3>
                                <?php else: ?>
                                    <p>，訂單金額</p>
                                    <h3 class="product_price" id="total-price"></h3>
                                <?php endif ?>
                            </div>
                        </div> -->
    
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </section>
</div>
<script>

    var dallorCommas = function (n) {    // 這是加$跟三三為單位中間加逗號
        return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    var total = 0;// 一開始設定0
    var total_qty = 0;
    var items = $('.product-item');

    items.each(function () {    // 抓到所有項目，所以用each迴圈下去跑，每跑到一個就抓它價格跟數量乘起來
        total += $(this).find('.product-item-price').attr('data-price') * $(this).find('.product-item-qty').attr('data-qty');
        //這裡應該做型別轉換parseInt轉成數字，但是乘法會轉換
        total_qty += parseInt($(this).find('.product-item-qty').attr('data-qty'));
        // total_qty += $(this).find('.product-item-qty').attr('data-qty')*1;
    });
    var transport_pay = parseInt($('#transport_pay').attr('data-price'));
    //這裡是運費
    if (transport_pay == 800) {
        $('#total-price').text(dallorCommas(total + transport_pay));
        //這裡是運費加總價錢
    } else {
        $('#total-price').text(dallorCommas(total));
    }
    ;
    $('#total-qty').text(total_qty);
    $('#total_howmuch').text($(".howmuch").length);

</script>
<div class="index_footer">
<?php include 'page_item/footer.php';?>
</div>
</body>
</html>