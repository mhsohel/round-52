<?php 
include '../library.php';
$data=getData('../new.txt','^');
$data=array_reverse($data);
// echo "<pre>";
// print_r($data);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        li:hover{
            background-color: red;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="logo.PNG" alt="">
            </div>
            <div class="col-md-6">
                
            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              
          
              <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Latest</a></li>
                        <li><a href="#">Bangladesh</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">International</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Economics</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Education</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Technology</a></li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="col-md-12">

            <div class="row">
                <?php
                foreach($data as $d){
                    $news=explode('*',$d);
                ?>
                <div class="col-md-4">
                    <h2><?php echo $news[0] ?></h2>
                    <em><?php echo $news[1] ?></em>
                    <p><?php echo $news[2] ?></p>
                </div>
                <?php } ?>
            </div>
           
            
        </div>
    </div>
    
    
    <script src="jquery-3.6.1.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>