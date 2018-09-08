<?php include 'page_item/head.php';?>
</head>
<body id="member" class="order_detail">
<div class="index_top">
    <?php include 'page_item/header.php';?> 
</div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <!-- <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>order</li>
            </ul></section> -->
    <section>
    <div class="index_conten_flex">
        <div class="index_conten_l">
            <div class="item_01">
                <div class="item_01menu item_01menu_in"><h6 class="transition">訂單列表</h6><span class="transition">Order List</span></div>
                <div class="item_01menu "><a href="#"><h6 class="transition">會員資料</h6><span class="transition">member profile</span></a></div>
                <div class="item_01menu"><a href="#"><h6 class="transition">追蹤清單</h6><span class="transition">my favourite</span></a></div>
            </div>
        </div>
        <div class="index_conten_r">
            <div class="member_title"><h2>Order detail</h2><span>訂單詳細</span></div>
            <div class="member_conten">
                <div class="item_02 item_03 item_04">
                    <!-- top -->
                    <div class="item_02_conten">
                        <a class="palette_btn palette_btn_back" href="#">回訂單列表頁</a>
                        <p class="description">總共<span class="description_mark">32</span>筆訂單</p>
                    </div>

                    <!-- 狀態列 -->
                    <div class="item_02_conten">
                            <div class="order_listbox">
                                    <p class=""><span class="description_mark">訂單狀態：款項確認</span></p>
                                </div>
                                <div class="order_listbox">
                                    <p class="">訂購日期：2108/07/31</p>
                                </div>
                                <div class="order_listbox">
                                    <p class="">訂單編號：1234567890</p>
                                </div>
                        <div class="order_listbox order_detail_box">
                               
                                   <ul class="order_timebar">
                                       <li></li>
                                       <li class="this_time"></li>
                                       <li class=""></li>
                                       <li class=""></li>
                                   </ul>
                                   <div class="order_timebar_detail">
                                       <p>訂單成立<br/><span>2018/08/08</span></p>
                                       <p>匯款確認<br/><span>2018/08/08</span></p>
                                       <p>預約確認<br/><span></span></p>
                                       <p>訂單完成<br/><span></span></p>
                                   </div>
                               
                        </div>
                        
                    </div>

                    <!-- 訂購方式、運送方式 -->

                    <div class="item_02_conten">
                        <div class="item_02_conten">
                            <div class="order_listbox">付款方式 : <span class="description_mark_b">信用卡一次付清(已付款)</span><a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html" href="javascript:;" class="description_q transition" class="description_q transition" href="#" title="付款說明">?</a></div>
                            <div class="order_listbox">
                                <div>
                                    <p>付款時間：2018/07/31 17:30</p>
                                    <p>發卡銀行：國泰世華銀行</p>
                                    <p>卡片種類：VISA</p>
                                    <p>信用卡卡號：4023-xxxx-xxxx-1942</p>
                                </div>
                            </div>
                        </div>
                        <div class="item_02_conten">
                                <div class="order_listbox">運送方式 : <span class="description_mark_b">貨運(未預約)</span><a data-fancybox data-type="ajax" data-src="https://codepen.io/fancyapps/pen/oBgoqB.html" href="javascript:;" class="description_q transition" class="description_q transition" href="#">?</a></div>
                                <div class="order_listbox">
                                        <a href="#" class="palette_btn">尚未預約前往預約</a>
                                </div>
                    </div>

                </div>

                <!-- 訂購商品 -->

                <div class="item_02_conten">
                        <div class="order_listbox">
                                <div class="description_70">訂單商品</div>
                        </div>

                        <!-- 一件商品 -->
                        <div class="order_listbox">
                                <figure class="description_20"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>
                                <div class="description_80">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>
                                <p>黃色x 1 $120000</p>
                                </div>
                        </div>

                        <!-- 一件商品 -->
                        <div class="order_listbox">
                                <figure class="description_20"><a href="#"><img src="images/S-yellow-chair01-500px.png" alt="商品名稱"></a></figure>
                                <div class="description_80">
                                    <div class="sale_icon"><span>活動商品</span></div>
                                    <a href="#" class="product_name">Anastasia Tufted Chair - Christopher Knight HomeAnastasia Tufted Chair - Christopher Knight Home</a>
                                <p>黃色x 1 $120000</p>
                                </div>
                        </div>
                        
                        <div class="order_listbox order_listbox_tatle">
                            <div>
                                <p>總共 <span class="description_mark">2</span> 件商品，運費</p>
                                <h3 class="product_price"><span>＄</span>800</h3>
                            </div> 
                            <div>
                                <p>訂單金額</p>
                                <h3 class="product_price"><span>＄</span>39,280</h3>
                            </div> 
                        </div>
                        
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