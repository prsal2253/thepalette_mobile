<?php
require __DIR__ . '/__db_connect.php';
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
<body id="sort_red">
    <!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>

    <div id="sort_red01">
        <section>
            <div class="sort_red01">
                <div class="sort_red01_bg">
                    <div class="sort_red01_bg_l"></div>
                    <div class="sort_red01_bg_r"></div>
                </div>
                <div class="sort_red01_top">
                    <figure>
                        <div class="sort_red01_top_topic">
                            <h2>Red
                                <br>Pink
                                <br>Orange</h2>
                            <br>
                            <h3>紅 橘 粉</h3>
                        </div>
                        <div class="sort_red01_top_box1"></div>
                        <div class="sort_red01_top_box2"></div>
                    </figure>
                </div>
            </div>
        </section>
    </div>
    <!-- 顏色1 -->
    <div id="" class="transition changebg">
        <section>
            <div class="index_conten_flex sort_red02">
                <div class="sort_red02_intro">

                    <div class="sort_red02_intro_top">
                        <div class="sort_red02_intro_bg"></div>
                        <div class="sort_red02_intro_img"></div>
                    </div>
                    
                    <div class="sort_red02_intro_txt">
                        <h2 class="sort_red02_h2">Red</h2>
                        <h3>熱情的紅 沉穩的紅 撩人的紅</h3>

                        <p>一個安靜的配色方案需要為眼睛提供一個顯著的休息的地方。選擇大膽的紅色傢俱，它為房間提供了視線的集中點和青春氣息。 </p>
                    </div>
                </div>

                <div class="sort_red02_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_red03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=23" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product01 sort_red03_rec_product_img transition">
                                        <img src="images/H-pink-cabinet-01.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=6" class="sort_red03_rec_product_l swiper-slide">
                                    <div class="sort_red03_rec_product02 sort_red03_rec_product_img transition">
                                         <img src="images/H-red-chair-06.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=1" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product03 sort_red03_rec_product_img transition">
                                         <img src="images/H-red-chair-01.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=3" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product03 sort_red03_rec_product_img transition">
                                         <img src="images/H-red-chair-03.png" alt="">
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
            <div class="index_conten_flex sort_red03">
                <div class="sort_red03_intro">

                    <div class="sort_red03_intro_top">
                        <div class="sort_red03_intro_bg"></div>
                        <div class="sort_red03_intro_img"></div>
                    </div>
                    
                    <div class="sort_red03_intro_txt">
                        <h2 class="sort_red03_h2">Orange</h2>
                        <h3>熱情的橘 沉穩的橘 撩人的橘</h3>

                        <p>橘色的色彩家族龐大，可以隨意搭配許多色彩。在色彩的能量上，橘色代表歡樂的、童玩式的熱鬧意象；表現內在愉悅的感覺、說不出道理的開心。</p>
                    </div>
                </div>

                <div class="sort_red03_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_red03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=16" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product01 sort_red03_rec_product_img transition">
                                        <img src="images/H-orange-chair-04.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=29" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product02 sort_red03_rec_product_img transition">
                                         <img src="images/H-pink-chair-05.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=152" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product03 sort_red03_rec_product_img transition">
                                         <img src="images/H-light-09.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=19" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product03 sort_red03_rec_product_img transition">
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
            <div class="index_conten_flex sort_red04">
                <div class="sort_red04_intro">

                    <div class="sort_red04_intro_top">
                        <div class="sort_red04_intro_bg"></div>
                        <div class="sort_red04_intro_img"></div>
                    </div>
                    
                    <div class="sort_red04_intro_txt">
                        <h2 class="sort_red04_h2">Pink</h2>
                        <h3>熱情的粉 沉穩的粉 撩人的粉</h3>

                        <p>粉色系很適合運用在家中，讓每天回家看到舒壓的粉色，都可以得到徹底的放鬆。不用讓整個家變成童話世界，只需要加入粉色系的點綴，粉色能引入柔和光線，讓居家空間的感覺明亮，乾淨，溫馨和樂趣。</p>
                    </div>
                </div>

                <div class="sort_red04_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next_w.svg" alt="">
                    </figure>
                </div>
                <div class="sort_red04_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="product_detail.php?id=33" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product01 sort_red03_rec_product_img transition">
                                        <img src="images/H-pink-chair-09.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=27" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product03 sort_red03_rec_product_img transition">
                                         <img src="images/H-pink-chair-03.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=24" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product03 sort_red03_rec_product_img transition">
                                         <img src="images/H-pink-cabinet-02.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=31" class="sort_red03_rec_product_s swiper-slide">
                                    <div class="sort_red03_rec_product03 sort_red03_rec_product_img transition">
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
                                    <select class="filter_byprice transition">依價錢
                                        <div class="s_product_detail_01_num palette_select">
                                        <a href="?cate=1"><option>由高到低</option></a>
                                        <a href="?cate=2"><option>由低到高</option></a>
                                        <a href="?cate=3"><option>由新到舊</option></a>
                                        <a href="?cate=4"><option>由舊到新</option></a>
                                        </div>
                                    </select>
                            </ul>
                        </div>
                    </div>
                    
                    <!-- 篩選展開 -->
                        <div class="index_conten_flex filter_inner transition">
                    <div class="filter_color flex">
                        <div class="filter_color_in" style="margin-left: 0">
                            <div class="filter_color1 filter_color_box"></div>
                            <p>紅色</p>
                        </div>
                        <div class="filter_color_in">
                            <div class="filter_color2 filter_color_box"></div>
                            <p>粉色</p>
                        </div>
                        <div class="filter_color_in">
                            <div class="filter_color3 filter_color_box"></div>
                            <p>橘色</p>
                        </div>
                    </div>
                    <ul class="filter_item flex">
                        <div class="filter_item_in1 flex">
                            <li class="filter_item01 filter_items transition">
                                <figure></figure>
                                <p>椅子</p>
                            </li>
                            <li class="filter_item02 filter_items transition">
                                <figure></figure>
                                <p>桌子</p>
                            </li>
                            <li class="filter_item03 filter_items transition">
                                <figure></figure>
                                <p>沙發</p>
                            </li>
                        </div>
                        <div class="filter_item_in2 flex">
                            <li class="filter_item04 filter_items transition">
                                <figure></figure>
                                <p>櫃子</p>
                            </li>
                            <li class="filter_item05 filter_items transition">
                                <figure></figure>
                                <p>燈飾</p>
                            </li>
                            <li class="filter_item06 filter_items transition" style="margin: 50px 0 0 0">
                                <figure></figure>
                                <p>其他</p>
                            </li>
                        </div>
                    </ul>
                    <div class="filter_sbar flex">
                        <div class="filter_sbar1">
                            <!--寬度-->
                            <input id="range" type="range" min="0" max="150" value="0" step="50" oninput="change()" onchange="change()" class="slider">
                            <div class="sbar1_txt">
                                家具高度 :
                                <span id="value">0</span> cm
                            </div>
                        </div>
                        <div class="filter_sbar2">
                            <!--高度-->
                            <input id="range2" type="range" min="0" max="150" value="0" step="50" oninput="change2()" onchange="change2()" class="slider">
                            <div class="sbar1_txt">
                                家具寬度 :
                                <span id="value2">0</span> cm
                            </div>
                        </div>
                    </div>
                </div>


                    <div class="sort_red05_row flex">
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <div class="sort_red05_row flex">
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <div class="sort_red05_row flex">
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <div class="sort_red05_row flex">
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <div class="sort_red05_row flex">
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_red05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_red05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <!-- 頁碼 -->
                    <div class="sort_red05_page">
                        <ul>
                            <a href="/">
                                <li class="page_prev">
                                    <figure></figure>PREV</li>
                            </a>
                            <a href="/">
                                <li class="page p1"> 1 </li>
                            </a>
                            <a href="/">
                                <li class="page p2"> 2 </li>
                            </a>
                            <a href="/">
                                <li class="page p3"> 3 </li>
                            </a>
                            <a href="/">
                                <li class="page_next">
                                    <figure></figure>NEXT</li>
                            </a>
                        </ul>
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
            } else if (scrolltop > 1500 && scrolltop < 2600) {
                $('.changebg').css('background-color', '#c2704f');
            } else if (scrolltop > 2800) {
                $('.changebg').css('background-color', '#df9282');
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

    </script>

</body>

</html>