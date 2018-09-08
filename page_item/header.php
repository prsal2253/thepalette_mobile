<?php

if (!empty($_SESSION['cart'])) {
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
?>
    <header id="navbar"><h1><a class="palette_logo" href="index.php">The Palette</a></h1>
        <nav>
            <!-- cart icon -->
            <div class="car_icon transition"><a href="shoppingcar_01.php"><span class="qty-badge"></span></a></div>

            <div class="palette_menu">
                    <!-- menu icon -->
                    <div class="menu_icon">
                        <div class="bar transition"></div>
                        <div class="bar transition"></div>
                        <div class="bar transition"></div>
                    </div>
                    <!-- menu -->
                    <div class="palette_menu_open transition">
                        <div class="palette_menubox">
                            <div class="menubox_l" id="sbt_m_manuhover1">
                                    <h3 class="menutile">
                                        <a class="menutile_link" href="about.html">關於我們<span>About Us</span></a>
                                    </h3> 
                                    <h3 class="menutile" id="menutile">
                                    <a class="menutile_link" href="#">精選商品<span>Collections</span></a>
                                    <div class="menutile_box1">
                                    <a class="menutile_link2" href="sort_red.php">紅橘粉系列</a>
                                    <a class="menutile_link2" href="sort_blue.php">藍綠黃系列</a>
                                    <a class="menutile_link2" href="sort_black.php">黑白灰系列</a>
                                    <a class="menutile_link2" href="sort_earth.php">大地色系列</a>
                                    <a class="menutile_link2" href="sort_texture.php">材質系列</a>
                                    </div></h3>
                                    <h3 class="menutile">
                                        <a class="menutile_link" href="#">風格專欄<span>Articles</span></a></h3>
                                    <h3 class="menutile">
                                        <a class="menutile_link" href="#">最新活動<span>Latest Events</span></a></h3>
                                    <h3 class="menutile" id="menutile2">
                                        <a class="menutile_link" href="#">客戶服務<span>Service</span></a>
                                        <div class="menutile_box1">
                                                <a class="menutile_link2" href="#">線上客服</a>
                                                <a class="menutile_link2" href="#">常見問題</a>
                                                <a class="menutile_link2" href="#">運送說明</a>
                                                <a class="menutile_link2" href="#">安裝說明</a>
                                        </div>
                                    </h3>
                            </div>
                            <div class="menubox_r">
                                
                               
                                <!-- icon list -->
                                <div class="menu_iconbar">
                                    <a href="#">
                                        <div class="search_icon"></div>
                                        <span class="icontitle transition">站內搜尋</span>
                                    </a>

                                    <?php if (isset($_SESSION['user'])): ?>

                                    <a href="#">
                                        <div class="padunlock_icon"></div>
                                        <span class="icontitle transition">會員登出</span>
                                    </a>

                                    <a href="../order_list.html">
                                        <div class="member_icon"></div>
                                        <span class="icontitle transition">會員中心</span>
                                    </a>

                                    <?php else: ?>

                                    <a href="../login.html">
                                            <div class="padlock_icon"></div>
                                            <span class="icontitle transition">會員登入</span>
                                    </a>


                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        </nav>
    </header>
        <div class="go_top"></div>
    <script>
    // menu
        $(".menu_icon").click(function(){
            $(this).parents().find(".palette_menu").toggleClass("menu_active");
        });
    // tab
        $("#menutile,#menutile2").click(function(){
            $(this).toggleClass("open");
        });
    //go top & header class
    $(function(){
        $(window).scroll(function(){
		if( $(window).scrollTop() > 800){
            $(".go_top").fadeIn(800);
            $("#navbar").addClass('fixed_bg');
		}else{
            $(".go_top").fadeOut(600);
            $("#navbar").removeClass('fixed_bg');
		};
	})	
        $('.go_top').click(function(){
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ?
        $('html') : $('body')) : $('html,body');
        $body.animate({scrollTop: 0}, 600);
        return false;
        });
    });

         // 漢堡選單下滑收合 上滑顯示
         var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
        }
        
    // ____php_____
    $(".car_icon").click(function () {
        $(this).parents().find(".car_iconhover").toggleClass("menu_active");
        //即時更新
        $.get('./page_item/header_api.php', function (data) {
            $('.car_iconhover').html(data);
        }, 'text');
    });

    //    購物車功能區塊
    var changeQty = function (obj) {
        //這個函式丟一個物件進來
        var total = 0;
        for (var s in obj) {

            total += obj[s];
        }
        $('.qty-badge').text(total);
    };

    var changeSmallCart = function () {
        $.get('./page_item/header_api.php', function (data) {
            $('.car_iconhover').html(data);
        }, 'text');
    };
    $.get('add_to_cart.php', function (data) {
        changeQty(data);
        // $.get('header_api.php', function(data){
        //     $('.car_iconhover').html(data);
        // }, 'text');
    }, 'json');


    $('.icon_garbage').click(function (e) {
        var tr = $(this).closest('.order_listbox');
        var sid = tr.attr('data-sid');
        e.stopPropagation();
        //    氣泡事件
        $.get('./page_item/header_api.php', {sid: sid}, function (data) {
            tr.remove();//要等ajax回來才可以做刪除動作
            window.changeQty(data);
        }, 'json');

    });







    </script>