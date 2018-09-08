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
                            <h2>Black
                                <br>White
                                <br>Grey</h2>
                            <br>
                            <h3>黑 白 灰</h3>
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
                        <h2 class="sort_black02_h2">Black</h2>
                        <h3>簡潔的黑 高雅的黑 經典的黑</h3>

                        <p>黑色是一種百搭的顏色，不管和什麼顏色、什麼風格相搭配，都有和諧的感覺。黑色在家居中所表現的強烈內涵是多層面的，其蘊含的感情也很豐富。</p>
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
                                        <img src="images/H-light-01.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_l swiper-slide">
                                    <div class="sort_black03_rec_product02 sort_black03_rec_product_img transition">
                                         <img src="images/H-black-chair-02.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-cup-03.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-black-table-03.png" alt="">
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
                        <h2 class="sort_black03_h2">White</h2>
                        <h3>俐落的白 夢幻的白 平靜的白</h3>

                        <p>白色向來給人自由、無壓的感受，讓空間鋪陳在白色系中，平衡了整體美感。一打開家門都希望映入眼簾的是舒適的環境，感受到放鬆無壓的氛圍。</p>
                    </div>
                </div>

                <div class="sort_black03_rec">
                    <h5>推薦商品</h5>
                    <figure>
                        <img src="images/icon/next.svg" alt="">
                    </figure>
                </div>
                <div class="sort_black03_rec_product">
                    <!-- Swiper -->
                    <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product01 sort_black03_rec_product_img transition">
                                        <img src="images/H-white-chair-04.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product02 sort_black03_rec_product_img transition">
                                         <img src="images/H-bottle-01.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-light-02.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-carpet01.png" alt="">
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
                        <h2 class="sort_black04_h2">Grey</h2>
                        <h3>柔和的灰 安靜的灰 沉穩的灰</h3>

                        <p>灰色臥房可以同時吸睛又精緻，讓它得以跳脫無聊的刻板印象。可以選擇一件具代表性的家具，但重點是提亮整體灰色空間，而不是反客為主、讓眼睛分心。</p>
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
                                        <img src="images/H-light-05.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-grey-chair-10.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-candle-02.png" alt="">
                                    </div>
                                </a>
                                <a href="/" class="sort_black03_rec_product_s swiper-slide">
                                    <div class="sort_black03_rec_product03 sort_black03_rec_product_img transition">
                                         <img src="images/H-grey-table-05.png" alt="">
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
        <div id="sort_black05">
            <section>
                <div class="index_conten_flex sort_black05">
                    <div id="filter" class="transition">

                        <div class="index_conten_flex filter">
                            <ul class="filter_sec1">
                                <li class="filter_filter transition">
                                    <figure></figure>商品篩選</li>
                                <li class="filter_byprice transition"> 依價錢
                                    <figure></figure>
                                </li>
                                <li class="filter_bytime transition"> 依上架順序
                                    <figure></figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter_inner">

                    </div>
                    <!-- <div class="filter_inner transition">
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
                                <p>織品</p>
                            </li>
                        </ul>
                        <div class="filter_sbar flex">
                            <div class="filter_sbar1">
                                
                                <input id="range" type="range" min="0" max="150" value="0" step="50" oninput="change()" onchange="change()" class="slider">
                                <div class="sbar1_txt">
                                    家具長度 :
                                    <span id="value">0</span> cm
                                </div>
                            </div>
                            <div class="filter_sbar2">
                                
                                <input id="range2" type="range" min="0" max="150" value="0" step="50" oninput="change2()" onchange="change2()" class="slider">
                                <div class="sbar1_txt">
                                    家具寬度 :
                                    <span id="value2">0</span> cm
                                </div>
                            </div>
                        </div>
                    </div> -->


                    <div class="sort_black05_row flex">
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <div class="sort_black05_row flex">
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <div class="sort_black05_row flex">
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <div class="sort_black05_row flex">
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <div class="sort_black05_row flex">
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                        <a class="sort_black05_box_s">
                            <figure>
                                <img src="images/H-orange-chair-07.png" alt="商品名稱">
                            </figure>
                            <div class="sort_black05_pname">
                                <h2>Swoon Fabric Chair</h2>
                                <h3>$14,620</h3>
                            </div>
                        </a>
                    </div>

                    <!-- 頁碼 -->
                    <div class="sort_black05_page">
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
                $(".changebg").css('background-color', '#000');
            } else if (scrolltop > 1500 && scrolltop < 3000) {
                $('.changebg').css('background-color', '#fff');
            } else if (scrolltop > 3000) {
                $('.changebg').css('background-color', 'rgb(190,190,190)');
            }
        });
        $(window).scroll(function() {
            var scrolltop = $(this).scrollTop();
            if (scrolltop>100 && scrolltop<1500){
                $(".changebox").css('background-color','#000');
            }else if(scrolltop>1500 && scrolltop<3000){
                $('.changebox').css('background-color','#fff');
            }else if(scrolltop>3000){
                $('.changebox').css('background-color','rgb(190,190,190)');
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