<?php
session_start();
//session要用到所以要開

if(! isset($_SESSION['cart'])){
//    如果沒有設定session就把它設定空的陣列
    $_SESSION['cart'] = [];

}

$sid = isset($_GET['sid']) ? $_GET['sid'] : 0;
//產品編號
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;
//產品數量intval(整數)
//floatval(浮點數)用來有小數點公斤


// CRUD

//isset判斷的是 "變數"
//empty判斷的是 "值"
if(! empty($sid)) {
//    如果sid不是0也不是空值


    // 查 DB 商品的表, 看有沒有這件商品


    if(! empty($qty)) {
//        如果sid不是0也不是空值
//        以下設定，修改
        $_SESSION['cart'][$sid] = $qty;
        //        key放sid val放qty

    } else {
//        有設定sid沒設定qty就要刪除
//        以下刪除
        unset($_SESSION['cart'][$sid]);
//        刪這個陣列裡面的key的內容
//         不要寫成unset($_SESSION['cart']);不然整個購物車會不見
    }
}

echo json_encode($_SESSION['cart']);
//輸出目前的狀態