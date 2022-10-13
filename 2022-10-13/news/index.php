<?php
include_once('../header.php');
?>
<body>
    <div class="container">
        <?php 
        include('../menu.php'); 
        $con=fopen('data.txt','r');
        $data=fread($con,587555);
        $list=explode('*',$data);
        ?>
        <div class="col-md-8">
            <?php foreach($list as $l){
                $n=explode('^',$l);
                 ?>
                <div class="row bg-primary">
                    <h3><?php echo $n[0] ?></h3>
                    <em><?php echo $n[1] ?></em><br>
                    <p><?php echo $n[2] ?></p>
                    <hr>
                </div>
            <?php } ?>
            
        </div>
        <?php include('../sidebar.php') ?>
    </div>
</body>
</html>