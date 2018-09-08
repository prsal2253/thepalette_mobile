<?php

//require __DIR__ . '/__db_connect.php';
$mysqli = new mysqli('localhost', 'orange', '0987', 'the palette');
//$mysqli = new mysqli('localhost', 'sandra', 'ssan+1222', 'the palette');
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

$where = " WHERE `product_color_sid` BETWEEN 7 AND 9 ";

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
        </style>
</head>
<!-- 頁面ID -->
<body id="sort_black">
    <!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>

    <div id="sort_black01">
        <section>
            <div class="sort_black01">
                <div class="sort_black01_bg">
                    <div class="sort_black01_bg_l"></div>
                    <div class="sort_black01_bg_r"></div>
                </div>
                <div class="sort_black01_top">
                    <figure>
                        <div class="sort_black01_top_topic">
                            <h2>black
                                <br>Pink
                                <br>Orange</h2>
                            <br>
                            <h3>紅 橘 粉</h3>
                        </div>
                        <div class="sort_black01_top_box1"></div>
                        <div class="sort_black01_top_box2"></div>
                    </figure>
                </div>
            </div>
        </section>
    </div>
    <!-- 顏色1 -->
    <div id="" class="transition changebg">
        <section>
            <div class="index_conten_flex sort_black02">
                <div class="sort_black02_intro">

                    <div class="sort_black02_intro_top">
                        <div class="sort_black02_intro_bg"></div>
                        <div class="sort_black02_intro_img"></div>
                    </div>
                    
                    <div class="sort_black02_intro_txt">
                        <h2 class="sort_black02_h2">black</h2>
                        <h3>熱情的紅 沉穩的紅 撩人的紅</h3>

                        <p>改編自 Jenny Han 的同名青春愛情小說，內容講述亞裔女孩 Lara Jean 這名默默無名的女孩，有著溫柔、聰穎的性格，卻十分內向。她的心思細膩，對那些「愛過的男孩們」卻不曾訴說心中的情感，這是她永藏心底的秘密。</p>
                    </div>
                </div>

                <div class="sort_black02_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_black03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product01 sort_black03_rec_product_img transition">
                                        <img src="images/H-pink-cabinet-01.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_l swiper-slide">
                                    <div class="sort_black03_rec_product02 sort_black03_rec_product_img transition">
                                         <img src="images/H-black-chair-06.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-black-chair-01.png" alt="">
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
            <div class="index_conten_flex sort_black03">
                <div class="sort_black03_intro">

                    <div class="sort_black03_intro_top">
                        <div class="sort_black03_intro_bg"></div>
                        <div class="sort_black03_intro_img"></div>
                    </div>
                    
                    <div class="sort_black03_intro_txt">
                        <h2 class="sort_black03_h2">Orange</h2>
                        <h3>熱情的橘 沉穩的橘 撩人的橘</h3>

                        <p>改編自 Jenny Han 的同名青春愛情小說，內容講述亞裔女孩 Lara Jean 這名默默無名的女孩，有著溫柔、聰穎的性格，卻十分內向。她的心思細膩，對那些「愛過的男孩們」卻不曾訴說心中的情感，這是她永藏心底的秘密。</p>
                    </div>
                </div>

                <div class="sort_black03_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_black03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product01 sort_black03_rec_product_img transition">
                                        <img src="images/H-orange-chair-04.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product02 sort_black03_rec_product_img transition">
                                         <img src="images/H-pink-chair-05.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-light-09.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
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
            <div class="index_conten_flex sort_black04">
                <div class="sort_black04_intro">

                    <div class="sort_black04_intro_top">
                        <div class="sort_black04_intro_bg"></div>
                        <div class="sort_black04_intro_img"></div>
                    </div>
                    
                    <div class="sort_black04_intro_txt">
                        <h2 class="sort_black04_h2">Pink</h2>
                        <h3>熱情的粉 沉穩的粉 撩人的粉</h3>

                        <p>改編自 Jenny Han 的同名青春愛情小說，內容講述亞裔女孩 Lara Jean 這名默默無名的女孩，有著溫柔、聰穎的性格，卻十分內向。她的心思細膩，對那些「愛過的男孩們」卻不曾訴說心中的情感，這是她永藏心底的秘密。</p>
                    </div>
                </div>

                <div class="sort_black04_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_black04_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product01 sort_black03_rec_product_img transition">
                                        <img src="images/H-pink-chair-09.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-pink-chair-03.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-pink-cabinet-02.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-pink-chair-07.png" alt="">
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
            $(this).css({
                "border": "3px solid #fff",
                "border-radius": "50%"
            }).children().css("color", "rgb(240,240,240)");
        });

        $(".filter_filter").click(function () {
            $(".filter_inner").toggleClass("show_filter_inner");
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

    </script>

</body>

</html>