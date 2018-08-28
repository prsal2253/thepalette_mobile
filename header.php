<?php

require __DIR__. '/__db_connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index_heard</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
</head>
<body id="heard" class="">
    <div class="index_top">
        <header><h1>palette</h1></header>
        <nav>
            <div class="palette_menu">
            <!-- menu icon -->
            <div class="menu_icon">
                <div class="bar transition"></div>
                <div class="bar transition"></div>
                <div class="bar transition"></div>
            </div>
            <!-- search icon -->
            <div class="search_icon transition"></div>
            <!-- menu -->
            <div class="palette_menu_open transition">
                <div class="palette_menubox">
                    <div class="menubox_l">
                        <ul>
                            <li class="selected" data-id="all"><a href="#"><span>Home</span>首頁</a></li>
                            <li data-id="all"><a href="#"><span>About Us</span>關於我們</a></li>
                            <li data-id="collections"><a href="#" ><span>Collections</span>精選商品</a></li>
                            <li data-id="articles"><a href="#"><span>Articles</span>風格專欄</a></li>
                            <li data-id="all"><a href="#"><span>Get In Touch</span>聯絡我們</a></li>
                        </ul>
                    </div>
                    <div class="menubox_r">
                        <!-- all -->
                        <div id="all" class="ranking_box selected">ALLLLLLLLLL</div>
                        <!-- product -->
                        <div class="ranking_box" id="collections">3</div>
                        <!-- articles -->
                        <div class="ranking_box" id="articles">4</div>
                    </div>
                </div>
            </div>
            </div>


            <div class="menu_list">
                <?php if(! isset($_SESSION['user'])): ?>
                <a href="login.php">longin</a>
                <a href="signup_01.php">signup</a>
                <?php else: ?>
                <a href="#"><?= $_SESSION['user']['name'] ?>carts</a>
                <a href="logout.php">logout</a>
                <?php endif; ?>
            </div>
        </nav>
        <div class="go_top"></div>
    </div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>login</li>
            </ul></section>
</div>
<div class="index_footer"></div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script>
// menu
$(".palette_menu,.search_icon").click(function(){
    $(this).toggleClass("menu_active");
});
    // tab
    $(function(){
        $(".palette_menubox ul li").mouseover(function () {
            $(".palette_menubox ul li").removeClass("selected");
            $(".palette_menubox .ranking_box").removeClass("selected");
            $(this).addClass("selected");
            $("#"+$(this).attr("data-id")).addClass("selected");
        });
    });
    //go top
    $(function(){
        $(window).scroll(function(){
            if( $(window).scrollTop() > 1620 ){
                $(".go_top").fadeIn(800);
            }else{
                $(".go_top").fadeOut(600);
            };
        })
        $('.go_top').click(function(){
            var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ?
                $('html') : $('body')) : $('html,body');
            $body.animate({scrollTop: 0}, 600);
        return false;
        });
    });
</script>
</html>