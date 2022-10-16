<?php
function add($f,$s){
    return $f+$s;
}
function sub($f,$s){
    return $f-$s;
}
function getData($file_url,$delimeter){
    $con=fopen($file_url,'r');
    $data=fread($con,157578);
    $d=explode($delimeter,$data);
    return $d;
}
