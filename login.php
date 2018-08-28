<?php

require __DIR__. '/__db_connect.php';

$pageName = 'login';
//命名頁面

if(isset($_POST['email']) and isset($_POST['password'])) {

    $sql = sprintf("SELECT `member_sid`, `name`, `gender`, `email`, `password`, `mobile`, `address`, `year`, `month`, `day`, `activated`  FROM `members` WHERE `email`='%s' AND `password`='%s'",
//    比對帳號密碼一不一樣用SELECT，WHERE這欄要等於什麼，用這兩個條件下去找
    $mysqli->escape_string($_POST['email']),($_POST['password']));
//        這邊escape_string是代表填表單去掉$_POST['email']單引號，只是準備字串，password不用escape_string如果編碼過前面就要加sha1
//    上面是一串的呦!要注意包再一起

    $result =$mysqli->query($sql);

    if($result ->num_rows==1){
//       這邊判斷結果如果等於一登入，如果不等於就失敗
        $msg_type = 'success';
        $msg_info = '登入成功';
        $_SESSION['user'] = $result->fetch_assoc();
//       直接把$result的值塞給它$_SESSION['user']，就會有上面的資料
//        其實正常情況下寫程式都習慣會用fetch_array()，因為它是最通用的使用方式，但有些時候如果你需要將一大筆輸出的資料轉換成JSON時，fetch_array()就會顯得有點累贅了…使用fetch_assoc()就可以獲得比較精簡的資料陣列。
    } else {
        $msg_type = 'danger';
        $msg_info = '登入失敗請重新確認帳號密碼';
    }
} else {
    if(isset($_SERVER['HTTP_REFERER'])){
        $_SESSION['come_from'] = $_SERVER['HTTP_REFERER'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/member.css">
</head>
<body id="login" class="">
    <div class="index_top">
        <header><h1>palette</h1></header>
    </div>
    <div class="index_main">
        <!-- 麵包屑 -->
        <section  class="bread_crumbs">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">member</a></li>
                <li>login</li>
            </ul></section>
    <section  class="item_10">
        <div class="index_conten">
            <!--     登入成功與否訊息           -->
            <?php if(isset($msg_type)): ?>
            <div id="info" class="alert" role="alert">
                <?= $msg_info ?>
            </div>
            <?php endif ; ?>

            <?php if(isset($msg_type) and $msg_type=='success' and isset($_SESSION['come_from'])): ?>
<!--           如果沒有設定$msg_type變數就代表還沒登入-->
                <script>
                    setTimeout(function(){
                        location.href = '<?= $_SESSION['come_from'] ?>';
                    }, 1000);
                </script>
                <?php unset($_SESSION['come_from']); endif ?>

            <?php if(! isset($_SESSION['user'])): ?>
            <!--                -->
            <div class="member_title"><h2>member login</h2><span>會員登入</span></div>
            <form name="form1" method="post" action="" onsubmit="return checkForm()">
                <div class="member_conten">

                    <!-- 登入 -->
                    <div class="index_conten_l">
                            <input type="text" name="email" placeholder="會員帳號">
                            <input class="member_name" name="password" type="text" placeholder="密碼">
                            <a href="#">忘記密碼</a>
                            <input type="submit" value="會員登入">
                            <input type="submit" class="fb_bnt" value="facebook登入">
                    </div>
                    <div class="login_line"><span>or</span></div>
                    <!-- 註冊 -->
                    <div class="index_conten_r">
                            <a href="signup_01.php" class="palette_btn palette_btn_back">註冊為新會員</a>
                            <p>如果您還不是the palette會員，在註冊成功後，可享有更多服務與優惠，在下次購物時只需登入系統，不需再次輸入個人資訊，讓您購物更加輕鬆！</p>
                    </div>

                </div>
            </form>
        </div>
        <?php endif; ?>
    </section>
</div>
    <script>
        function checkForm() {
            var emailHelp = $('#emailHelp'),
                passwordHelp = $('#passwordHelp'),
                submit_btn = $('#submit_btn');
            var emailPattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
            var isPass = true;

            //submit_btn.hide();
            emailHelp.hide();
            passwordHelp.hide();
            $('#info').hide();

            if(! emailPattern.test(form1.email.value)){
                emailHelp.show();
                isPass = false;
            }

            if(form1.password.value.length < 6){
                passwordHelp.show();
                isPass = false;
            }


            return isPass;
        }
    </script>
<div class="index_footer"></div>
</body>
</html>