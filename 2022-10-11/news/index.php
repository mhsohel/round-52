<style>
.bg{
    background: gray; 
    border:1px solid black; 
    margin-left: 50px; 
    margin-right: 50px
}
    </style>
<?php
$con=fopen('news.txt','r');
$data=fread($con,157899);
$list=explode('&',$data);
echo "<pre>";
// print_r($list);
foreach($list as $l){
    $n=explode('*',$l);
  ?>
  <div class="bg">
    <h1><?php echo $n[0] ?></h1>
    <strong><?php echo $n[1] ?></strong><br>
    <p><?php echo $n[2] ?></p>
    </div>
  <?php
}
?>