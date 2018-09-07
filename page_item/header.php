
    <header id="navbar"><h1><a class="palette_logo" href="../index.php">The Palette</a></h1>
        <nav>
            <!-- cart icon -->
            <div class="car_icon transition"><a href="#"><span>1</span></a></div>

            <div class="palette_menu">
                    <!-- menu icon -->
                    <div class="menu_icon">
                        <div class="bar transition"></div>
                        <div class="bar transition"></div>
                        <div class="bar transition"></div>
                    </div>
                    <!-- menu -->
                    <div class="palette_menu_open transition">
                        <div class="palette_menubox">
                            <div class="menubox_l" id="sbt_m_manuhover1">
                                    <h3 class="menutile">
                                        <a class="menutile_link" href="../about.html">關於我們<span>About Us</span></a>
                                    </h3> 
                                    <h3 class="menutile" id="menutile">
                                    <a class="menutile_link" href="#">精選商品<span>Collections</span></a>
                                    <div class="menutile_box1">
                                    <a class="menutile_link2" href="sort_red.php">紅橘粉系列</a>
                                    <a class="menutile_link2" href="sort_blue.php">藍綠黃系列</a>
                                    <a class="menutile_link2" href="sort_black.php">黑白灰系列</a>
                                    <a class="menutile_link2" href="sort_earth.php">大地色系列</a>
                                    <a class="menutile_link2" href="sort_texture.php">材質系列</a>
                                    </div></h3>
                                    <h3 class="menutile">
                                        <a class="menutile_link" href="#">風格專欄<span>Articles</span></a></h3>
                                    <h3 class="menutile">
                                        <a class="menutile_link" href="#">聯絡我們<span>Get In Touch</span></a></h3>
                                    <h3 class="menutile" id="menutile2">
                                        <a class="menutile_link" href="#">客戶服務<span>Service</span></a>
                                        <div class="menutile_box1">
                                                <a class="menutile_link2" href="#">線上客服</a>
                                                <a class="menutile_link2" href="#">常見問題</a>
                                                <a class="menutile_link2" href="#">運送說明</a>
                                                <a class="menutile_link2" href="#">安裝說明</a>
                                        </div>
                                    </h3>
                            </div>
                            <div class="menubox_r">
                                
                               
                                <!-- icon list -->
                                <div class="menu_iconbar">
                                    <a href="#">
                                        <div class="search_icon"></div>
                                        <span class="icontitle transition">站內搜尋</span>
                                    </a>
                                    <a href="../login.html">
                                            <div class="padlock_icon"></div>
                                            <span class="icontitle transition">會員登入</span>
                                    </a>
                                    <!-- 登出 -->
                                    <!-- 
        
                                    <a href="#">
                                            <div class="padunlock_icon"></div>
                                            <span class="icontitle transition">會員登出</span>
                                    </a>
        
                                     -->
                                     <a href="../order_list.html">
                                            <div class="member_icon"></div>
                                            <span class="icontitle transition">會員中心</span>
                                     </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
        </nav>
    </header>
        <div class="go_top"></div>
    <script>
    // menu
        $(".menu_icon").click(function(){
            $(this).parents().find(".palette_menu").toggleClass("menu_active");
        });
    // tab
        $("#menutile,#menutile2").click(function(){
            $(this).toggleClass("open");
        });
    //go top & header class
    $(function(){
        $(window).scroll(function(){
		if( $(window).scrollTop() > 800){
            $(".go_top").fadeIn(800);
            $("#navbar").addClass('fixed_bg');
		}else{
            $(".go_top").fadeOut(600);
            $("#navbar").removeClass('fixed_bg');
		};
	})	
        $('.go_top').click(function(){
        var $body = (window.opera) ? (document.compatMode == "CSS1Compat" ?
        $('html') : $('body')) : $('html,body');
        $body.animate({scrollTop: 0}, 600);
        return false;
        });
    });

         // 漢堡選單下滑收合 上滑顯示
         var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-100px";
        }
        prevScrollpos = currentScrollPos;
        }
        
    
</script>