<?php
require __DIR__ . '/__db_connect.php';



    $od_sql = "INSERT INTO `reservation_sid`(
                     `member_sid`, `order_sid`, `reservation_date`, `reservation_time`
                    ) VALUES (?,?,?,?)";
    $od_stmt = $mysqli->prepare($od_sql);


    $od_stmt->bind_param('ssss',
        $_SESSION['user']['member_sid'],
        $_SESSION['orders_sid'],
        $_POST['reservation_date'],
        $_POST['reservation_time']
    );

    unset($_SESSION['orders_sid']);
    $od_stmt->execute();


?>

