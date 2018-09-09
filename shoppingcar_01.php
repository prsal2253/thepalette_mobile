<?php

require __DIR__ . '/__db_connect.php';

$pageName = 'cart';


if (!empty($_SESSION['cart'])) {
    $keys = array_keys($_SESSION['cart']);
//字面上意思是拿到$_SESSION['cart']所有的key
    $sql = sprintf("SELECT l.*, pc.* FROM products_list l JOIN products_color_sid pc ON l.product_color_sid=pc.product_color_sid WHERE `product_sid` IN (%s)", implode(',', $keys));
    //IN (這邊要塞sid逗號隔開)

//黏著符號js叫做join()
//php叫做implode
//SELECT * FROM `products_list` WHERE `product_sid` IN (1,2)
    $rs = $mysqli->query($sql);

    $data = [];

    while ($r = $rs->fetch_assoc()) {
//        因為這筆資料有在購物車才拿得到$r
        $r['qty'] = $_SESSION['cart'][$r['product_sid']];
//         設定數量qty當作key,拿到的是數量
        $data[$r['product_sid']] = $r;
//        以這筆資料product_sid當作key,$r2當作val
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

    if (isset ($_SESSION['user'])) {
        $data_fa = [];
        $sql_love = 'SELECT * FROM `members_favourite` WHERE `member_sid`=' . $_SESSION['user']['member_sid'];
        $rs_love = $mysqli->query($sql_love);

        while ($r_love = $rs_love->fetch_assoc()) {
            //    這裡迴圈先一一取出$rs_love陣列
            $data_fa[$r_love['product_sid']] = $r_love['product_sid'];
//以'product_sid'自己當作key對應'product_sid'的val
        }

    }
}
?>
<style>
    .sale_icon{margin-bottom: 5px;}
</style>
<?php include 'page_item/head.php';?>
</head>
<body id="shoppingcar" class="shoppingcar_01">
<div class="index_top">
    <?php include 'page_item/header.php';?> 
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
                <div class="step_box"><span>02</span><span>填寫<br/>訂購資料</span></div>
                <div class="step_box"><span>03</span><span>訂購完成</span></div>
            </div>
    </section>
        <form name="form1" method="post" action="" onsubmit="return checkForm()">
    <section class="item_12 item_13 item_17">
        <div class="index_conten ">
            <div class="item_02">
                <div class="item_02_conten">
                        <div class="order_listbox">
                                <div class="description_80">商品</div>
                        </div>
                    <?php if (!empty($_SESSION['cart'])): ?>
                    <?php
                    $total_qty = 0;// 一定要先設定一個0不然會找不到值
                    $total = 0;// 一定要先設定一個0不然會找不到值
                    foreach ($keys as $k):// $k是拿到$keys的val
                    $r = $data[$k]; // 整筆資料(包含 qty)
                    $total += $r['price'] * $r['qty'];// 這裡是總價格
                    $total_qty += $r['qty'];// 這裡是總數量
                    ?>
                        <!-- 一件商品 -->
                        <div class="order_listbox product-item" data-sid="<?= $k ?>">
                                <figure class="description_25"><a href="product_detail.php?id=<?= $r['product_sid'] ?>"><img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>"></a></figure>
                                <div class="description_60">
                                    <div class="sale_icon" style=""><span>活動商品</span></div>
                                    <a href="product_detail.php?id=<?= $r['product_sid'] ?>" class="product_name" style="line-height:20px;"><?= $r['product_name'] ?></a>
                                    <div class="flex" style="line-height:20px; margin: 5px auto;">
                                    <p><?= $c_ar[$r['product_color_sid']] ?></p>
                                    <p style="margin:0 5px;"> x </p>
                                    <p class="palette_select product-item-qty" data-qty="<?= $r['qty'] ?>" style="width: 30%;">
                                        <select class="qty-sel" style="height:20px;line-height:20px;">
                                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php endfor; ?>
                                        </select> </p>
                                    </div>
                                                                       
                                    <div class="product-item-price" data-price="<?= $r['price'] ?>">
                                        $<?= $r['price'] ?>
                                    </div>
                                </div>
                                <div class="description_5"></div>
                                <div class="description_10">
                                <div class="icon_love
                                    <?= $data_fa[$r['product_sid']] == $r['product_sid']  ? 'icon_love_click' : '' ?>" style="    margin-bottom: 10px;">
                                        </div>
                                <div class="icon_garbage"></div></div>
                        </div>
                    <?php endforeach; ?>
                        <!-- 一件群組商品 -->
<!--                        <div class="order_listbox shopping_group">-->
<!--                                <figure class="description_20"><a href="#"><img src="images/banner/connect_sofa_leaf_around_ambiente.jpg" alt="商品名稱"></a></figure>-->
<!--                                <div class="description_60">-->
<!--                                    <div class="sale_icon"><span>群組商品</span></div>-->
<!--                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>-->
<!--                                    <p>$120000</p>-->
<!--                                </div>-->
<!--                                <div class="description_20"><div class="icon_garbage"></div></div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                            <div class="order_listbox shopping_group_d">-->
<!--                                <div class="description_10"></div>-->
<!--                                <figure class="description_10"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>-->
<!--                                <div class="description_60">-->
<!--                                    <a href="#" class="product_name">Anastasia Tufted Chair</a>-->
<!--                                    <p>黃色 X 1</p>-->
<!--                                <div class="description_20"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="order_listbox shopping_group_d">-->
<!--                                    <div class="description_10"></div>-->
<!--                                    <figure class="description_10"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>-->
<!--                                    <div class="description_60">-->
<!--                                        <a href="#" class="product_name">Anastasia Tufted Chair</a>-->
<!--                                        <p>黃色 X 1</p>-->
<!--                                    <div class="description_10"></div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            <div class="order_listbox shopping_group_d">-->
<!--                                <div class="description_10"></div>-->
<!--                                <figure class="description_10"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>-->
<!--                                <div class="description_60">-->
<!--                                    <a href="#" class="product_name">Anastasia Tufted Chair</a>-->
<!--                                    <p>黃色 X 1</p>-->
<!--                                <div class="description_10"></div>-->
<!--                                </div>-->
<!--                            </div>-->
<!---->
<!--                        </div>-->

                        <div class="order_listbox order_listbox_tatle">
                            <div>
                                <p>總共 <span class="description_mark" id="total-qty"><?= $total_qty ?></span> 件商品，訂單金額</p>
                                <h3 class="product_price" id="total-price"></h3>
                            </div> 
                        </div>
                    </div>
                <?php else: ?>
                    <!-- 購物車沒有商品時的狀態 -->
                    <div class="order_listbox carts_none">
                        <h3 style="width: 100%;     color: #000; text-align: center;">購物車目前沒有任何商品</h3>
                    </div>
                <?php endif ?>

            </div>
        </div>
    </section>
    <section class="item_12 item_13 item_17">
            <div class="index_conten ">
                <!-- 會員名稱 -->
                    <div class="item_02_conten">
                            <div class="order_listbox">
                                <h3>請選擇付款方式</h3>
                                <a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html" href="javascript:;" class="description_q transition" class="description_q transition" href="#" title="付款說明">?</a></div>
                            <div class="order_listbox item_17_mobile">
                                <div class="radio_box">
                                    <input type="radio" name="pay" value="1" checked><span class="radio_content">信用卡一次付清</span></div>
                                <div class="radio_box">
                                    <input type="radio" name="pay" value="2"><span class="radio_content">信用卡分期付款</span><span data-fancybox data-src="#modal" class="description_mark">分期銀行</span>
                                    <div style="display: none;" id="modal">
                                            <p>You are awesome!</p>
                                            <p>You are awesome!</p>
                                            <p>You are awesome!</p>
                                            <p>You are awesome!</p>
                                    </div>
                                </div>
                                <div class="radio_box">
                                    <input type="radio" name="pay" value="3"><span class="radio_content">線上匯款</span></div>
                            </div>
                    </div>
            </div>
        </section>
    <section class="item_12 item_13 item_17">
                <div class="index_conten ">
                    <!-- 會員名稱 -->
                        <div class="item_02_conten">
                                <div class="order_listbox">
                                    <h3>請選擇運送方式</h3>
                                    <a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html" href="javascript:;" class="description_q transition" class="description_q transition" href="#" title="付款說明">?</a></div>
                                <div class="order_listbox item_17_mobile">
                                    <div class="radio_box">
                                        <input type="radio" name="transport" value="1" ><span class="radio_content">到店取貨<span class="description_mark">＄0</span></span></div>
                                    <div class="radio_box">
                                        <input type="radio" name="transport" value="2" checked><span class="radio_content">宅配到府<span class="description_mark">＄800</span></span></div>
                                </div>
                        </div>

                        <div class="order_listbox order_listbox_tatle item_conten_button">
                            <div>
                                <a href="javascript:history.go(-1)" class="palette_btn palette_btn_back" title="繼續購物">繼續購物</a>
                                <?php if (isset($_SESSION['user'])): ?>
                                    <input type="submit" onclick="location.href='shoppingcar_02.php'" value="前往結帳">
                                <?php else: ?>
                                    <input type="submit" onclick="location.href='login.php'" value="前往登入">
                                <?php endif ?>
                            </div>
                        </div>
                </div>
            </section>
</div>
<div class="index_footer">
    <script>
        //點結帳傳值
        function checkForm() {
            $.post('shoppingcar_01_api.php', $(document.form1).serialize(), function (data) {

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


        //        購物車垃圾桶
        $('.icon_garbage').click(function () {
            var tr = $(this).closest('.order_listbox');
            var sid = tr.attr('data-sid');

            $.get('add_to_cart.php', {sid: sid}, function (data) {
                // location.href=location.href;//此行是重新讀取頁面
                tr.remove();//要等ajax回來才可以做刪除動作
                // changeQty(data);
                calTotal();//改變選單數量再去呼叫它calTotal，讓他重算
            }, 'json');
        });

        // 點選收藏後加class
        $(".icon_love,.product_favorate").click(function (data) {
            <?php if (isset ($_SESSION['user'])):?>
            if ($(this).hasClass('icon_love_click')) {
                $(this).removeClass("icon_love_click");
                var product = $(this).closest('.product-item');
                var sid = product.attr('data-sid');
                $.get('unlove_api.php', {sid: sid}, function (data) {
                    //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)
                    if (data.success) {
                        console.log(data);
                        alert('商品已從追蹤清單刪除！');


                    } else {
                        alert('你登入了嗎？');
                        $(this).removeClass("icon_love_click");

                    }
                    ;

                }, 'json');
            } else {
                $(this).addClass("icon_love_click");
                var product = $(this).closest('.product-item');
                var sid = product.attr('data-sid');
                $.get('love_api.php', {sid: sid}, function (data) {
                    //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)

                    if (data.success) {
                        console.log(data);
                        alert('商品已加入追蹤清單！');

                    } else {

                        alert('你登入了嗎？');
                        $(this).addClass("icon_love_click");

                    }
                    ;

                }, 'json');
            }
            <?php else:?>
            alert('你登入了媽？！啾咪～');
            <?php endif;?>
        });


    </script>
<?php include 'page_item/footer.php';?>
</div>
</body>
</html>