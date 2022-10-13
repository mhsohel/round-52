<?php
$r=fopen('data.txt','r');
$data=fread($r,10000000);
$news=explode('*',$data);
?>

<h2><?php echo $news[0] ?></h2>
<img src="<?php echo $news[1] ?>" alt=""><br>
<p>
<?php echo $news[2] ?>
</p>