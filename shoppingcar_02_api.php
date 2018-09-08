<?php

require __DIR__ . '/__db_connect.php';

if (isset($_SESSION['user']) and !empty($_SESSION['cart'])) {

// *** 取得購物車商品資料 begin
    $data = [];
    $keys = array_keys($_SESSION['cart']);

    $sql = sprintf("SELECT * FROM `products_list` WHERE `product_sid` IN (%s)", implode(',', $keys));
    $rs = $mysqli->query($sql);
    while ($r = $rs->fetch_assoc()) {
        $r['qty'] = $_SESSION['cart'][$r['product_sid']];

        $data[$r['product_sid']] = $r;
    }
// *** 取得購物車商品資料 end

    $total_price = 0;
    foreach ($data as $k => $v) {
        $total_price += $v['price'] * $v['qty'];
    }

}

    $o_sql = "INSERT INTO `orders`
(`member_sid`, `order_date`, `orderer_name`, `orderer_email`, `orderer_mobile`, `orderer_city`,
 `orderer_side`, `orderer_post`, `orderer_address`, `sender_name`, `sender_email`, `sender_mobile`, 
 `sender_city`, `sender_side`, `sender_post`, `sender_address`,`invoice`, `transport`,
  `pay`, `reservation_sid`) VALUES (?, NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $o_stmt = $mysqli->prepare($o_sql);

//    if($mysqli->error){
//        echo $mysqli->error. '<br>';
//    }

    $o_stmt->bind_param('issssssssssssssssss',
        $_SESSION['user']['member_sid'],
        $_POST['orderer_name'],
        $_POST['orderer_email'],
        $_POST['orderer_mobile'],
        $_POST['orderer_city'],
        $_POST['orderer_side'],
        $_POST['orderer_post'],
        $_POST['orderer_address'],
        $_POST['sender_name'],
        $_POST['sender_email'],
        $_POST['sender_mobile'],
        $_POST['sender_city'],
        $_POST['sender_side'],
        $_POST['sender_post'],
        $_POST['sender_address'],
        $_POST['invoice'],
        $_SESSION['sighup_transport'],
        $_SESSION['sighup_pay'],
        $_POST['reservation_sid']
    );


    $o_stmt->execute();

//    if($o_stmt->error){
//        echo $o_stmt->error. '<br>';
//    }

    if($o_stmt->affected_rows==1){
        $order_sid = $mysqli->insert_id; //取得最近新增資料的主鍵

        $od_sql = "INSERT INTO `orders_details`(
                    `order_sid`, `product_sid`, `price`, `quantity`
                    ) VALUES (?,?,?,?)";
        $od_stmt = $mysqli->prepare($od_sql);

        foreach($keys as $k) {
            $od_stmt->bind_param('iiii',
                $order_sid,
                $k,
                $data[$k]['price'],
                $data[$k]['qty']
            );

            $_SESSION['orders_sid'] = $order_sid;

            $od_stmt->execute();
        };


    } else {
        // 錯誤處理
    };



?>
