<?php

require __DIR__ . '/__db_connect.php';

$result = [];
if(!empty($_GET['sid'])) {
    $sql = 'SELECT * FROM `members_favourite` WHERE `product_sid`=' . $_GET['sid'];
    $stmt = $mysqli->query($sql);
    if ($stmt->num_rows >= 1) {
        $sql = "DELETE FROM `members_favourite` WHERE `member_sid`=" . $_SESSION['user']['member_sid'] . " AND `product_sid`=" . $_GET['sid'];


        $stmt = $mysqli->prepare($sql);


        $stmt->execute();


        $result['success'] = true;



    }

    echo json_encode($result, JSON_UNESCAPED_UNICODE);

}
?>

