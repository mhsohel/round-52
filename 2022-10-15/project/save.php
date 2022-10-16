<?php
include "../library.php";
$news=$_POST['headline'].'*'.$_POST['date'].'*'.$_POST['details'];
$data=getData('../new.txt','^');
array_push($data,$news);
// echo "<pre>";
// print_r($data);
 $d=implode('^',$data);
 $con=fopen('../new.txt','w');
 fwrite($con,$d);
