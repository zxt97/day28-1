<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{margin:0px;padding:0px;}
    img{width:500px;height:400px;}
    .box{width:502px;height:525px;border:1px solid black;margin:20px auto;}
    .bottom{width:500px;height:50px;margin-top:20px;}
    div audio{width:100%;height:100%;}
    .top{width:500px;height:50px;text-align:center;line-height:50px;}
    </style>
</head>
<body>
    <?php
        $name = $_GET['name'];
    ?>
    <div class="box">
       <div class="top">
           <h2>歌名: <?php echo $name  ?></h2>
       </div>
       <img src="images/<?php echo $name  ?>.jpg" />
       <div class="bottom">
           <audio controls="controls" autoplay="autoplay" src="mp3/<?php echo $name  ?>.mp3"></audio>
    </div>
 </div>
</body>
</html>