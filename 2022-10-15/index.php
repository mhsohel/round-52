<pre>
<?php
include 'library.php';
// function add(int $f,int $s=14)
// {
//     $ff=$f+$s;
//     return array($f,$s,$ff);
// }
// list($first,$second,$result)=add(24,8);
// echo $result;
// $d=add(15.15,17);
// echo $d;

// function f($n) {
//     if ($n>=1){
//         return $n*f($n-1);
//     }else{
//         return 1;
//     }
// }
// echo f(5);

$data=getData('news.txt','*');
$r=getData('new.txt','*');
$dist=getData('test.txt','^');
print_r($dist);
