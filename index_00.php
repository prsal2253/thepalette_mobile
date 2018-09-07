<?php include 'page_item/head.php';?>
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
                height: 100vh;
                margin-top: 0;
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

    <!-- 影片與描述 -->
    <section id="index02"> 
        <div class="index_conten index02">
            <div class="index02_video">
                <div class="index02_video_txt">
                    <figure></figure>
                    <h2>Better Living<br>Through Color</h2>
                </div>
                <video src="" loop ></video>
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
</body>
</html>
