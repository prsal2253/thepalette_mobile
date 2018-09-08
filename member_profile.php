<?php include 'page_item/head.php';?>
</head>
<body id="member" class="member_profile">
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <!-- <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>member profile</member></li>
            </ul></section> -->
    <section>
    <div class="index_conten_flex">
        <div class="index_conten_l">
            <div class="item_01">
                <div class="item_01menu"><a href="#"><h6 class="transition">訂單列表</h6><span class="transition">Order List</span></a></div>
                <div class="item_01menu item_01menu_in"><h6 class="transition">會員資料</h6><span class="transition">member profile</span></div>
                <div class="item_01menu"><a href="#"><h6 class="transition">追蹤清單</h6><span class="transition">my favourite</span></a></div>
            </div>
        </div>
        <div class="index_conten_r">
            <div class="member_title"><h2>Member Profile</h2><span>會員資料</span></div>
            <div class="member_conten">
                <div class="item_02">
                <form action="">
                    <!-- 會員帳號 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_l">會員帳號</div>
                        <div class="item_02_conten_r"><p class="conten_data">palette@gmail.com</p></div>
                    </div>

                    <!-- 會員密碼 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">會員密碼</div>
                            <div class="item_02_conten_r"><p class="conten_data"><a href="#">修改密碼</a></p></div>
                    </div>

                    <!-- 會員名稱 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">會員名稱</div>
                            <div class="item_02_conten_r">
                                <input class="member_name" type="text" placeholder="000">
                                <!-- 需判斷兩者只能選填一個預設為Ｍ -->
                                <div class="radio_box">
                                    <input type="radio" name="six" value="" checked><span class="radio_content">先生</span></div>
                                <div class="radio_box">
                                    <input type="radio" name="six" value=""><span class="radio_content">小姐</span></div>
                            </div>
                    </div>

                    <!-- 聯絡電話 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">聯絡電話</div>
                            <div class="item_02_conten_r">
                            <input type="text" placeholder="請輸入聯絡電話">
                             </div>
                    </div>

                    <!-- 聯絡地址 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">聯絡地址</div>
                            <div class="item_02_conten_r">
                                <div class="palette_select member_input50">
                                    <select class=" ">
                                    <option>請選擇城市</option>
                                    <option>台北市</option>
                                    </select>
                                </div>
                                <div class="palette_select member_input50">
                                        <select class=" ">
                                        <option>請選擇地區</option>
                                        <option>大同區</option>
                                        </select>
                                </div>
                                <!-- 需判斷地區顯示相對應的郵遞區號 -->
                                <!-- <p class="address_num">103</p> -->
                                <input type="text" class="margin_top" placeholder="請輸入地址">
                            </div>
                    </div>
                    <!-- 生日 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">會員生日</div>
                            <div class="item_02_conten_r">
                                <div class="palette_select member_input40">
                                    <select class=" ">
                                    <option>1990</option>
                                    <option>台北市</option>
                                    </select>
                                </div>
                                <div class="palette_select member_input40 member_input25">
                                        <select class=" ">
                                        <option>08</option>
                                        <option>01</option>
                                        </select>
                                </div>

                                <div class="palette_select member_input25">
                                        <select class=" ">
                                        <option>02</option>
                                        <option>01</option>
                                        </select>
                                </div>
                                
                            </div>
                    </div>
                     <!-- 電子報 -->
                    <div class="item_02_conten">
                            <div class="item_02_conten_l">訂閱電子報</div>
                            <div class="item_02_conten_r">
                                    <div class="radio_box">
                                        <input type="checkbox" name="" value="" checked>
                                        <span class="radio_content">我願意收到the palette最新消息</span></div>
                            </div>
                    </div>
                    <div class="item_02_conten">
                        <input type="submit" value="確認修改">
                        <p class="submit_point">會員資料修改完成後請點選確認修改</p>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
<div class="index_footer">
<?php include 'page_item/footer.php';?>
</div>
</body>
</html>