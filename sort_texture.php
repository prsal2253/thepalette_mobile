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
                                <a href="product_detail.php?id=31" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product01 sort_texture03_rec_product_img transition">
                                        <img src="images/H-pink-chair-09.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=31" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-pink-chair-03.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=31" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
                                         <img src="images/H-pink-cabinet-02.png" alt="">
                                    </div>
                                </a>
                                <a href="product_detail.php?id=31" class="sort_texture03_rec_product_s swiper-slide">
                                    <div class="sort_texture03_rec_product03 sort_texture03_rec_product_img transition">
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