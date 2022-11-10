<?php
include('config.php');
include('./includes/header_daily.php');
 
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title> -->
    <!-- <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

        body {
            background-color:<////////?php echo $background;?>;
        }
        
        #wrapper {
            width:940px;
            margin:20px auto;
        }
        h1, h2  {
            margin-bottom:10px;
            color:red;
            text-align:center;
            
        }

        #logo {
            margin-left:0;
        }
        
        img {
            margin-bottom:10px;
            margin-left:300px;
        }

        p {
            margin-bottom:20px;
        }
        
        li {
            margin-bottom:20px;
        }

       
    </style> -->

<div id="wrapper">
<h1>Welcome to our daily page!</h1>
<?php
echo $food;
?>
    <img src="./images/<?php echo $pic;?>" alt="<?php
 echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials</h2>
<ul>
    <li><a style="color:<?php if ($today== 'Monday') {
        echo'red';
        }else{
        echo'purple';
        };?>" href="daily.php?today=Monday">Monday</a></li>
    <li><a style="color:<?php if ($today== 'Tuesday') {
        echo'red';
        }else{
        echo'purple';
        };?>"href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a style="color:<?php if ($today== 'Wednesday') {
        echo'red';
        }else{
        echo'purple';
        };?>"href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a style="color:<?php if ($today== 'Thursday') {
        echo'red';
        }else{
        echo'purple';
        };?>"href="daily.php?today=Thursday">Thursday</a></li>
    <li><a style="color:<?php if ($today== 'Friday') {
        echo'red';
        }else{
        echo'purple';
        };?>"href="daily.php?today=Friday">Friday</a></li>
    <li><a style="color:<?php if ($today== 'Saturday') {
        echo'red';
        }else{
        echo'purple';
        };?>"href="daily.php?today=Saturday">Saturday</a></li>
    <li><a style="color:<?php if ($today== 'Sunday') {
        echo'red';
        }else{
        echo'purple';
        };?>"href="daily.php?today=Sunday">Sunday</a></li>
    
</ul>
</div>
    <!-- end wrapper -->
<!-- </body>
</html> -->
<?php
include('./includes/footer.php');
?>