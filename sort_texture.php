<?php

//require __DIR__ . '/__db_connect.php';
$mysqli = new mysqli('localhost', 'orange', '0987', 'the palette');
// $mysqli = new mysqli('localhost', 'sandra', 'ssan+1222', 'the palette');
$mysqli->query("SET NAMES utf8");
$pageName = 'product_list_red';

$build_query = [];

# 商品資料 begin>
$per_page = 16; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁
//intval取整數
$page1 = $page + 1;
$page2 = $page - 1;


$color = isset($_GET['color']) ? $_GET['color'] : 0; //顏色
$items = isset($_GET['items']) ? $_GET['items'] : 0;//種類
$long = isset($_GET['long']) ? intval($_GET['long']) : 0;//寬度
$high = isset($_GET['high']) ? intval($_GET['high']) : 0;//高度
$price = isset($_GET['price']) ? intval($_GET['price']) : 0; //時間價格

$where = " WHERE `product_color_sid` BETWEEN 11 AND 13 ";

if(!empty($color)){
    $c = explode(',', $color);
    $color_condition = ' AND (product_color_sid='. implode(' OR product_color_sid=', $c) . ')';
    // 2 OR product_color_sid=3
    $where .= $color_condition;
}

if(!empty($items)){
    $i = explode(',', $items);
    $items_condition = ' AND (category_sid='. implode(' OR category_sid=', $i) . ')';
    $where .= $items_condition;
}

if ($long == 50) {
    $where .= " AND `size_sid_w`=1";

} elseif ($long == 100) {
    $where .= " AND `size_sid_w`=2";

} elseif ($long == 150) {
    $where .= " AND `size_sid_w`=3";

}

if ($high == 50) {
    $where .= " AND `size_sid_h`=1";

} elseif ($high == 100) {
    $where .= " AND `size_sid_h`=2";

} elseif ($high == 150) {
    $where .= " AND `size_sid_h`=3";

}


if ($price == 1) {
    $where .= " ORDER BY `price` ASC ";

} elseif ($price == 2) {
    $where .= "  ORDER BY `price` DESC  ";

}elseif ($price == 3) {
    $where .= "  ORDER BY `publish_date` ASC  ";

}elseif ($price == 4) {
    $where .= "  ORDER BY `publish_date` DESC  ";

}


$total_sql = "SELECT COUNT(1) FROM `products_list` $where";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0]; //這邊拿到的是總筆數
$total_pages = ceil($total_rows / $per_page);


$product_sql = sprintf("SELECT * FROM  `products_list` $where LIMIT %s, %s ", ($page - 1) * $per_page, $per_page);

