<?php
$con=fopen('student.txt','r');
$data=fread($con,15789);
echo $data;