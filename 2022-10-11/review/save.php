<?php
// echo implode('*',$_POST);exit;
$email=$_POST['email'];
$phone=$_REQUEST['phone'];
$con=fopen('student.txt','w');
fwrite($con,'Email: '.$email.', Phone: '.$phone);