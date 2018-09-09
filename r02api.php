<?php
require __DIR__ . '/__db_connect.php';



$od_sql = "INSERT INTO `reservation_sid`(
                     `member_sid`, `order_sid`, `reservation_date`, `reservation_time`, `date`
                    ) VALUES (?,?,?,?,NOW())";
    $od_stmt = $mysqli->prepare($od_sql);


    $od_stmt->bind_param('ssss',
        $_SESSION['user']['member_sid'],
        $_SESSION['orders_sid'],
        $_POST['reservation_date'],
        $_POST['reservation_time']
    );

//    unset($_SESSION['orders_sid']);
    $od_stmt->execute();

if (isset($_SESSION['user'])) {

$sql = "UPDATE `orders` SET `reservation_sid`=? WHERE `orders_sid`=?";

    $stmt = $mysqli->prepare($sql);
//            $stmt去接mysqli那個值
    $stmt->bind_param('si',
        $_SESSION['user']['member_sid'],
        $_SESSION['orders_sid']
//最後一格後面不能有逗號！
    );
    $stmt->execute();
}


?>


