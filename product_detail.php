<?php

require __DIR__ . '/__db_connect.php';


if(isset($_GET['id'])) {
    $sql = sprintf('SELECT * FROM `products_list` WHERE 1 AND `product_sid`='.$_GET['id']);
    $rs = $mysqli->query($sql);
    $r = $rs->fetch_assoc();

    if($r['same']!==0) {
        $sql2 = "SELECT * FROM `products_list` WHERE `same`=". $r['same'];

        $rs2 = $mysqli->query($sql2);

        $s_same = [];

        while ($c = $rs2->fetch_assoc()) {
            $s_same[$c['product_sid']] = $c;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product_detail.css">
    <link rel="stylesheet" href="js/swiper/css/swiper.min.css">


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
            height: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        .swiper-container3 {
            width: 100%;
            height: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        .swiper-slide {
            height: 155px;
            text-align: center;
            font-size: 18px;
            background: #fff;

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
        .color1,.color2,.color3,.color4,.color5,.color6,.color7,.color8,.color9,.color10,.color11,.color12,.color13{
            width: 25px;
            height: 25px;
            border-radius: 50%;
            display: inline-block;
            margin-left: 2px;
        }
        .color1{
        background-color: #802929;
    }
    .color2{
        background-color: #da9480;
    }
    .color3{
        background-color: #c55638;
    }
    .color4{
        background-color: #2e4553;
    }
    .color5{
        background-color: #407060;
    }
    .color6{
        background-color: #d89d54;
    }
    .color7{
        background-color: black;
    }
    .color8{
        background-color: white;
    }
    .color9{
        background-color: #999;
    }
    .color10{
        background-color: #736558;
    }
    .color11{
        background-color: #D59A54;
    }
    .color12{
        background-color: #70929E;
    }
    .color13{
        background-color: #80346D;
    }
    </style>
</head>

<body>
    <div class="index_main">
        <!-- 麵包屑
        <section class="bread_crumbs bread_crumbs_b">
            <ul>
                <li>
                    <a href="#">home</a>
                </li>
                <li>
                    <a href="#">product red</a>
                </li>
                <li>
                    <a href="#">Swoon Chair Space Copenhagen</a>
                </li>
            </ul>
        </section> -->
        <div id="product_detail_01">
            <section class="">
                <div class="index_conten_flex product_detail_01 card" data-sid="<?= $r['product_sid'] ?>">
                    <!-- 左邊 -->
                    <div class="product_detail_01_left flex">
                        <div class="product_detail_01_topic">
                            <h2 class="product_detail_01_h2"><?= $r['product_name'] ?></h2>
                            <div class="s_rate flex">
                                <h3 class="product_detail_01_h3">by <?= $r['designer'] ?>&nbsp;&nbsp;</h3>
                                <div class="s_star"></div>
                                <h4 class="product_detail_01_h4">&nbsp;<?= $r['star'] ?>&nbsp;&nbsp;(<?= $r['howmuch_star'] ?>筆評論)</h4>
                            </div>
                        </div>
                        <div class="product_detail_image">
                            <img class="img-good" src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                        </div>
                    </div>
                    <!-- 右邊 -->
                    <div class="flex product_detail_01_right">
                        <div class="s_sale_01">
                            <h5 class="product_detail_01_h5">週年慶活動期間Swoon滿兩件免費到府安裝</h5>
                        </div>
                        <div class="s_sale_02">
                            <h5 class="product_detail_01_h5">國泰銀行刷卡分期免利息</h5>
                        </div>
                        <div class="product_detail_01_description">
                            <h6 class="product_detail_01_h6"><?= $r['introduction'] ?></h6>
                            <h7 class="product_detail_01_h7"><?= $r['product_size'] ?></h7>
                        </div>
                        <div class="product_detail_01_price">
                            <h8 class="product_detail_01_h8">
                                <span style="font-family: Georgia" class="sub-total2"></span>
                                <span style="font-size: 12px; color:#666; text-decoration: line-through" data-totalprice="<?= $r['price'] ?>" class="sub-total"></span>
                            </h8>
                        </div>

                        <div class="product_detail_01_color">
                            <?php if(($r['same']!=0)):?>
                                <div class="product_quicklook_01_color">
                                    <?php foreach($s_same as $k=>$v): ?>
                                        <div class="choose_color color<?= $v['product_color_sid'] ?> transition"
                                             data-sid="<?= $v['product_sid'] ?>" data-img="<?= $v['img'] ?>"></div>
                                    <?php endforeach; ?>
                                </div>
                            <?php else:?>
                                <div></div>
                            <?php endif;?>
                        </div>
                        <div class="product_detail_01_btns flex">
                            <div class="s_product_detail_01_num palette_select">
                                <select class="qty">
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                    <option>05</option>
                                </select>
                            </div>
                            <button class="add_to_cart">
                                <h5 class="product_detail_01_h5">
                                    <span style="font-family:'Noto Sans TC';line-height: 40px">加入購物車</span>
                                </h5>
                            </button>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div id="product_detail_02">
            <section>
                <div class="index_conten_flex product_detail_02">
                    <div class="product_detail_02_topic flex">
                        <div class="product_detail_02_topic_left">
                            <h2 class="product_detail_02_h2">Build The Perfect Room</h2>
                            <h3 class="product_detail_02_h3">居家布置提案</h3>
                        </div>
                        <div class="product_detail_02_topic_right">
                            <h4 class="product_detail_02_h4">
                                <span style="font-family: Georgia">$</span>38,970</h4>
                        </div>
                    </div>
                    <ul class="product_detail_02_group">
                        <li class="product_detail_02_group_pic">
                            <!-- <img src="images/tonella_02.jpg" alt=""> -->
                        </li>
                        <li class="product_detail_02_box1">
                            <a href="">
                                <li class="product_detail_02_box1">
                                    <h5 class="product_detail_02_h5">see all products</h5>
                                </li>
                            </a>
                    </ul>
                    <div class="product_detail_02_pname">
                        <h6 class="product_detail_02_h6">Swoon Chair | Marble Table Set | Haiku Bubbly Light</h6>
                    </div>
                </div>
            </section>

        </div>
        <section id="product_detail_03">
            <div class="index_conten product_detail_03">
                <div class="product_detail_03_sec1 flex">
                    <div class="product_detail_03_sec1_left flex">
                        <div class="product_detail_03_sec1_left01">
                            <div class="product_detail_03_sec1_txt">
                                <h2 class="product_detail_03_h2" style="color: #fff;letter-spacing: 0.05em">Tonella
                                    <br>Arm Chair</h2>
                            </div>
                        </div>
                        <div class="product_detail_03_sec1_left02">
                            <div class="product_detail_03_sec1_txt">
                                <h2 class="product_detail_03_h2">From
                                    <br>Copenhagen</h2>
                                <h3 class="product_detail_03_h3">一打開家門，都希望映入眼簾的是舒適清爽的環境，感受到的是放鬆無壓的氛圍，讓你一走進就感受到溫暖寧靜。觀察過許多不同類型的裝修風格，發現最能恆久，百看不厭，也最能讓人感受療癒，就是利用中性色調，營造出自然柔和的感受。所謂的中性色調，就如同象牙白、米色、灰、駝色和咖啡等色系，運用在家居裝飾上，能營造出小空間的寬闊感，也能呼應自然光，襯托出空間寧靜愜意的感受。</h3>
                            </div>
                        </div>
                        <div class="product_detail_03_sec1_left03"></div>
                    </div>
                    <div class="product_detail_03_sec1_right flex">
                        <div class="product_detail_03_sec1_right01"></div>
                        <div class="product_detail_03_sec1_right02"></div>
                        <div class="product_detail_03_sec1_right03">
                            <div class="product_detail_03_sec1_txt">
                                <h2 class="product_detail_03_h2" style="color: #fff">Comes
                                    <br>In
                                    <br>Various
                                    <br>Sizes</h2>
                            </div>
                        </div>
                        <div class="product_detail_03_sec1_right04">
                            <div class="product_detail_03_sec1_txt">
                                <h3 class="product_detail_03_h3" style="font-size: 20px;font-weight: 500; font-family:'SourceHanSerifTC-Bold';letter-spacing: 0.05em;margin-top:0">商品尺寸</h3>
                                <h3 class="product_detail_03_h3">
                                    寬度: 150cm 高度: 85cm 深度: 150cm
                                    <br> 淨重: 2.45kg
                                    <br> 材質密度: 0.93cbm
                                    <br> 英格蘭短羊毛 80%
                                    <br>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product_detail_03_sec2">
                    <div class="product_detail_03_sec2_01">
                        <div class="product_detail_03_sec2_01_bg">
                            <div class="product_detail_03_sec2_01_bg_box">
                                <div class="product_detail_03_sec1_txt">
                                    <h2 class="product_detail_03_h2" style="color:#fff">The Dream Chair
                                        <br>That Lits Up
                                        <br>Your Home</h2>
                                </div>
                            </div>
                        </div>
                        <div class="product_detail_03_sec2_01_top">
                            <div class="product_detail_03_sec2_01_top_box"></div>
                        </div>
                    </div>
                    <div class="product_detail_03_sec2_03"></div>
                </div>
            </div>
        </section>
        <div id="product_detail_04">
            <section>
                <div class="index_conten_flex product_detail_04">
                    <div class="product_detail_04_topic">
                        <h2 class="product_detail_04_h2">Recommendations</h2>
                        <h3 class="product_detail_04_h3">推薦商品</h3>
                    </div>
                    <div class="product_detail_04_products">
                        <!-- Swiper -->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- 一組商品 -->
                                <div class="product_box swiper-slide">
                                    <img src="images/H-blue-chair-11.png" alt="商品名稱">
                                </div>
                                <!-- 一組商品 -->
                                <div class="product_box swiper-slide">
                                    <img src="images/H-yellow-chair-06.png" alt="商品名稱">
                                </div>
                                <!-- 一組商品 -->
                                <div class="product_box swiper-slide">
                                    <img src="images/H-light-07.png" alt="商品名稱">
                                </div>
                                <!-- 一組商品 -->
                                <div class="product_box swiper-slide">
                                    <img src="images/H-blue-chair-10.png" alt="商品名稱">
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>
            <div style="display: none;" id="modal">
                <div id="product_quicklook">
                    <div class="">
                        <section>
                            <div class="product_quicklook_01">
                                <!-- 左邊 -->
                                <div class="product_quicklook_01_left flex">
                                    <div class="product_quicklook_01_topic">
                                        <h2 class="product_quicklook_01_h2">Swoon Chair Space Copenhagen</h2>
                                        <div class="s_rate flex">
                                            <h3 class="product_quicklook_01_h3">by Fredericia Furniture&nbsp;&nbsp;</h3>
                                            <div class="s_star"></div>
                                            <h4 class="product_quicklook_01_h4">&nbsp;&nbsp;5.0 (32筆評論)</h4>
                                        </div>
                                    </div>
                                    <div class="product_quicklook_image">
                                        <img src="images/H-orange-chair-07.png" alt="">
                                    </div>
                                </div>
                                <!-- 右邊 -->
                                <div class="flex product_quicklook_01_right">
                                    <div class="s_sale_01">
                                        <h5 class="product_quicklook_01_h5">週年慶期間滿兩件免費到府安裝</h5>
                                    </div>
                                    <div class="s_sale_02">
                                        <h5 class="product_quicklook_01_h5">國泰銀行刷卡分期免利息</h5>
                                    </div>
                                    <div class="product_quicklook_01_description">
                                        <h6 class="product_quicklook_01_h6">商品描述</h6>
                                        <h7 class="product_quicklook_01_h7">一打開家門，都希望映入眼簾的是舒適清爽的環境，感受到的是放鬆無壓的氛圍，讓你一走進就感受到溫暖寧靜。觀察過許多不同類型的裝修風格，發現最能恆久，百看不厭，也最能讓人感受療癒，就是利用中性色調，營造出自然柔和的感受。
                                            <br>
                                            <br>
                                        </h7>
                                    </div>
                                    <div class="product_quicklook_01_price">
                                        <h8 class="product_quicklook_01_h8">
                                            <span style="font-family: Georgia">$</span>16,970
                                            <span style="font-size: 12px; color:#666; text-decoration: line-through">
                                                21,300</span>
                                        </h8>
                                    </div>
                                    <div class="product_quicklook_01_color">
                                        <div class="choose_color color01 transition"></div>
                                        <div class="choose_color color02 transition"></div>
                                        <div class="choose_color color03 transition"></div>
                                    </div>
                                    <div class="product_quicklook_01_btns flex">
                                        <div class="s_product_quicklook_01_num flex">
                                            <a href="">-</a>
                                            <p>1</p>
                                            <a href="">+</a>
                                        </div>
                                        <button class="add_to_cart">
                                            <h5 class="product_quicklook_01_h5">
                                                <span style="font-family:'Noto Sans TC';line-height: 40px">加入購物車</span>
                                            </h5>
                                        </button>
                                    </div>
                                    <button class="ql_more">
                                        <h5 class="product_quicklook_01_h5">了解商品詳情</h5>
                                    </button>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div id="product_detail_05">
            <section>
                <div class="index_conten_flex product_detail_05">
                    <div class="product_detail_05_topic">
                        <h2 class="product_detail_05_h2">Style Insights</h2>
                        <h3 class="product_detail_05_h3">風格專欄</h3>
                    </div>
                    <div class="product_detail_05_article">
                        <!-- Swiper -->
                        <div class="swiper-container3">
                            <div class="swiper-wrapper">
                                <div class="product_detail_05_article_01 swiper-slide" style="height: 100%;">
                                    <img src="images/about/41652216105_5fd10f9ef8_k.jpg" alt="" style="width: 100%;height: 100%;object-fit: cover;">
                                    <a href="/" class="product_detail_05_article_box transition">
                                        <div class="article_txt flex">
                                            <div class="article_date">
                                                <div class="article_date_deco"></div>2018 JUN 23</div>
                                            <div class="article_topic">七個裝潢提案,將你的公寓改造成宜人的居住空間。</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_detail_05_article_02 swiper-slide" style="height: 100%;" style="width: 100%;height: 100%;object-fit: cover;">
                                    <img src="images/about/27855179879_0f2427679a_b.jpg" alt="">
                                    <a href="/" class="product_detail_05_article_box transition">
                                        <div class="article_txt flex">
                                            <div class="article_date">
                                                <div class="article_date_deco"></div>2018 AUG 08</div>
                                            <div class="article_topic">七個裝潢提案,將你的公寓改造成宜人的居住空間。</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination" style="margin-top: 20px;"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="product_detail_06">
            <section>
                <div class="index_conten product_detail_06">
                    <div class="product_detail_06_topic">
                        <h2 class="product_detail_06_h2">Share Your Taste</h2>
                        <h3 class="product_detail_06_h3">分享你的家</h3>
                    </div>
                    <div class="product_detail_06_ig">
                        <!-- Swiper -->
                        <div class="swiper-container2">
                            <div class="swiper-wrapper">
                                <div class="ig_box2 ig_pic1 ig_hover transition swiper-slide">
                                    <img src="images//banner/049.jpg" alt="">
                                </div>
                                <div class="ig_box2 ig_pic2 ig_hover transition swiper-slide">
                                    <img src="images//banner/Sancal-Catalogo-Pink_book-02.jpg" alt="">
                                </div>
                                <div class="ig_box2 ig_pic3 ig_hover transition swiper-slide">
                                    <img src="images//banner/Muuto-Stacked-Regal-Regalmodule-mit-Tuer-Oslo-Sofa-Ply-Rug-Teppich-Ambiente.jpg" alt="">
                                </div>
                                <div class="ig_box2 ig_pic4 ig_hover transition swiper-slide">
                                    <img src="images//banner/terzopiano-3d-render-graniti-fiandre-marble-lab-project-cersaie-2016.jpg" alt="">
                                </div>
                                <div class="ig_box2 ig_pic5 ig_hover transition swiper-slide">
                                    <img src="images//banner/Sancal-Catalogo-Pink_book-02.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_detail_06_hashtag">
                        <ul>
                            <a href="">
                                <li class="transition">#thepalette</li>
                            </a>
                            <a href="">
                                <li class="transition">#thepalettefurnniture</li>
                            </a>
                            <a href="">
                                <li class="transition">#betterlivingthroughcolor</li>
                            </a>
                            <a href="">
                                <li class="transition">#colordeco</li>
                            </a>
                            <a href="">
                                <li class="transition">#大膽用色</li>
                            </a>
                            <a href="">
                                <li class="transition">#家具</li>
                            </a>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="js/swiper/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 2,
            spaceBetween: 15,
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
                delay: 5500,
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
        var swiper = new Swiper('.swiper-container3', {
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
        });
    </script>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script>

        var dallorCommas = function (n) {    // 這是加$跟三三為單位中間加逗號
            return '$ ' + n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        };

        var items = $('.sub-total');

        items.each(function () {
            var p = parseInt($(this).attr('data-totalprice'));
            $(this).text(dallorCommas(p));
            $('.sub-total2').text(dallorCommas(p*0.85));


        });




        $(".choose_color").click(function(){
            $(this).css({
                "border": "3px solid #333",
                "border-radius": "50%"
            }).siblings().css("border","");

            var pid = $(this).attr('data-sid');
            var img = $(this).attr('data-img');
            $('.card').attr('data-sid', pid);
            $('.img-good').attr('src', 'images/'+img+'.png');
            console.log(pid);

        });
        //購物車功能
        $('.add_to_cart').click(function(){
            var card = $(this).closest('.card');
            var sid = card.attr('data-sid');
            var qty = card.find('.qty').val();
            console.log(`sid: ${sid}, qty: ${qty}`);

            $.get('add_to_cart.php', {sid:sid,qty:qty}, function(data){
                //發送給誰，送的參數(字串KEY:值)，callback函式(json格式)
                console.log(data);
                alert('商品已加入購物車！');
                //點上面購物車數量會變
                window.parent.changeQty(data);
                changeQty(data);
            }, 'json');
        });
    </script>
</body>

</html>