<?php
$con=fopen('news.txt','r');
$data=fread($con,500000000);
$news=explode('*',$data);
// echo "<pre>";
// print_r($news);
// echo "</pre>";
// exit;
$headline=$news[1];
$sub=$news[0];
$content=$news[2];
$img=$news[3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-6 bg-primary"><?php echo $headline ?></div>
        <div class="col-md-6 bg-danger"><?php echo $sub ?></div>
        <div class="col-md-4">
            <img src="<?php echo $img ?>" alt="" class="img-responsive">
        </div>
        <div class="col-md-8">
            <?php echo $content ?>
        </div>
    </div>
</body>
</html>
