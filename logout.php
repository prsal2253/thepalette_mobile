<?php
session_start();
unset($_SESSION['user']);
?>

<?php include 'page_item/head.php';?>
</head>
<body id="login" class="">
<!-- top -->
<div class="index_top">
    <?php include 'page_item/header.php';?>
</div>
<!-- main -->
<div class="index_main">
    <!-- 麵包屑 -->
    <section  class="bread_crumbs">
        <ul>
            <li><a href="#">home</a></li>
            <li><a href="#">member</a></li>
            <li>logout</li>
        </ul></section>
    <section  class="item_10">
        <div class="index_conten">
        </div>
    </section>
</div>

<script>
    alert('登出成功，一秒後跳轉頁面');
    <?php if(isset($_SERVER['HTTP_REFERER'])):?>

setTimeout(function(){
    location.href = "<?= $_SERVER['HTTP_REFERER'] ?>";
                    }, 1000);
<?php else:?>
    setTimeout(function(){
        location.href = 'index.php';
    }, 1000);

<?php endif;?>
</script>