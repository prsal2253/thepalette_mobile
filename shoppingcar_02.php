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
    while($c = $rs3->fetch_assoc()){
//    這裡迴圈先一一取出$rs3陣列
        $c_ar[$c['product_color_sid']] = $c['color'];
//以'product_color_sid'當作key對應'color'的val
    }

}
?>
<style>
    .sale_icon{margin-bottom: 5px;}
</style>
<?php include 'page_item/head.php';?>
</head>
<body id="shoppingcar" class="shoppingcar_02">
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
                    <div class="step_box step_box_in"><span>02</span><span>填寫<br/>訂購資料</span></div>
                    <div class="step_box"><span>03</span><span>訂購完成</span></div>
                </div>
    </section>
        <form name="form1" method="post" action="" onsubmit="return checkForm()">
    <section class="item_12 item_13 item_17">
        <div class="index_conten ">
            <div class="item_02">
                <div class="item_02_conten">
                        <div class="order_listbox">
                                <h3>商品列表</h3>
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
                                <figure class="description_20"><a href="product_detail.php?id=<?= $r['product_sid'] ?>"><img src="images/<?= $r['img'] ?>.png"
                                                                                alt="<?= $r['product_name'] ?>"></a>
                                </figure>
                                <div class="description_70">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="product_detail.php?id=<?= $r['product_sid'] ?>" class="product_name" style="line-height:20px;"><?= $r['product_name'] ?></a>
                                    <div class="flex" style="">
                                    <p><?= $c_ar[$r['product_color_sid']] ?></p>
                                    <p style="margin:0 5px;"> x </p>
                                    <p class="product-item-qty"
                                       data-qty="<?= $r['qty'] ?>"><?= $r['qty'] ?></p>
                                    <p class="product-item-price"
                                       data-price="<?= $r['price'] ?>" style="margin:0 5px;">$<?= $r['price'] ?></p>
                                    </div>
                                </div>
                                <div class="description_10"></div>
                        </div>
                    <?php endforeach; ?>
                    <div class="order_listbox order_listbox_tatle">
                        <p>總共 <span class="description_mark" id="total-qty"><?= $total_qty ?></span>
                            件商品，小計<span class="description_mark"><h3 class="product_price"
                                                                     id="total-price"></h3></span></p>
                    </div>
                    <?php if ($_SESSION['sighup_transport'] == 2): ?>
                        <div class="order_listbox order_listbox_tatle">
                            <p>＋貨運運費<h3 class="product_price">＄800</h3></p>
                        </div>
                    <?php else: ?>
                    <?php endif; ?>
                    <div class="order_listbox order_listbox_tatle">
                        <p>總金額</p>
                        <h3 class="product_price" id="pay-price"></h3>
                    </div>
                    </div>
            </div>
        </div>
        <?php endif ?>
    </section>
    <section class="item_02 item_12 item_13 item_17 item_18">
                <div class="index_conten_flex">
                                <div class="item_18box">
                                    <div class="order_listbox">
                                        <h3>訂購人</h3>
                                        <a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html" href="javascript:;" class="description_q transition" href="#" title="付款說明">?</a></div>
                                    
                                            <div class="item_02_conten">
                                                    <div class="item_02_conten_l">訂購人</div>
                                                    <div class="item_02_conten_r">
                                                        <input type="text" name="orderer_name" placeholder="請輸入訂購人姓名">

                                                    </div>
                                            </div>

                                            <!-- 聯絡電話 -->
                                            <div class="item_02_conten">
                                                    <div class="item_02_conten_l">e-mail</div>
                                                    <div class="item_02_conten_r">
                                                    <input type="text"  name="orderer_email" placeholder="請輸入email">
                                                     </div>
                                            </div>
                        
                                            <!-- 聯絡電話 -->
                                            <div class="item_02_conten">
                                                    <div class="item_02_conten_l">手機號碼</div>
                                                    <div class="item_02_conten_r">
                                                    <input type="text"  name="orderer_mobile"  placeholder="請輸入手機號碼">
                                                     </div>
                                            </div>
                        
                                            <!-- 聯絡地址 -->
                                            <div class="item_02_conten">
                                                    <div class="item_02_conten_l">聯絡地址</div>
                                                    <div class="item_02_conten_r">
                                                        <div class="palette_select">
                                                            <!--------------    地址選項S ------------->
                                                            <div id="twzipcode">
                                                                <div name="orderer_city"
                                                                     placeholder="請選擇城市"
                                                                     data-role="county"
                                                                     data-name="address_city"
                                                                     data-value="<?= $_SESSION['user']['address_city'] ?>"
                                                                     data-style="樣式名稱">
                                                                </div>
                                                                <div name="orderer_side"
                                                                     placeholder="請選擇地區"
                                                                     data-role="district"
                                                                     data-name="address_side"
                                                                     data-value="<?= $_SESSION['user']['address_side'] ?>"
                                                                     data-style="district-style">
                                                                </div>
                                                                <div name="orderer_post"
                                                                     placeholder="郵遞區號"
                                                                     data-role="zipcode"
                                                                     data-name="address_post"
                                                                     data-value="<?= $_SESSION['user']['address_post'] ?>"
                                                                     data-style="zipcode-style">
                                                                </div>
                                                            </div>
                                                            <input type="text" class="margin_top" name="orderer_address"
                                                                   placeholder="請輸入街路巷地址" value="">
                                                        </div>
                                                        <!--------------    地址選項E -------------->
                                                    </div>
                                            </div>
                                    
                                </div>

                                <div class="item_18box">
                                        <div class="order_listbox">
                                            <h3>收件人</h3>
                                            <div class="radio_box">
                                                    <input type="checkbox" name="" value="">
                                                    <span class="radio_content">同訂購人</span></div>
                                            <a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html" href="javascript:;" class="description_q transition" href="#" title="付款說明">?</a></div>
                                        
                                                <div class="item_02_conten">
                                                        <div class="item_02_conten_l">收件人姓名</div>
                                                        <div class="item_02_conten_r">
                                                            <input type="text" name="sender_name" placeholder="請輸入收件人姓名">
    
                                                        </div>
                                                </div>
    
                                                <!-- 聯絡電話 -->
                                                <div class="item_02_conten">
                                                        <div class="item_02_conten_l">e-mail</div>
                                                        <div class="item_02_conten_r">
                                                        <input type="text" name="sender_email" placeholder="請輸入email">
                                                         </div>
                                                </div>
                            
                                                <!-- 聯絡電話 -->
                                                <div class="item_02_conten">
                                                        <div class="item_02_conten_l">聯絡電話</div>
                                                        <div class="item_02_conten_r">
                                                        <input type="text" name="sender_mobile" placeholder="請輸入手機號碼">
                                                         </div>
                                                </div>
                            
                                                <!-- 聯絡地址 -->
                                                <div class="item_02_conten">
                                                        <div class="item_02_conten_l">聯絡地址</div>
                                                        <div class="item_02_conten_r">
                                                            <div class="palette_select">
                                                                <!--------------    地址選項S ------------->
                                                                <div id="twzipcode2">
                                                                    <div name="sender_city"
                                                                         placeholder="請選擇城市"
                                                                         data-role="county"
                                                                         data-name="address_city"
                                                                         data-value=""
                                                                         data-style="樣式名稱">
                                                                    </div>
                                                                    <div name="sender_side"
                                                                         placeholder="請選擇地區"
                                                                         data-role="district"
                                                                         data-name="address_side"
                                                                         data-value=""
                                                                         data-style="district-style">
                                                                    </div>
                                                                    <div name="sender_post"
                                                                         placeholder="郵遞區號"
                                                                         data-role="zipcode"
                                                                         data-name="address_post"
                                                                         data-value=""
                                                                         data-style="zipcode-style">
                                                                    </div>
                                                                </div>
                                                                <input type="text" class="margin_top" name="sender_address"
                                                                       placeholder="請輸入街路巷地址" value="">
                                                            </div>
                                                            <!--------------    地址選項E -------------->
                                                        </div>
                                                </div>
                                        
                                    </div>
        
                </div>
    </section>
    <section class="item_12 item_13 item_17 ">
            <div class="index_conten item_18_mobile">
                <!-- 會員名稱 -->
                    <div class="item_02_conten">
                            <div class="order_listbox">
                                <h3>發票</h3>
                                <a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html" href="javascript:;" class="description_q transition" title="付款說明">?</a></div>
                            <div class="order_listbox">
                                <div class="description_10 radio_box ">
                                    <input type="radio" name="invoice" value="1" checked>
                                    <span class="radio_content">捐贈</span>
                                </div>
                                <div class="palette_select description_70">
                                        <select class=" ">
                                        <option>關懷社會愛心基金會</option>
                                        <option>愛心碼</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="order_listbox">
                                <div class="description_10 radio_box">   
                                    <input type="radio" name="invoice" value="2">
                                    <span class="radio_content">電子發瞟</span>
                                </div>
                                <div class="palette_select description_60">
                                        <select class=" ">
                                        <option>電子載具</option>
                                        <option>個人手機條碼載具</option>
                                        </select>
                                </div>
                            </div>
                            <div class="order_listbox">
                                <div class="description_10 radio_box">
                                    <input type="radio" name="invoice" value="3">
                                    <span class="radio_content">紙本發票</span>
                                </div>
                                <div class="description_30"><input type="text" placeholder="統一編號"></div>
                                <div class="description_30"><input type="text" class="description_25" placeholder="公司抬頭"></div>
                            </div>
                        
                    </div>

                    <div class="order_listbox order_listbox_tatle item_conten_button">
                            <div>
                                <input type="button" class="palette_btn_back" onclick="history.back()" value="回上一頁">
                                <input type="submit" onclick="location.href='shoppingcar_03.php'" value="商品結帳">
                            </div>
                     </div>
            </div>
        </section>
        </form>
