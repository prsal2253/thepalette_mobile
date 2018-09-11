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
            .filter_color3 { background-color: #c55638;}
            .filter_color6{ background-color: rgb(216, 157, 84);}
            .filter_color10{background-color: rgb(95, 78, 66);}
        </style>
</head>
<!-- 頁面ID -->
<body id="sort_earth">
    <!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>

    <div id="sort_earth01">
        <section>
            <div class="sort_earth01">
                <div class="sort_earth01_bg">
                    <div class="sort_earth01_bg_l"></div>
                    <div class="sort_earth01_bg_r"></div>
                </div>
                <div class="sort_earth01_top">
                    <figure>
                        <div class="sort_earth01_top_topic">
                            <h2>Earth
                            <br>Tone</h2>
                            <br>
                            <h3>大 地 色</h3>
                        </div>
                        <div class="sort_earth01_top_box1"></div>
                        <div class="sort_earth01_top_box2"></div>
                    </figure>
                </div>
            </div>
        </section>
    </div>
    
    <!-- 顏色1 -->
    <div id="" class="transition changebg">
        <section>
            <div class="index_conten_flex sort_earth02">
                <div class="sort_earth02_intro">

                    <div class="sort_earth02_intro_top">
                        <div class="sort_earth02_intro_bg"></div>
                        <div class="sort_earth02_intro_img"></div>
                    </div>
                    
                    <div class="sort_earth02_intro_txt">
                        <h2 class="sort_earth02_h2">Brown</h2>
                        <h3>沉穩的咖 穩定的咖 神秘的咖</h3>

                        <p>咖啡可說是最淳樸、最本質的顏色，更可帶來心理上的輕鬆和幸福感，為人帶來一份溫暖的好心情。任何場合都不會過時或者失誤的顏色，雖沒有明豔的色彩，但更能突顯一份成熟和優雅。</p>
                    </div>
                </div>

                <div class="sort_earth02_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_earth03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=116" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product01 sort_earth03_rec_product_img transition">
                                        <img src="images/H-brown-chair-08.png" alt="">
                                    </div>
                                </a>

                                <a href="product_detail.php?id=118" class="sort_earth03_rec_product_l swiper-slide">
                                    <div class="sort_earth03_rec_product02 sort_earth03_rec_product_img transition">
                                         <img src="images/H-brown-table-01.png" alt="">
                                    </div>
                                </a>

                                <a href="product_detail.php?id=109" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product03 sort_earth03_rec_product_img transition">
                                         <img src="images/H-brown-chair-01.png" alt="">
                                    </div>
                                </a>

                                <a href="product_detail.php?id=122" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product03 sort_earth03_rec_product_img transition">
                                         <img src="images/H-other-chair-10.png" alt="">
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
            <div class="index_conten_flex sort_earth03">
                <div class="sort_earth03_intro">

                    <div class="sort_earth03_intro_top">
                        <div class="sort_earth03_intro_bg"></div>
                        <div class="sort_earth03_intro_img"></div>
                    </div>
                    
                    <div class="sort_earth03_intro_txt">
                        <h2 class="sort_earth03_h2">Ginger</h2>
                        <h3>熱情的橘 輕快的橘 智慧的橘</h3>
                        <p>橙色在空氣中的穿透力僅次於紅色，色感較紅色溫暖，是所有色彩中最溫暖的顏色,令人聯想到節慶、豐收的秋天，光輝的太陽，是富足幸福快樂的顏色。橙色這樣具飽和度的色調雖不容易搭配，卻是一種很棒'很有特色，且獨具風格的顏色。</p>
                    </div>
                </div>

                <div class="sort_earth03_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_earth03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=14" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product01 sort_earth03_rec_product_img transition">
                                        <img src="images/H-orange-chair-02.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=4" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product02 sort_earth03_rec_product_img transition">
                                         <img src="images/H-red-chair-04.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=108" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product03 sort_earth03_rec_product_img transition">
                                         <img src="images/H-bottle-03.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=19" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product03 sort_earth03_rec_product_img transition">
                                         <img src="images/H-orange-chair-07.png" alt="">
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
            <div class="index_conten_flex sort_earth04">
                <div class="sort_earth04_intro">

                    <div class="sort_earth04_intro_top">
                        <div class="sort_earth04_intro_bg"></div>
                        <div class="sort_earth04_intro_img"></div>
                    </div>
                    
                    <div class="sort_earth04_intro_txt">
                        <h2 class="sort_earth04_h2">Yellow</h2>
                        <h3>溫暖的黃 快樂的黃 朝氣的黃</h3>

                        <p>有明快、輕薄的性格特徵，它也是早上第一道曙光的顏色，代表了太陽的光與熱，充滿了朝氣及希望，給人留下光明、輝煌、充實、成熟、溫暖、透明的感覺。</p>
                    </div>
                </div>

                <div class="sort_earth04_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_earth04_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=68" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product01 sort_earth03_rec_product_img transition">
                                        <img src="images/H-yellow-chair-06.png" alt="">
                                    </div>
                                </a>

                                <a href="product_detail.php?id=123" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product03 sort_earth03_rec_product_img transition">
                                        <img src="images/H-other-chair-11.png" alt="">
                                    </div>
                                </a>

                                <a href="product_detail.php?id=69" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product03 sort_earth03_rec_product_img transition">
                                        <img src="images/H-yellow-chair-07.png" alt="">
                                    </div>
                                </a>

                                <a href="product_detail.php?id=70" class="sort_earth03_rec_product_s swiper-slide">
                                    <div class="sort_earth03_rec_product03 sort_earth03_rec_product_img transition">
                                        <img src="images/H-yellow-table-01.png" alt="">
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
                                <div class="filter_color3 filter_color_box" data-color="orange"></div>
                                <p>橘色</p>
                            </div>
                            <div class="filter_color_in">
                                <div class="filter_color6 filter_color_box" data-color="yellow"></div>
                                <p>黃色</p>
                            </div>
                            <div class="filter_color_in">
                                <div class="filter_color10 filter_color_box" data-color="brown"></div>
                                <p>咖色</p>
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

                    

                    </div>
                </div>
            </section>
        </div>
    </div>
    <?php include 'page_item/footer.php';?>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="js/swiper/js/swiper.min.js"></script>

    <script>
        // 背景變色
        $(window).scroll(function () {
            var scrolltop = $(this).scrollTop();
            if (scrolltop > 100 && scrolltop < 1500) {
                $(".changebg").css('background-color', 'rgb(95, 78, 66)');
            } else if (scrolltop > 1500 && scrolltop < 2600) {
                $('.changebg').css('background-color', 'rgb(194, 112, 79)');
            } else if (scrolltop > 2600) {
                $('.changebg').css('background-color', 'rgb(216, 157, 84)');
            }
        });
        $(window).scroll(function() {
            var scrolltop = $(this).scrollTop();
            if (scrolltop>100 && scrolltop<1500){
                $(".changebox").css('background-color','rgb(95, 78, 66)');
            }else if(scrolltop>1500 && scrolltop<3000){
                $('.changebox').css('background-color','rgb(194, 112, 79)');
            }else if(scrolltop>3000){
                $('.changebox').css('background-color','rgb(216, 157, 84)');
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
        })


        // var total_change = $('.total_change');

        var color_change = $('.total_change .filter_color_box');
        var items_change = $('.total_change .filter_items');
        var setHigh_change = $('.slider_hight');
        var setLong_change = $('.slider_long')

        var D_color = {orange: 0, yellow: 0, brown: 0},
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
            orange: 3,
            yellow: 6,
            brown: 10
        };

        var item_map = {
            chair: 1,
            table: 2,
            sofa: 3,
            box: 4,
            light: 5,
            other: 6
        };



        function get_select_data(p){
            var page = p || 1;
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
            $.get('sort_earth_api.php', {
                page: page,
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