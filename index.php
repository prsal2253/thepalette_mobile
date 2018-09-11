<?php
require __DIR__ . '/__db_connect.php';
?>
<?php include 'page_item/head.php';?>
<link rel="stylesheet" href="css/pageitem.css?123">
<link rel="stylesheet" href="css/product_detail.css?123">
    <style>
        .index02{
            width: 100%;
        }
        /* video */
        .index02_video{
            margin-top: 100px;
            width: 100%;
            height: 500px;
            overflow: hidden;
            background-color: #999;
        }
        .index02_video_txt{
            padding: 410px 0 0 50px;
        }
        .index02_video figure{
            width: 50px;
            height: 50px;
            background: url(images/icon/play.svg) no-repeat center center;
            background-size: cover;
            margin-right: 20px;
            display: inline-block;
        }
        .index02_video h2{
            font-family: 'Playfair Display';
            font-size: 25px;
            font-weight: 700;
            letter-spacing: 0.04em;
            color: #fff;
            display: inline-block;
        }

        /* about */
        .index02_about{
            width: 100%;
        }
        .index02_about_topic{
            margin: 100px 0 50px 0;
        }
        .index02_about_topic h2{
            font-family: 'SourceHanSerifTC-Bold';
            font-size: 30px;
            color: #000;
            letter-spacing: 0.08em;
        }
        .index02_about_content{
            width: 100%;
            justify-content: space-between;
            align-items: flex-start;
        }
        .about_con01, .about_con02, .about_con03{
            width: 30%;
        }
        .index02_about_content p{
            font-family: 'Noto Sans TC';
            font-size: 15px;
            letter-spacing: 0.1em;
            color: #000;
            font-weight: 300;
            line-height: 22px;
        }
        /* inedex03 */
        /* swipe */

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

        .swiper-container,
        .swiper-container2 {
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
            height: 100%;
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

        /* index03 */

        #index03 {
            margin: 50px 0 150px 0;
        }

        .index03_left,
        .index03_right {
            flex-direction: column;
            width: 50%;
        }

        .index03_400 {
            width: 100%;
            height: 400px;
            overflow: hidden;
        }

        .index03_800 {
            width: 100%;
            height: 800px;
            overflow: hidden;
        }

        .index03_deco {
            width: 30px;
            height: 4px;
            background-color: #fff;
            margin-bottom: 15px;
        }

        /* left */

        .left01_swipe img,
        .left04_swipe img,
        .right05_swipe img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .index03_left02 {
            background-color: #32465a;
        }

        .index03_left05 {
            background-color: #59493f;
        }

        .index03_txt01 {
            width: 70%;
            height: 20%;
            margin: 100px auto 0 auto;
        }

        .index03_txt01_left {
            width: 80%;
            float: left
        }

        .index03_txt01_right {
            width: 11%;
            float: right;
            margin-top: -6%;
        }

        .index03_h2 {
            font-size: 35px;
            font-family: 'Playfair Display';
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.05em;
            line-height: 40px;
        }

        .index03_left02_box {
            height: 80%;
            overflow: hidden;
            transition: all .5s .1s;
        }

        .index03_left02_box img {
            height: 130%;
            object-fit: cover;
            margin: -180px 0 0 -30px;
        }

        .index03_left05_box {
            height: 80%;
            overflow: hidden;
            transition: all .5s .1s;

        }

        .index03_left05_box img {
            height: 120%;
            object-fit: cover;
            margin: -80px 0 0 -110px;
        }

        /* right */

        .index03_right01 {
            transition: all .2s;
            background-color: #d2d2d2;
        }

        .index03_right03 {
            background: url(images/banner/marble_bg.jpg) no-repeat center bottom;
            background-size: cover;
        }

        .index03_right04 {
            background-color: #ad776c;
        }

        .index03_right05 {
            background: url(images/banner/Casa-La-Quinta-Weekend-House-For-Retired-Couple-Mexico-Yellowtrace-05.jpg) no-repeat bottom center;
            background-size: cover;
        }

        .index03_right03_box {
            height: 70%;
            overflow: hidden;
            margin-left: -55px;
            transition: all .5s .1s;

        }

        .index03_right03_box2 {
            height: 70%;
            overflow: hidden;
            margin: -560px 0 0 110px;
        }

        .index03_right03_box_img1 {
            height: 90%;
            object-fit: cover;
            margin: 0;
        }

        .index03_right03_box_img2 {
            height: 110%;
            object-fit: cover;
            margin: 0;
        }

        .index03_right04_box {
            height: 70%;
            width: 100%;
            overflow: hidden;
            transition: all .5s .1s;
            transform: translate(5%, -8%);
        }

        .index03_right04_box img {
            height: 135%;
            object-fit: cover;
        }

        .index03_txt02 {
            width: 50%;
            height: 100%;
            margin: -53% 0 0 90px;
        }

        .index03_txt02_top {
            height: 55%;
        }

        .index03_txt02_bottom {
            height: 11%;
            margin-top: -15px;
        }

        .index03_right01_box {
            height: 100%;
            overflow: hidden;
            transition: all .5s .1s;
        }

        .index03_right01_box img {
            height: 125%;
            object-fit: cover;
            margin: 0 0 0 120px;
            transform: rotateY(180deg);
        }
        @media screen and (max-width:800px){
            
            .index02_video{
                height: 210px;
                margin-top: 0;
            }
            .index02_video video{
                width: 100%;
                height: auto;
            }
            .index02_video_txt{
                padding: 85vh 0 0 10vw;
            }
            .index02_video h2{
                font-size: 22px;
                line-height: 30px;
            }
            .index02_about_content{
                flex-direction: column;
                align-items: center;
            }
            .about_con01, .about_con02, .about_con03{
                width: 100%;
            }
            .index02_about_topic{
                margin: 50px auto 30px auto;
                width: 80%;
            }
            .index02_about_topic h2{
                font-size: 22px;
                line-height: 30px;
            }
            .index02_about_topic p{
                font-size: 14px;
            }
            /* index03 */
            #index03 {
                margin: -2% 0 0 0;
            }
            .index03 {
                flex-direction: column;
            }
            .index03_left,
            .index03_right {
                width: 100%;
            }
            .index03_400 {
                height: 250px;
            }
            .index03_800 {
                height: 400px;
            }
            .index03_left03,
            .index03_right02 {
                display: none;
            }
            .index03_txt01 {
                margin-top: 50px;
            }
            .index03_txt01_right {
                width: 17%;
            }
            .index03_h2 {
                font-size: 30px;
                line-height: 35px;
            }
            .index03_left02_box,
            .index03_left05_box {
                height: auto;
                width: 100%;
            }
            .index03_left02_box img {
                width: 130%;
                margin: -25% 0 0 -5%;
            }
            .index03_left05_box img {
                width: 110%;
                margin: -12% 0 0 0;
            }
            .index03_txt02 {
                margin: -57% 0 0 14%;
            }
            .index03_right03_box2 {
                height: 80%;
                margin: -320px 0 0 50px;
            }
            .index03_right03_box {
                height: 80%;
                margin: 0 0 0 -10%;
            }
        }
    </style>
