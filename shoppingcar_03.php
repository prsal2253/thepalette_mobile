<?php

require __DIR__ . '/__db_connect.php';

if (isset($_SESSION['user']) and !empty($_SESSION['cart'])) {

// *** 取得購物車商品資料 begin
    $data = [];
    $keys = array_keys($_SESSION['cart']);

    $sql = sprintf("SELECT l.*, pc.* FROM products_list l JOIN products_color_sid pc ON l.product_color_sid=pc.product_color_sid WHERE `product_sid` IN (%s)", implode(',', $keys));
    $rs = $mysqli->query($sql);
    while ($r = $rs->fetch_assoc()) {
        $r['qty'] = $_SESSION['cart'][$r['product_sid']];

        $data[$r['product_sid']] = $r;
    }
// *** 取得購物車商品資料 end

    $total_price = 0;
    foreach ($data as $k => $v) {
        $total_price += $v['price'] * $v['qty'];
    }
    $sql3 = sprintf("SELECT `product_color_sid`, `color` FROM `products_color_sid` WHERE 1");
    $rs3 = $mysqli->query($sql3);

    $c_ar = [];
//先給空陣列
    while ($c = $rs3->fetch_assoc()) {
//    這裡迴圈先一一取出$rs3陣列
        $c_ar[$c['product_color_sid']] = $c['color'];
//以'product_color_sid'當作key對應'color'的val
    }
}
?>

<?php include 'page_item/head.php'; ?>
</head>
<body id="shoppingcar" class="shoppingcar_03">
<div class="index_top">
    <?php include 'page_item/header.php'; ?>
</div>
<div class="index_main">
    <!-- 麵包屑 -->
    <!-- <section  class="bread_crumbs">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">member</a></li>
            <li>shopping car</member></li>
        </ul></section> -->
    <section class="item_12">
        <div class="index_conten_flex">
            <div class="step_box step_box_in"><span>01</span><span>確認訂單<br/>付款方式</span></div>
            <div class="step_box step_box_in"><span>02</span><span>填寫<br/>訂購資料</span></div>
            <div class="step_box step_box_in"><span>03</span><span>訂購完成</span></div>
        </div>
    </section>
    <form name="form1" method="post" action="" onsubmit="return checkForm()">
        <section class="item_12 item_13 item_17 item_19">
            <div class="index_conten ">
                <div class="item_02">
                    <div class="item_02_conten">
                        <div class="order_listbox item_19_title">
                            <h3 class="member_title"><span>付款已完成 請前往預約</span></h3>
                            <p>
                                訂單詳細內容請至會員中心的訂單列表查詢您的訂單處理情形；
                                如有相關疑問，請查看常見問題或使用訂單詢問進行留言</p>
                        </div>
                        <div class="order_listbox">
                            <div class="description_80">商品</div>
                            <div class="description_20"></div>
                        </div>
                        <?php if (!empty($_SESSION['cart'])): ?>
                        <?php
                        $total_qty = 0;// 一定要先設定一個0不然會找不到值
                        $total = 0;// 一定要先設定一個0不然會找不到值
                        foreach ($keys

                        as $k):// $k是拿到$keys的val
                        $r = $data[$k]; // 整筆資料(包含 qty)
                        $total += $r['price'] * $r['qty'];// 這裡是總價格
                        $total_qty += $r['qty'];// 這裡是總數量
                        ?>
                        <!-- 一件商品 -->
                        <div class="order_listbox product-item" data-sid="<?= $k ?>">
                            <figure class="description_20"><a href="product_detail.php?id=<?= $r['product_sid'] ?>">
                                    <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>"></a></figure>
                            <div class="description_70">
                                <div class="sale_icon"><span>活動商品</span></div>
                                <a href="product_detail.php?id=<?= $r['product_sid'] ?>" class="product_name" style="line-height:20px;"><?= $r['product_name'] ?></a>
                                <div class="flex" style="">
                                <p><?= $c_ar[$r['product_color_sid']] ?></p>
                                <p style="margin:0 5px;"> x </p>
                                <p class="product-item-qty"
                                   data-qty="<?= $r['qty'] ?>"><?= $r['qty'] ?></p>
                                <p class="product-item-price"
                                   data-price="<?= $r['price'] ?>" style="margin:0 5px;">$<?= $r['price'] ?></p></div>
                                </div>
                            </div>
                            <div class="description_10"></div>
                        <?php endforeach; ?>
                        </div>
                        <div class="order_listbox order_listbox_tatle">
                            <p>總共 <span class="description_mark" id="total-qty"><?= $total_qty ?></span>
                                            件商品，小計<span class="description_mark"><h3 class="product_price"
                                                                                     id="total-price"></h3></span></p>
                        </div>
                    <?php if ($_SESSION['sighup_transport'] == 2): ?>
                        <div class="order_listbox order_listbox_tatle">
                            <p>＋貨運運費<span class="description_mark">＄800</span></p>
                        </div>
                    <?php else: ?>
                    <?php endif; ?>
                        <div class="order_listbox order_listbox_tatle">
                            <p>總金額</p>
                            <h3 class="product_price"id="pay-price"></h3>
                        </div>
                    <?php endif ?>
                        <div class="item_02_conten item_19box">
                            提醒您，目前常見之詐騙手法如下：<br/>
                            來電顯示開頭為「＋」者，是國際電話，有可能就是詐騙電話！<br/>
                            國內ATM自動"提款機"並沒有分期付款設定解除等服務，如要求您前往操作應為詐騙集團手法。<br/>
                            切勿依來電指示操作自動提款機提、至銀行提（匯）款或交付現金給任何人，以免被騙。<br/>
                            瞭解更多反詐騙詳細內容 請至 內政部警政署165反詐騙網站
                        </div>
                        <div class="order_listbox order_listbox_tatle item_conten_button">
                            <div>
                                <input type="submit" class="palette_btn_back" onclick="location.href='order_list.php'"
                                       value="訂單詳細">
                                <input type="submit" onclick="location.href='reservation_01.php'" value="前往預約">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</form>
