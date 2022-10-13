<?php
$data=6;
$prime=true;
for ($i=2; $i < $data; $i++) { 
    if($data%$i==0){
        $prime=false;
        break;
    }
}
if($prime==true){
    echo "it is a prime number";
}else{
    echo "Not prime";
}
