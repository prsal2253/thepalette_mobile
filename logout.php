<?php
session_start();
unset($_SESSION['user']);
//在登入頁已經設定了$_SESSION['user'] = $result->fetch_assoc();
if(isset($_SERVER['HTTP_REFERER'])) {
//    先判斷HTTP_REFERER有無設定
    header('Location: ' . $_SERVER['HTTP_REFERER']);
//    Location從哪裡來回到那個頁面
} else {
    header('Location: ./');
//    如果HTTP_REFERER沒有設定就回到當下資料夾index頁面
}