</div>
<!--    地址選項S -->
<script>$('#twzipcode').twzipcode();</script>
<script>$('#twzipcode2').twzipcode();</script>
<!--    地址選項E -->
<script>
    //點結帳傳值
    function checkForm() {
        $.post('shoppingcar_02_api.php', $(document.form1).serialize(), function(data){

        }, 'json');
        return false;
    };

    // 同訂購人按鈕
    var checkbox = $("#checkbox");

    checkbox.click(function () {
        var personName = $(".item_18box:first-child").find("input").eq(0).val();
        var personEmail = $(".item_18box:first-child").find("input").eq(1).val();
        var personMobile = $(".item_18box:first-child").find("input").eq(2).val();
        var personCity = $(".item_18box:first-child").find("select[name='address_city']").prop('selectedIndex');
        var personSide = $(".item_18box:first-child").find("select[name='address_side']").prop('selectedIndex');
        var personPost = $(".item_18box:first-child").find("input").eq(3).val();
        var personAddress = $(".item_18box:first-child").find("input").eq(4).val();
        $(".item_18box:last-child").find("input").eq(1).val(personName);
        $(".item_18box:last-child").find("input").eq(2).val(personEmail);
        $(".item_18box:last-child").find("input").eq(3).val(personMobile);
        $(".item_18box:last-child").find("select[name='address_city']").prop('selectedIndex', personCity);
        $(".item_18box:last-child").find("select[name='address_side']").prop('selectedIndex', personSide);
        $(".item_18box:last-child").find("input").eq(4).val(personPost);
        $(".item_18box:last-child").find("input").eq(5).val(personAddress);
        if ($(this).prop("checked") == true) {
            console.log("ready to copy... ");
            var cityValue = $("select[name=address_side]").find("option").eq($("select[name=address_side]").prop("selectedIndex")).val();
            var cityText = $("select[name=address_side]").find("option").eq($("select[name=address_side]").prop("selectedIndex")).text();
            console.log(cityValue);
            console.log(cityText);
            var newOption = document.createElement("option");
            $(newOption).prop("value", cityValue);
            $(newOption).text(cityText);
            $(".item_18box:last-child").find("select[name='address_side']").html(newOption);
        }
    });





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
<?php include 'page_item/footer.php';?>
</div>
</body>
</html>