</div>
<script>
    //點結帳傳值
    function checkForm() {
        $.post('shoppingcar_03_api.php', $(document.form1).serialize(), function (data) {

        }, 'json');
        return false;
    };


    //      即時計算總價
    var dallorCommas = function (n) {    // 這是加$跟三三為單位中間加逗號
        return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    };

    var calTotal = function () {
        var total = 0;// 一開始設定0
        var total_qty = 0;
        var items = $('.product-item');

        if (items.length == 0) {
            location.href = location.href;  //如果沒抓到頁面就會重新讀取
            return;
        }

        items.each(function () {    // 抓到所有項目，所以用each迴圈下去跑，每跑到一個就抓它價格跟數量乘起來
            total += $(this).find('.product-item-price').attr('data-price') * $(this).find('.product-item-qty').attr('data-qty');
            //這裡應該做型別轉換parseInt轉成數字，但是乘法會轉換
            total_qty += parseInt($(this).find('.product-item-qty').attr('data-qty'));
            // total_qty += $(this).find('.product-item-qty').attr('data-qty')*1;
        });

        $('#total-price').text(dallorCommas(total));
        $('#total-qty').text(total_qty);
        <?php if($_SESSION['sighup_transport'] == 2):?>
        $('#pay-price').text(dallorCommas(total + 800));
        <?php else:?>
        $('#pay-price').text(dallorCommas(total));
        <?php endif;?>
    };

    //---------------------------------------------------------------------


    var p_items = $('.product-item');

    if (p_items.length) {
        calTotal();// 一進來就呼叫calTotal
    }

    //    一開始設定正確的數量
    p_items.each(function () {
        var sel = $(this).find('.qty-sel');
        sel.val($(this).find('.product-item-qty').attr('data-qty'));
    });
    //    這裏開始選項變更數量
    p_items.find('.qty-sel').change(function () {
        var sid = $(this).closest('.product-item').attr('data-sid');
        //這裡拿到的數量是用戶調整完product-item的數量
        var qty = $(this).val();
        //當qty改變時要拿到裡面的值 這邊的this指的是.qty-sel
        $(this).closest('.product-item').find('.product-item-qty').attr('data-qty', qty);

        // console.log($(this).closest('.product-item').find('.product-item-qty').attr('data-qty',qty));


        $.get('add_to_cart.php', {sid: sid, qty: qty}, function (data) {
            // changeQty(data);
            calTotal();//改變選單數量再去呼叫它calTotal，讓他重算
        }, 'json');
    });


</script>
<div class="index_footer">
    <?php include 'page_item/footer.php'; ?>
</div>
</body>
</html>