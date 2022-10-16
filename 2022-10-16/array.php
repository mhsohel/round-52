<pre>
<?php
// $data=['dhaka','rangpur','bogra'];
// $d=in_array('rajshahi',$data);
// var_dump($d);
// $data=array(
//     'name'=>'Karim',
//     'phone'=>'017578',
//     'department'=>'CSE'
// );
// $d=array_key_exists('phone',$data);
// $d=array_search('Karim',$data);
// var_dump($d);
// $d=array_keys($data);
// $d=array_values($data);
// print_r($d);
// while($k=key($data)){
//     echo $k.'<br>';
//     prev($data);
// }
// echo $data['name'];
// echo next($data);
// echo prev($data);
// echo end($data);
// echo reset($data);

// echo count($data);
// echo sizeof($data);
// $data=['dhaka','air','cat','bogra'];
// $d=array_count_values($data);
// $d=array_unique($data);
// $d=array_reverse($data);
// rsort($data);
// $data=array(
//     'name'=>'Habib',
//     'dist'=>'Rajshahi',
//     'dpt'=>'CSE'
// );
$a=['bangla','english','math'];
$b=[17,18,19,1,5,5,5,5,66,8,6,4,6,555,43,13];
// krsort($data);
// $data= array_combine($a,$b);
// $d=shuffle($b);
// print_r($b);
// echo $b[$d[0]];
// echo "<br>";
// echo $b[$d[1]];
// echo array_sum($b);
$d=array_chunk($b,3);
print_r($d);