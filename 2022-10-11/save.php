<?php
// echo "<pre>";
// print_r($_POST);exit;
$headline=$_POST['headline'];
$subtitle=$_POST['subtitle'];
$photo=$_POST['photo'];
$content=$_POST['content'];
$data=$subtitle.'*'.$headline.'*'.$content.'*'.$photo;
$con=fopen('news.txt','w');
fwrite($con,$data);