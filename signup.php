<?php

require __DIR__. '/__db_connect.php';

?>

<?php
$pageName = 'register';
//命名頁面
?>
<?php include 'page_item/head.php';?>
    <style>
        small{
            display: none;
        }
    </style>
</head>
<body id="signup" class="">
    <div class="index_top">
        <?php include 'page_item/header.php';?> 
    </div>
<div class="index_main">
    <!-- 麵包屑 -->
    <section  class="bread_crumbs">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">member</a></li>
            <li>signup</member></li>
        </ul>
    </section>
    <section class="item_12">
        <div class="index_conten_flex">
            <div class="step_box step_box_in"><span>01</span><span>會員條款</span></div>
            <div class="step_box step_box_in"><span>02</span><span>填寫會員資料</span></div>
            <div class="step_box"><span>03</span><span>認證會員<br/>註冊條款</span></div>
        </div>
    </section>
    <section class="item_12 item_13 item_15">
        <div class="index_conten">
            <div class="item_02">
<!--     註冊成功與否訊息           -->
                <div id="info" class="alert" role="alert" style="display: none">
                </div>
<!--                -->
                <form name="form1" method="post" action="" onsubmit="return checkForm()">
                    <!-- 會員名稱 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <input type="text" id="name" name="name" placeholder="會員名稱">
                            <small id="nameHelp" class="">長度請大於兩個字元</small>
                        </div>
                    </div>

                    <!-- email -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <input type="text" id="email" name="email" placeholder="請填寫正確e-mail，將會成為您的登入帳號">
                            <small id="emailHelp" class="">請符合email格式</small>
                        </div>
                    </div>

                    <!-- 會員密碼 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <input type="password" id="password" name="password" placeholder="填寫密碼">
                            <small id="passwordHelp" class="">密碼長度請大於六個字元</small>
                        </div>
                    </div>

                    <!-- 密碼確認 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <input type="password" id="passwordcheck" name="passwordcheck" placeholder="確認密碼">
                            <small id="passwordcheckHelp" class="">請再次確認密碼是否相同</small>
                        </div>
                    </div>
                    <!-- 生日 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <div class="palette_select member_input40">
                                <select class="sel_year" rel="years" name="year" ></select>
                            </div>
                            <div class="palette_select member_input40 member_input25">
                                <select class="sel_month" rel="month" name="month"></select>
                            </div>

                            <div class="palette_select member_input25">
                                <select class="sel_day" rel="day" name="day"></select>
                            </div>
                        </div>
                    </div>
                    <!-- 電子報 -->
                    <div class="item_02_conten">
                        <div class="item_02_conten_r">
                            <div class="radio_box">
                                <input type="checkbox" name="" value="" checked>
                                <span class="radio_content">我願意收到the palette的最新優惠消息</span></div>
                        </div>
                    </div>


                    <div class="item_02_conten">
                        <button type="submit" id="submit_btn" >註冊會員</button>
                    </div>
                </form>
            </div>
    </section>
