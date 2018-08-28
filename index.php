<?php

require __DIR__. '/__db_connect.php';

?>
<?php include 'page_item/head.php';?>
<body id="heard" class="">
    <div class="index_top">
    <?php include 'page_item/header.php';?> 
    </div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>login</li>
        </ul></section>
        <?php include 'page_item/head.php';?>
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