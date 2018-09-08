<?php

//require __DIR__ . '/__db_connect.php';
$mysqli = new mysqli('localhost', 'orange', '0987', 'the palette');

$mysqli->query("SET NAMES utf8");


$pageName = 'product_list_red';

$build_query = [];

# 商品資料 begin>
$per_page = 16; //一頁有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; //用戶要看第幾頁
//intval取整數
$page1 = $page + 1;
$page2 = $page - 1;


$color = isset($_GET['color']) ? $_GET['color'] : 0; //顏色
$items = isset($_GET['items']) ? $_GET['items'] : 0;//種類
$long = isset($_GET['long']) ? intval($_GET['long']) : 0;//寬度
$high = isset($_GET['high']) ? intval($_GET['high']) : 0;//高度
$price = isset($_GET['price']) ? intval($_GET['price']) : 0; //時間價格

$where = " WHERE `product_color_sid` BETWEEN 4 AND 6 ";

if(!empty($color)){
    $c = explode(',', $color);
    $color_condition = ' AND (product_color_sid='. implode(' OR product_color_sid=', $c) . ')';
    // 2 OR product_color_sid=3
    $where .= $color_condition;
}

if(!empty($items)){
    $i = explode(',', $items);
    $items_condition = ' AND (category_sid='. implode(' OR category_sid=', $i) . ')';
    $where .= $items_condition;
}

if ($long == 50) {
    $where .= " AND `size_sid_w`=1";

} elseif ($long == 100) {
    $where .= " AND `size_sid_w`=2";

} elseif ($long == 150) {
    $where .= " AND `size_sid_w`=3";

}

if ($high == 50) {
    $where .= " AND `size_sid_h`=1";

} elseif ($high == 100) {
    $where .= " AND `size_sid_h`=2";

} elseif ($high == 150) {
    $where .= " AND `size_sid_h`=3";

}


if ($price == 1) {
    $where .= " ORDER BY `price` ASC ";
    $build_query['price'] = $price;
} elseif ($price == 2) {
    $where .= "  ORDER BY `price` DESC  ";
    $build_query['price'] = $price;
}elseif ($price == 3) {
    $where .= "  ORDER BY `publish_date` ASC  ";
    $build_query['price'] = $price;
}elseif ($price == 4) {
    $where .= "  ORDER BY `publish_date` DESC  ";
    $build_query['price'] = $price;
}


$total_sql = "SELECT COUNT(1) FROM `products_list` $where";
$total_rows = $mysqli->query($total_sql)->fetch_row()[0]; //這邊拿到的是總筆數
$total_pages = ceil($total_rows / $per_page);


$product_sql = sprintf("SELECT * FROM  `products_list` $where LIMIT %s, %s ", ($page - 1) * $per_page, $per_page);
//這裡會拿到sql的字串
//echo $product_sql; exit;

$product_rs = $mysqli->query($product_sql);


?>

    <div class="sort_red05_row flex">
        <?php while ($r = $product_rs->fetch_assoc()): ?>
            <div name="product" class="sort_red05_box_s product_sid_data" data-sid="<?= $r['product_sid'] ?>">
                <img src="images/<?= $r['img'] ?>.png" alt="<?= $r['product_name'] ?>">
                <div class="product_mask transition">
                    <div class="product_favorate transition"></div>
                    <div class="product_name_nd_btn">
                        <div class="product_name">
                            <h3 class="product_name_h3"><a href="#"
                                                           id="product_name"><?= $r['product_name'] ?></a></h3>
                        </div>
                        <div class="product_btn"></div>
                        <a href="product_quicklook.php?id=<?= $r['product_sid'] ?>"
                           class="palette_btn quick_look_palette_btn quick"
                           data-fancybox
                           data-options='{"type" : "iframe", "iframe" : {"preload" : false, "css" : {"width" : "1000px","height" :
                                   "70vh"}}}'>快速查看</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <!-- 頁碼 -->
    <div class="sort_red05_page">
        <ul>
            <a <?= $page == 1 ? "style='display: none'" : "href='?page=" . $page2 . "&" . http_build_query($build_query) .'#my_red'. "'" ?>>
                <!--                           接字串的方式 $page2是變數 前後加上. -->
                <li class="page_prev">
                    <figure></figure>
                    PREV
                </li>
            </a>
            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page p<?= $i == $page ? 'active' : '' ?>">
                    <a <?= $page == $i ? '' : "href='?page=" . $i . "&" . http_build_query($build_query) . '#my_red'."'" ?>>
                        <p><?= $i ?></p></a>
                </li>
            <?php endfor ?>
            <a <?= $page == $total_pages ? "style='display: none'" : "href='?page=" . $page1 . "&" . http_build_query($build_query) .'#my_red'. "'" ?>>
                <li class="page_next">
                    <figure></figure>
                    NEXT
                </li>
            </a>
        </ul>
    </div>
