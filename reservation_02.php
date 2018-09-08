<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reservation_02</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/member.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <style>
    /* 為了覆蓋原本樣式需放在這裡 */
    .flatpickr-calendar.inline{max-width:95%;width: 100%;padding: 20px 0 10px;background: rgba(247, 247, 247, .95);border: transparent;margin: 20px auto;border-radius: 20px;}
    .flatpickr-calendar.arrowTop:before,.flatpickr-calendar.arrowTop:after{border-bottom-color: transparent;border:none;}
    .flatpickr-rContainer{max-width: 90%;}
    .flatpickr-day{width:calc(100% / 7);height: 40px;    margin:0px;line-height: 40px;}
    .flatpickr-day.today{}
    .flatpickr-month{width: 90%;margin: 0 auto 20px;}
    .flatpickr-weekdays{display: inline-flex;    width: 100%;}
    span.flatpickr-weekday{width:calc(100% / 7);height: 40px;    margin: 0 0px;line-height: 40px;}
    </style>
</head>
<body id="reservation" class="reservation_02">
    <div class="index_top">
        <header><h1>palette</h1></header>
    </div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <!-- <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>reservation</member></li>
            </ul></section> -->
    <section class="item_12">
            <div class="index_conten_flex">
                    <div class="step_box step_box_in"><span>01</span><span>預約<br/>注意事項</span></div>
                    <div class="step_box step_box_in"><span>02</span><span>選擇<br/>預約時間</span></div>
                    <div class="step_box"><span>03</span><span>預約完成</span></div>
            </div>
    </section>
    <section class="item_12 item_13 item_16">
        <div class="index_conten ">
            <form name="form1" method="post" action="" onsubmit="return checkForm()">
            <div class="item_02 item_16box">
                        <input class=flatpickr type=text data-inline=true name="reservation_date" placeholder="請選擇配送日期">
            </div>
            <div class="item_02 item_16box">
                    <div class="palette_select">
                            <select class="palette_select" name="reservation_time">
                            <option>請選擇配送時間</option>
                                <option value="上午09：00-12：00">上午09：00-12：00</option>
                                <option value="下午13：30-17：30">下午13：30-17：30</option>
                                <option value="晚上19：30-21：30">晚上19：30-21：30</option>
                            </select>
                    </div>
            </div>
            <div class="item_02_conten">
                <input type="submit" onclick="location.href='reservation_03.php'" value="預約配送時間">
                </div>
            </form>
        </div>
    </section>
</div>
<div class="index_footer"></div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script src="js/flatpickr.js"></script>
<script>
    // 月曆
    $(".flatpickr").flatpickr();

    function checkForm() {
        $.post('r02api.php', $(document.form1).serialize(), function () {

        }, 'json');
        return false;
    };
</script>
</body>
</html>