<?php
require __DIR__. '/__db_connect.php';

$result = [
    'success' => false,
//    有沒有成功先預設false
    'name_error' => '長度請大於兩個字元',
    'email_error' => '請符合email格式',
    'password_error' => '密碼長度請大於六個字元',
    'passwordcheck_error' => '請再次確認密碼是否相同',
];
//json格式上面丟出來是陣列丟到前端會變成物件

$isPass = true;

if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['password'])){
//    先判斷有name email password欄位才繼續往下做
    if(mb_strlen ($_POST['name'])<2){
//   strlen為php判斷字串長度，回傳為整數
//        常用來處理東方語系的mb_strlen()
    $result['name_error']='長度請大於兩個字元';
        $isPass = false;
//    到這裡表示沒有通過
    } else {
        unset($result['name_error']);
    }

    if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//   !為如果格式不符合    filter_var 第一個參數為查看，第二參數告訴它要檢查什麼
        $result['email_error'] = '請符合email格式';
        $isPass = false;
    }else {
        unset($result['email_error']);
    }

    if(mb_strlen($_POST['password'])<6){
        $result['password_error'] = '密碼長度請大於六個字元';
        $isPass = false;
    }else {
        unset($result['password_error']);
    }

    if($_POST['password']!==$_POST['passwordcheck']){
        $result['passwordcheck_error'] = '請再次確認密碼是否相同';
        $isPass = false;
    }else {
        unset($result['passwordcheck_error']);
    }


//下方是如果上面確認無誤就輸入資料
    if($isPass){

//        $hash = sha1(uniqid(). $_POST['email']);

//        $password = sha1($_POST['password']);
//        這裡是破壞性編碼，md5建議不要用，建議用sha256

        $sql ="INSERT INTO `members`(`name`, `email`, `password`, `year`, `month`, `day`) VALUES (?,?,?,?,?,?)";
//最後一格後面不能有逗號！
        $stmt = $mysqli->prepare($sql);
//            $stmt去接mysqli那個值
        $stmt->bind_param('ssssss',
            $_POST['name'],
            $_POST['email'],
                $_POST['password'],
                $_POST['year'],
                $_POST['month'],
                $_POST['day']
        //最後一格後面不能有逗號！
        );

        $stmt->execute();
        $af = $stmt->affected_rows;

        $stmt->close();
//        $stmt這個不用就關掉，記得先拿$af


        if($af===1) {
//            如果有新增成功$af為1 前端的info會做更改
            $result['success'] = true;
//            $result['info'] = [
//                'type' => 'success',
//                'msg' => '註冊完成'
                // msg這裡是文字內容
//                key =>value
//            ];
            $_SESSION['sighup_name'] = $_POST['name'];
            $_SESSION['sighup_email'] = $_POST['email'];

        } elseif($af===-1){
            $result['info'] = [
//                'type' => 'warning',
                'msg' => 'Email 已被使用'
            ];
        } else {
            $result['info'] = [
//                'type' => 'danger',
                'msg' => '資料錯誤'
            ];
        }



    }
}


echo json_encode($result, JSON_UNESCAPED_UNICODE);
//就把這$result轉換成json格式傳給前端後面，第二個參數JSON_UNESCAPED_UNICODE為內定常數中文字不要跳脫不然就會轉成三個字元然後跳脫