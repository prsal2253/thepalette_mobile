<?php
$mysqli = new mysqli('localhost','orange','0987','the palette');

$mysqli->query("SET NAMES utf8");
//query為執行指令，進出校正編碼為ut8

if(! isset($_SESSION)){
    session_start();
}
//如果沒有設定$_SESSION才讓session_start()啟動