//echo $product_sql; exit;
//這裡會拿到sql的字串
$product_rs = $mysqli->query($product_sql);

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
?>
<?php include 'page_item/head.php';?>
    <style>
            html,
            body {
                position: relative;
                height: 100%;
            }
    
            body {
                font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                font-size: 14px;
                color: #000;
                margin: 0;
                padding: 0;
            }
    
            .swiper-container, .swiper-container2 {
                width: 100%;
                height: 40vh;
                margin-left: auto;
                margin-right: auto;
            }
            .swiper-slide {
                
                text-align: center;
                font-size: 18px;
    
                /* Center slide text vertically */
                display: -webkit-box;
                display: -ms-flexbox;
                display: -webkit-flex;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                -webkit-justify-content: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                -webkit-align-items: center;
                align-items: center;
            }
    
            .swiper-pagination {
                position: relative;
            }
    
            .swiper-pagination-clickable .swiper-pagination-bullet {
                margin-right: 5px;
            }
            .filter_color11{ background-color:#DEB887;}
            .filter_color12{background-color:#F0F8FF;}
            .filter_color13{background-color:#8FBC8F;}
        </style>
</head>
<!-- 頁面ID -->
<body id="sort_texture">
    <!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>

    <div id="sort_texture01">
        <section>
            <div class="sort_texture01">
                <div class="sort_texture01_bg">
                    <div class="sort_texture01_bg_l"></div>
                    <div class="sort_texture01_bg_r"></div>
                </div>
                <div class="sort_texture01_top">
                    <figure>
                        <div class="sort_texture01_top_topic">
                            <h2>Texture
                                <br>Tone</h2>
                            <br>
                            <h3>材 質</h3>
                        </div>
                        <div class="sort_texture01_top_box1"></div>
                        <div class="sort_texture01_top_box2"></div>
                    </figure>
                </div>
            </div>
        </section>
    </div>
    <!-- 顏色1 -->
    <div id="" class="transition changebg">
        <section>
            <div class="index_conten_flex sort_texture02">
                <div class="sort_texture02_intro">

                    <div class="sort_texture02_intro_top">
                        <div class="sort_texture02_intro_bg"></div>
                        <div class="sort_texture02_intro_img"></div>
                    </div>
                    
                    <div class="sort_texture02_intro_txt">
                        <h2 class="sort_texture02_h2">Wood</h2>
                        <h3>木紋，最接近大自然的樣貌</h3>
                        <p>木頭是一種樸實的原料，不管是原始的樣貌，或者是經過專業的工匠精心雕琢，都可以展現不同的美麗面貌。利用木頭所打造而成的家具，，都可以為居家空間大加分。</p>
                    </div>
                </div>

                <div class="sort_texture02_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_texture03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=126" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product01 sort_texture03_rec_product_img transition">
                                        <img src="images/H-other-table-05.png" alt="">
                                    </div>
                                </a>

                                <a href="product_detail.php?id=127" class="sort_texture03_rec_product_l swiper-slide">
                                    <div class="sort_texture03_rec_product02 sort_texture03_rec_product_img transition">
                                         <img src="images/H-other-table-06.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=121" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-other-chair-03.png" alt="">
                                    </div>
                                </a>

                                <a href="product_detail.php?id=144" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-other-chair-07.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
            </div>
        </section>
    </div>

    <!-- 顏色2 -->
    <div id="" class="transition changebg">
        <section>
            <div class="index_conten_flex sort_texture03">
                <div class="sort_texture03_intro">

                    <div class="sort_texture03_intro_top">
                        <div class="sort_texture03_intro_bg"></div>
                        <div class="sort_texture03_intro_img"></div>
                    </div>
                    
                    <div class="sort_texture03_intro_txt">
                        <h2 class="sort_texture03_h2">Metal</h2>
                        <h3>金屬，創造新穎的時髦風格</h3>

                        <p>光澤質感的元素再度成為新一季的流行趨勢．在空間中加入銅色、銀色甚至一點金色吧。他們與室內設計中的基本色調相當搭配，能呈現煥然一新的面貌．</p>
                    </div>
                </div>

                <div class="sort_texture03_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_texture03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=133" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product01 sort_texture03_rec_product_img transition">
                                        <img src="images/H-candle-03.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=142" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product02 sort_texture03_rec_product_img transition">
                                         <img src="images/H-light-07.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=150" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-other-table-03.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=151" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-light-08.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- 顏色3 -->
    <div id="" class="transition changebg">
        <section>
            <div class="index_conten_flex sort_texture04">
                <div class="sort_texture04_intro">

                    <div class="sort_texture04_intro_top">
                        <div class="sort_texture04_intro_bg"></div>
                        <div class="sort_texture04_intro_img"></div>
                    </div>
                    
                    <div class="sort_texture04_intro_txt">
                        <h2 class="sort_texture04_h2">Material</h2>
                        <h3>建立自己理想中的質感生活。</h3>

                        <p>在每季樂此不疲地添置家飾品外，我們亦逐漸愛上搜集質感家品；閒時愉快地佈置家居，看著它一點一點的變成理想中的模樣，不知不覺就成為了極為療癒的紓壓途徑。</p>
                    </div>
                </div>

                <div class="sort_texture04_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_texture04_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=53" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product01 sort_texture03_rec_product_img transition">
                                        <img src="images/H-blue-table-02.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=148" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-other-table-09.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=143" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-other-chair-06.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=139" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-light-04.png" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- 商品列表 -->
    <div class="index_main">
        <div id="sort_red05">
            <section>
                <div class="index_conten_flex sort_red05">
                    <div id="filter" class="transition">

                        <div class="index_conten_flex filter">
                            <ul class="filter_sec1">
                                <li class="filter_filter transition">
                                    <figure></figure>商品篩選</li>
                                <select class="filter_byprice transition price_select" data-price="">
                                    <div class="s_product_detail_01_num palette_select">
                                        <option value="1">依價錢由低到高</option>
                                        <option value="2">依價錢由高到低</option>
                                        <option value="3">依上架順序由舊到新</option>
                                        <option value="4">依上架順序由新到舊</option>
                                    </div>
                                </select>
                            </ul>
                        </div>
                    </div>

                    <!-- 篩選展開 -->
                    <div class="index_conten_flex filter_inner transition total_change">
                        <div class="filter_color flex">
                            <div class="filter_color_in" style="margin-left: 0">
                                <div class="filter_color11 filter_color_box" data-color="wood"></div>
                                <p>木頭</p>
                            </div>
                            <div class="filter_color_in">
                                <div class="filter_color12 filter_color_box" data-color="metal"></div>
                                <p>金屬</p>
                            </div>
                            <div class="filter_color_in">
                                <div class="filter_color13 filter_color_box" data-color="other"></div>
                                <p>其他</p>
                            </div>
                        </div>
                        <ul class="filter_item flex">
                            <div class="filter_item_in1 flex">
                                <li class="filter_item01 filter_items transition" data-category="chair">
                                    <figure></figure>
                                    <p>椅子</p>
                                </li>
                                <li class="filter_item02 filter_items transition" data-category="table">
                                    <figure></figure>
                                    <p>桌子</p>
                                </li>
                                <li class="filter_item03 filter_items transition" data-category="sofa">
                                    <figure></figure>
                                    <p>沙發</p>
                                </li>
                            </div>
                            <div class="filter_item_in2 flex">
                                <li class="filter_item04 filter_items transition" data-category="box">
                                    <figure></figure>
                                    <p>櫃子</p>
                                </li>
                                <li class="filter_item05 filter_items transition" data-category="light">
                                    <figure></figure>
                                    <p>燈飾</p>
                                </li>
                                <li class="filter_item06 filter_items transition" data-category="other" style="margin: 50px 0 0 0">
                                    <figure></figure>
                                    <p>其他</p>
                                </li>
                            </div>
                        </ul>
                        <div class="filter_sbar flex">
                            <div class="filter_sbar1">
                                <!--寬度-->
                                <input id="range" type="range" min="50" max="150" value="150" step="50" oninput="change()"
                                       onchange="change()" class="slider slider_hight">
                                <div class="sbar1_txt">
                                    家具高度 :
                                    <span id="value">150</span> cm
                                </div>
                            </div>
                            <div class="filter_sbar2">
                                <!--高度-->
                                <input id="range2" type="range" min="50" max="150" value="0" step="50" oninput="change2()"
                                       onchange="change2()" class="slider slider_long">
                                <div class="sbar1_txt">
                                    家具寬度 :
                                    <span id="value2">150</span> cm
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="addall">
                        <div class="sort_red05_row flex">
                            <?php while ($r = $product_rs->fetch_assoc()): ?>
                                <a href="product_detail.php?id=<?= $r['product_sid'] ?>"
                                   name="product" class="sort_red05_box_s product_sid_data product-item" data-sid="<?= $r['product_sid'] ?>">
                                    <figure>
                                        <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                                    </figure>
                                    <div class="sort_red05_pname">
                                        <h2><?= $r['product_name'] ?></h2>
                                        <h3>$<?= $r['price'] ?></h3>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <!-- 頁碼 -->
                    <div class="sort_red05_page">

                    </div>
                </div>
            </section>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="js/swiper/js/swiper.min.js"></script>

    <script>
        // 背景變色
        $(window).scroll(function () {
            var scrolltop = $(this).scrollTop();
            if (scrolltop > 100 && scrolltop < 1500) {
                $(".changebg").css('background-color', '#662424');
            } else if (scrolltop > 1500 && scrolltop < 3000) {
                $('.changebg').css('background-color', '#c2704f');
            } else if (scrolltop > 3000) {
                $('.changebg').css('background-color', '#df9282');
            }
        });
        $(window).scroll(function() {
            var scrolltop = $(this).scrollTop();
            if (scrolltop>100 && scrolltop<1500){
                $(".changebox").css('background-color','#2e4553');
            }else if(scrolltop>1500 && scrolltop<3000){
                $('.changebox').css('background-color','#568080');
            }else if(scrolltop>3000){
                $('.changebox').css('background-color','#d89d54');
            }
        });

        // 選擇篩選顏色
        $(".filter_color_box").click(function () {
            $(this).toggleClass("toggle_color");
        });

        $(".filter_filter").click(function () {
            $(".filter_inner").toggleClass("filter_open");
        })
        //選選擇篩選品項
        $(".filter_items").click(function () {
            $(this).toggleClass("item_choose");
        })

        //顯示range的值
        function change() {
            var value = document.getElementById('range').value;
            document.getElementById('value').innerHTML = value;
            console.log("#value");
        }
        function change2() {
            var value = document.getElementById('range2').value;
            document.getElementById('value2').innerHTML = value;
            console.log("#value");
        }
  
        // swiper
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });

        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 2,
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });

        // var total_change = $('.total_change');

        var color_change = $('.total_change .filter_color_box');
        var items_change = $('.total_change .filter_items');
        var setHigh_change = $('.slider_hight');
        var setLong_change = $('.slider_long')

        var D_color = {wood: 0, metal: 0, other: 0},
            D_items  = {},
            D_setHigh = 0,
            D_setLong = 0,
            D_price = 0;

        color_change.click(function () {
            color_change.each(function () {
                if ($(this).hasClass('toggle_color')) {
                    D_color[ $(this).attr('data-color') ] = 1;
                } else {
                    D_color[ $(this).attr('data-color') ] = 0;
                }
            });
            console.log(D_color);
            get_select_data();

        });
        items_change.click(function () {
            items_change.each(function () {
                if ($(this).hasClass('item_choose')) {
                    D_items[ $(this).attr('data-category') ] = 1;
                } else {
                    D_items[ $(this).attr('data-category') ] = 0;
                }
            });
            console.log(D_items);
            get_select_data();
        });

        var high_select = 0;
        setHigh_change.change(function () {
            high_select = setHigh_change.val();
            D_setHigh = high_select;
            console.log(high_select);
            get_select_data();
        });
        var long_select = 0;
        setLong_change.change(function () {
            long_select = setLong_change.val();
            D_setLong = long_select;
            console.log(long_select);
            get_select_data();
        });


        var price_select = 0;
        $('.price_select').change(function () {
            price_select = $('.price_select').val();
            D_price = price_select;
            console.log(price_select);
            get_select_data();

        });



        var color_map = {
            wood: 11,
            metal: 12,
            other: 13
        };

        var item_map = {
            chair: 1,
            table: 2,
            sofa: 3,
            box: 4,
            light: 5,
            other: 6
        };



        function get_select_data(){
            var color = [],
                items = [],
                s, i;
            for(s in D_color){
                if(D_color[s]==1) {
                    color.push(color_map[s]);
                }
            }
            for(s in D_items){
                if(D_items[s]==1) {
                    items.push(item_map[s]);
                }
            }
            $.get('sort_texture_api.php', {
                color: color.join(','),
                items: items.join(','),
                high:D_setHigh,
                long:D_setLong,
                price:D_price
            }, function (data) {
                $('.addall').html(data);
            });
        }

        get_select_data()

        // 最愛

        $(".product_favorate").click(function (data) {
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
            alert('你登入了嗎？');
            <?php endif;?>
        });






    </script>

</body>

</html>