</head>
    <!-- 頁面ID -->
<body id="index">
    <!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>
    <!-- top banner -->
         <!-- banner 輪播 -->
         <section class="top_banner">
                <div class="top_banner_mobile">
                        <div class="top_banner_slider">
                            <ul>
                            <li class="prev_slide">
                                    <div class="top_banner_image" style="background-image:url(images/banner/27683649797_babbcb85cc_b.jpg);    background-size: auto 90vh;">
                                    <div class="ps-content" style="background-color: #ad776c ">
                                            <h2>Red<br/>Orange<br/>Pink</h2>
                                            <p>Better Living Throug Color</p>
                                    </div>
                                    <div class="ps-number" style="background-color: #8f594a"></div>
                                    <div class="ps-slidewrapper" style="background-color: #d89d54 "></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top_banner_image" style="background-image:url(images/banner/27683687327_6181c92a30_b.jpg);background-position: top 0px left -20px;">
                                        <div class="ps-content" style="background-color: rgb(46, 69, 83);">
                                                <h2>Blue<br/>Green<br/>Yellow</h2>
                                                <p style="">Better Living Throug Color</p>
                                        </div>
                                        <div class="ps-number" style="background-color: rgb(80, 121, 130) "></div>
                                        <div class="ps-slidewrapper" style="background-color: #568080"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="top_banner_image" style="background-image:url(images/banner/40745881410_ab590a502f_k.jpg)">
                                        <div class="ps-content" style="background-color:rgb(64, 112, 96)">
                                                <h2>Black<br/>White<br/>Gray</h2>
                                                <p>Better Living Throug Color</p>
                                        </div>
                                        <div class="ps-number" style="background-color: #000"></div>
                                        <div class="ps-slidewrapper" style="background-color:rgb(86, 128, 128)"></div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
        </section>
    <!-- 影片與描述 -->
    <section id="index02"> 
        <div class="index_conten index02">
            <div class="index02_video">
            <video src="images/background/796977780.mp4" autoplay></video>
             <video src="" loop></video>
            </div>
            <div class="index02_about">
                <div class="index02_about_topic">
                    <h2>色彩的選擇題 <span style="font-family: 'Playfair Display'; font-weight: 700; letter-spacing: 0.01em;"><br>Choose Your Colors Wisely</span></h2><br><br>
                <div class="index02_about_content flex">
                    <div class="about_con01">
                        <p>The Palette創辦於2005年，從事家具選物店近10年。因為對家具的熱愛，在此建立了The Palette品牌。希望透過高色彩的交錯設計、卓越的工藝與獨特的風格，打造新生活美學。</p><br><br>
                    </div>
                    <div class="about_con02">
                        <p>我們力求家具設計精美，注重設計以及家俱的實用性。生活是一種藝術，品味、 美感是其中的色彩、線條。您的幸福感受，是我們的堅持。</p><br><br>
                    </div>
                    <div class="about_con03">
                        <p>如果你喜歡線條明快、有色彩性的居家佈置。我們提供的不只是一件家具，而是您家中最善解人意的伴侶。</p><br><br>
                    </div>
                </div>
            </div>
        </div>   
    </section>

    <!-- 各色介紹 -->
    <div class="index_main">
            <section id="index03">
                <div class="index_conten_flex index03">
                    <div class="index03_left flex">
                        <div class="index03_left01 index03_400">
                            <!-- Swiper -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="left01_swipe swiper-slide">
                                        <img src="images/banner/27683687327_6181c92a30_b.jpg" alt="商品名稱">
                                    </div>
                                    <div class="left01_swipe swiper-slide">
                                        <img src="images/banner/27855179879_0f2427679a_b.jpg" alt="商品名稱">
                                    </div>
                                    <div class="left01_swipe swiper-slide">
                                        <img src="images/banner/28680114308_27d5d126d9_b.jpg" alt="商品名稱">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="index03_left02 index03_800">
                            <div class="index03_txt01 index03_txt01_show">
                                <div class="index03_txt01_left">
                                    <div class="index03_deco"></div>
                                    <h2 class="index03_h2">Royal
                                        <br>Blue</h2>
                                </div>
                                <div class="index03_txt01_right">
                                    <h2 class="index03_h2">03</h2>
                                </div>
                            </div>
                            <div class="index03_left02_box left02_box_show">
                                <img src="images/H-blue-chair-14.png" alt="">
                            </div>
    
                        </div>
                        <div class="index03_left03 index03_400"></div>
                        <div class="index03_left04 index03_400">
                            <!-- Swiper -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="left04_swipe swiper-slide">
                                        <img src="images/banner/40745889000_96ba023acb_k.jpg" alt="商品名稱">
                                    </div>
                                    <div class="left04_swipe swiper-slide">
                                        <img src="images/banner/fogia_02.jpg" alt="商品名稱">
                                    </div>
                                    <div class="left04_swipe swiper-slide">
                                        <img src="images/banner/GRANITI-FIANDRE-Project-by-studio-TERZOPIANO-image-3d-rendering.jpg" alt="商品名稱">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="index03_left05 index03_800">
                            <div class="index03_txt01 index03_txt01_left05_show">
                                <div class="index03_txt01_left">
                                    <div class="index03_deco"></div>
                                    <h2 class="index03_h2">Earth
                                        <br>Tone</h2>
                                </div>
                                <div class="index03_txt01_right">
                                    <h2 class="index03_h2">09</h2>
                                </div>
                            </div>
                            <div class="index03_left05_box left05_box_show transition">
                                <img src="images/H-blue-chair-11-side.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="index03_right flex">
                        <div class="index03_right01 index03_400">
    
                            <div class="index03_right01_box right01_box_show">
                                <img src="images/H-white-chair-03.png" alt="">
                            </div>
                            <div class="index03_txt02 index03_txt02_show">
                                <div class="index03_txt02_top">
                                    <div class="index03_deco"></div>
                                    <h2 class="index03_h2">Pure
                                        <br>White</h2>
                                </div>
                                <div class="index03_txt02_bottom">
                                    <h2 class="index03_h2">01</h2>
                                </div>
                            </div>
                        </div>
                        <div class="index03_right02 index03_400"></div>
                        <div class="index03_right03 index03_800">
                            <div class="index03_right03_box right03_box1_show">
                                <img src="images/H-light-06.png" alt="" class="index03_right03_box_img1">
                            </div>
                            <div class="index03_right03_box2 right03_box2_show transition">
                                <img src="images/H-light-07.png" alt="" class="index03_right03_box_img2">
                            </div>
                            <div class="index03_txt01 index03_txt01_right03_show" style="margin-top: -45px">
                                <div class="index03_txt01_left">
                                    <div class="index03_deco" style="background-color: #000"></div>
                                    <h2 class="index03_h2" style="color: #000">Noble
                                        <br>Marble</h2>
                                </div>
                                <div class="index03_txt01_right" style="margin-top:48px">
                                    <h2 class="index03_h2" style="color: #000">05</h2>
                                </div>
                            </div>
                        </div>
                        <div class="index03_right05 index03_400">
                            <!-- Swiper -->
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="right05_swipe swiper-slide">
                                        <img src="images/banner/38924674714_98b7dee86b_k.jpg" alt="商品名稱">
                                    </div>
                                    <div class="right05_swipe swiper-slide">
                                        <img src="images/banner/banner02.jpg" alt="商品名稱">
                                    </div>
                                    <div class="right05_swipe swiper-slide">
                                        <img src="images/banner/Sancal-Producto-Sofa-Sumo-01.jpg" alt="商品名稱">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="index03_right04 index03_800">
                            <div class="index03_txt01 index03_txt01_right04_show">
                                <div class="index03_txt01_left">
                                    <div class="index03_deco"></div>
                                    <h2 class="index03_h2">Soft
                                        <br>Pink</h2>
                                </div>
                                <div class="index03_txt01_right">
                                    <h2 class="index03_h2">07</h2>
                                </div>
                            </div>
                            <div class="index03_right04_box right04_box_show">
                                <img src="images/H-pink-chair-08.png" alt="" class="index03_right04_box">
                            </div>
    
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- 文章 -->
        <div id="product_detail_05">
            <section style="padding:50px 15px;">
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
                                    <img src="images/banner/41652216105_5fd10f9ef8_k.jpg" alt="" style="width: 100%;height: 100%;object-fit: cover;">
                                    <a href="/" class="product_detail_05_article_box transition">
                                        <div class="article_txt flex">
                                            <div class="article_date">
                                                <div class="article_date_deco"></div>2018 JUN 23</div>
                                            <div class="article_topic">七個裝潢提案,將你的公寓改造成宜人的居住空間。</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="product_detail_05_article_02 swiper-slide" style="height: 100%;">
                                    <img src="images/banner/27855179879_0f2427679a_b.jpg" alt="" style="width: 100%;height: 100%;object-fit: cover;">
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

    <!-- 聯絡我們 -->
    
