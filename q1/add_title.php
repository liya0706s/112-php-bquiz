<?php
include_once "db.php";
// 多個圖片單選選其一，布林值預設是0，大部分是0
if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"./img/".$_FILES['img']['name']);
    $_POST['img']=$_FILES['img']['name'];
}

$_POST['sh']=0;
$Title->save($_POST);
// Title物件執行save函數，將POST的參數引入

header("location:index.php");
?>