</div>
<script>
    $(function () {
        $.ms_DatePicker({
            YearSelector: ".sel_year",
            MonthSelector: ".sel_month",
            DaySelector: ".sel_day"
        });
        $.ms_DatePicker();
    });
    (function($){
        $.extend({
            ms_DatePicker: function (options) {
                var defaults = {
                    YearSelector: "#sel_year",
                    MonthSelector: "#sel_month",
                    DaySelector: "#sel_day",
                    YearText: "出生年",
                    MonthText: "月",
                    DayText: "日",
                    FirstValue: 0
                };
                var opts = $.extend({}, defaults, options);
                var $YearSelector = $(opts.YearSelector);
                var $MonthSelector = $(opts.MonthSelector);
                var $DaySelector = $(opts.DaySelector);
                var YearText = opts.YearText;
                var MonthText = opts.MonthText;
                var DayText = opts.DayText;
                var FirstValue = opts.FirstValue;

                // 初始化
                var stry = "<option value=\"" + FirstValue + "\">" + YearText + "</option>";
                var strm = "<option value=\"" + FirstValue + "\">" + MonthText + "</option>";
                var strd = "<option value=\"" + FirstValue + "\">" + DayText + "</option>";
                $YearSelector.html(stry);
                $MonthSelector.html(strm);
                $DaySelector.html(strd);

                // 年份列表
                var yearNow = new Date().getFullYear();
                var yearSel = $YearSelector.attr("rel");
                for (var i = yearNow; i >= 1900; i--) {
                    var sed = yearSel==i?"selected":"";
                    var yearStr = "<option value=\"" + i + "\" " + sed+">" + i + "</option>";
                    $YearSelector.append(yearStr);
                }

                // 月份列表
                var monthSel = $MonthSelector.attr("rel");
                for (var i = 1; i <= 12; i++) {
                    var sed = monthSel==i?"selected":"";
                    var monthStr = "<option value=\"" + i + "\" "+sed+">" + i + "</option>";
                    $MonthSelector.append(monthStr);
                }

                // 日列表(只選擇了年月時候)
                function BuildDay() {
                    if ($YearSelector.val() == 0 || $MonthSelector.val() == 0) {
                        // 未選擇年份或者月份
                        $DaySelector.html(strd);
                    } else {
                        $DaySelector.html(strd);
                        var year = parseInt($YearSelector.val());
                        var month = parseInt($MonthSelector.val());
                        var dayCount = 0;
                        switch (month) {
                            case 1:
                            case 3:
                            case 5:
                            case 7:
                            case 8:
                            case 10:
                            case 12:
                                dayCount = 31;
                                break;
                            case 4:
                            case 6:
                            case 9:
                            case 11:
                                dayCount = 30;
                                break;
                            case 2:
                                dayCount = 28;
                                if ((year % 4 == 0) && (year % 100 != 0) || (year % 400 == 0)) {
                                    dayCount = 29;
                                }
                                break;
                            default:
                                break;
                        }

                        var daySel = $DaySelector.attr("rel");
                        for (var i = 1; i <= dayCount; i++) {
                            var sed = daySel==i?"selected":"";
                            var dayStr = "<option value=\"" + i + "\" "+sed+">" + i + "</option>";
                            $DaySelector.append(dayStr);
                        }
                    }
                }
                $MonthSelector.change(function () {
                    BuildDay();
                });
                $YearSelector.change(function () {
                    BuildDay();
                });
                if($DaySelector.attr("rel")!=""){
                    BuildDay();
                }
            } // End ms_DatePicker
        });
    })(jQuery);
</script>
<script>

    function checkForm() {

        var nameHelp = $('#nameHelp'),
            emailHelp = $('#emailHelp'),
            passwordHelp = $('#passwordHelp'),
            passwordcheckHelp = $('#passwordcheckHelp'),
            passwordcheck = $('#passwordcheck').val(),
            password = $('#password').val(),
            //這裡是JQ請用val()而不要用JS的value() OK?
            submit_btn = $('#submit_btn'),
            emailPattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        var isPass = true;

        submit_btn.hide();
        nameHelp.hide();
        emailHelp.hide();
        passwordHelp.hide();
        passwordcheckHelp.hide();
        $('#info').hide();


        if(form1.name.value.length < 2){
            nameHelp.show();
            isPass = false;
        }
        // 長度請大於兩個字元
        if(! emailPattern.test(form1.email.value)){
            emailHelp.show();
            isPass = false;
        }
        //請符合email格式
        if(form1.password.value.length < 6){
            passwordHelp.show();
            isPass = false;
        }
        //密碼長度請大於六個字元
        if(passwordcheck !== password){
            passwordcheckHelp.show();
            isPass = false;
        }
        //請再次確認密碼是否相同

        console.log( $(document.form1).serialize() );

        if(isPass) {

            $.post('signup_api.php', $(document.form1).serialize(), function(data){
                //這裏不是用表單方式發送出去而是用ajax方式發送出去，所以資料JQ物件包起來
                // $(document.form1).serialize()表單序列化
                if(data.success){
                //    是ture代表註冊成功  else就是註冊失敗秀按鈕出來

                    setTimeout(function(){
                        location.href = 'signup_03.php';
                    }, 1000);

                } else {

                    submit_btn.show();
                }

                if(data.info){
                    var info = $('#info');
                    info.text(data.info.msg);
                    //api裡面的info文字訊息
                    info.show();

                    // info.attr('class', 'alert alert-'+data.info.type);
                    // 上面是更改bs4外觀樣式樣式
                }
            }, 'json');
        //如果你告訴他是json，他會自動把json的字串轉換原生的陣列或是物件

        }else{
            submit_btn.show();
        }
        return false;
    };
</script>
<div class="index_footer">
<?php include 'page_item/footer.php';?>
</div>
</body>
</html>
