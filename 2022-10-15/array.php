<?php
$data=[147,'Dhaka'];
// $data=array(147,'Dhaka');
// $data=array(
//     'roll'=>147,
//     'district'=>'Dhaka'
// );
// list($roll,$dist)=$data;
// echo $roll;
// foreach ($data as $key => $value) {
//    echo $value;
// }

// array_push($data,'Bogra');
array_unshift($data,'Bogra');
// echo $d=array_pop($data);
echo array_shift($data);

echo "<pre>";
print_r($data);