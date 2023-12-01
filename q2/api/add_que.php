<?php

include_once "../db.php";

dd($_POST);

$data=[];
// 資料表的text等於 收到post的subject主題
$date['text']=$_POST['subject'];
// 主題是subject_id是0，標記
// 家庭裡面大於30歲的是父母，是父母就是長輩
$data['subject_id']=0;
$date['count']=0;
// 1代表上架
$data['sh']=1;

$Que->save($data);

foreach($_POST['opt'] as $opt){
    //先清空
    $data=[]; 
    // 該主題(id) 的選項，要確認主題是唯一值
    $subject_id=$Que->find(['text'=>$_POST['subject']])['id'];
    $data['text']=$opt;
    $data['subject_id']=$subject_id;
    $date['count']=0;
    $data['sh']=1;
    $Que->save($data);
}

header("location:admin.php");

?>