<!-- footer -->
<div class="index_footer">
<?php include 'page_item/footer.php';?>
</div>
    <!-- Swiper JS -->
    <script src="js/swiper/js/swiper.min.js"></script>

<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript">
        // 影片loop
        $('video').on('ended', function () {
            this.load();
            this.play();
        });
(function () {

function init(item) {
    var items = item.querySelectorAll('li'),
        current = 0,
        autoUpdate = true,
        timeTrans = 4000;

    //create nav
    var nav = document.createElement('nav');
    nav.className = 'nav_arrows';

    // create button prev
    var prevbtn = document.createElement('button');
    prevbtn.className = 'prev';
    prevbtn.setAttribute('aria-label', 'Prev');

    //create button next
    var nextbtn = document.createElement('button');
    nextbtn.className = 'next';
    nextbtn.setAttribute('aria-label', 'Next');

    //create counter
    var counter = document.createElement('div');
    counter.className = 'top_banner_counter';
    counter.innerHTML = "<span>1</span><span>" + items.length + "</span>";

    if (items.length > 1) {
        nav.appendChild(prevbtn);
        nav.appendChild(counter);
        nav.appendChild(nextbtn);
        item.appendChild(nav);
    }

    items[current].className = "current";
    if (items.length > 1) items[items.length - 1].className = "prev_slide";

    var navigate = function (dir) {
        items[current].className = "";

        if (dir === 'right') {
            current = current < items.length - 1 ? current + 1 : 0;
        } else {
            current = current > 0 ? current - 1 : items.length - 1;
        }

        var nextCurrent = current < items.length - 1 ? current + 1 : 0,
            prevCurrent = current > 0 ? current - 1 : items.length - 1;

        items[current].className = "current";
        items[prevCurrent].className = "prev_slide";
        items[nextCurrent].className = "";

        //update counter
        counter.firstChild.textContent = current + 1;
    }

    item.addEventListener('mouseenter', function () {
        autoUpdate = false;
    });

    item.addEventListener('mouseleave', function () {
        autoUpdate = true;
    });

    setInterval(function () {
        if (autoUpdate) navigate('right');
    }, timeTrans);

    prevbtn.addEventListener('click', function () {
        navigate('left');
    });

    nextbtn.addEventListener('click', function () {
        navigate('right');
    });

    //keyboard navigation
    document.addEventListener('keydown', function (ev) {
        var keyCode = ev.keyCode || ev.which;
        switch (keyCode) {
            case 37:
                navigate('left');
                break;
            case 39:
                navigate('right');
                break;
        }
    });

    // swipe navigation
    // from http://stackoverflow.com/a/23230280
    item.addEventListener('touchstart', handleTouchStart, false);
    item.addEventListener('touchmove', handleTouchMove, false);
    var xDown = null;
    var yDown = null;
    function handleTouchStart(evt) {
        xDown = evt.touches[0].clientX;
        yDown = evt.touches[0].clientY;
    };
    function handleTouchMove(evt) {
        if (!xDown || !yDown) {
            return;
        }

        var xUp = evt.touches[0].clientX;
        var yUp = evt.touches[0].clientY;

        var xDiff = xDown - xUp;
        var yDiff = yDown - yUp;

        if (Math.abs(xDiff) > Math.abs(yDiff)) {/*most significant*/
            if (xDiff > 0) {
                /* left swipe */
                navigate('right');
            } else {
                navigate('left');
            }
        }
        /* reset values */
        xDown = null;
        yDown = null;
    };
}

[].slice.call(document.querySelectorAll('.top_banner_slider')).forEach(function (item) {
    init(item);
});
})();
</script>
<script>

        $(function() {
        Slider.init();
         });

        $('.slide-nav').on('hover', function (e) {
            e.preventDefault();
            // get current slide
            var current = $('.flex--active').data('slide'),
                // get button data-slide
                next = $(this).data('slide');

            $('.slide-nav').removeClass('active');
            $(this).addClass('active');

            if (current === next) {
                return false;
            } else {
                $('.slider__warpper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
                $('.flex--active').addClass('animate--end');
                setTimeout(function () {
                    $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
                    $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
                }, 800);
            }
        });

        // swipe輪播
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 0,
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
                delay: 3000,
                disableOnInteraction: false,
            },
        });
        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 1,
            spaceBetween: 0,
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
                delay: 4000,
                disableOnInteraction: false,
            },
        });
        var swiper = new Swiper('.swiper-container3', {
            slidesPerView: 1,
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
        });
    </script>
</body>
</html>