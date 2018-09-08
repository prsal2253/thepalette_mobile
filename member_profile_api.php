<?php
require __DIR__ . '/__db_connect.php';
if (isset($_SESSION['user'])) {
    $result = [];
    $sql = "UPDATE `members` SET 
        `name`=?, 
        `gender`=?, 
        `mobile`=?,
        `address_city`=?,
        `address_side`=?, 
        `address_post`=?, 
        `address`=?, 
        `year`=?, 
        `month`=?,
        `day`=? 
        WHERE `member_sid`=?";
//最後一格後面不能有逗號！
    $stmt = $mysqli->prepare($sql);
//            $stmt去接mysqli那個值
    $stmt->bind_param('ssssssssssi',
        $_POST['name'],
        $_POST['gender'],
        $_POST['mobile'],
        $_POST['address_city'],

        $_POST['address_side'],
        $_POST['address_post'],
        $_POST['address'],
        $_POST['year'],

        $_POST['month'],
        $_POST['day'],
        $_SESSION['user']['member_sid']
//最後一格後面不能有逗號！
    );

    $sql_user = 'SELECT `member_sid`, `name`, `gender`, `email`, `password`, `mobile`, `address_city`, `address_side`, `address_post`, `address`, `year`, `month`, `day`, `activated` FROM `members` WHERE `member_sid`=' . $_SESSION['user']['member_sid'];

    $stmt->execute();
    $af = $stmt->affected_rows;
    $stmt->close();
    $user = $mysqli->query($sql_user);
    if ($af == 1) {

        $_SESSION['user'] = $user->fetch_assoc();
        $result['success'] = true;


        echo json_encode($result, JSON_UNESCAPED_UNICODE);
    }

}

?>

