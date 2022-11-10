<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-wide, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible"
        content="ie=edge">
        <title><?php echo $title; ?></title>
        <link href="./css/styles.css" type="text/css" rel="stylesheet">
        <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

        body {
            background-color:<?php echo $background;?>;
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
            list-style-type:none;
        }

        li a{
            text-decoration:none;
        }

       
    </style>
    </head>
    <body class="<?php echo $body ;?>">
            <header>
                <div class="inner-header">      
                <a href="index.php">
                <img id="logo" src="images/logo.png" alt="logo">
                </a>     
                <!--<nav>
                    <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Project</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                    </ul>
                </nav> -->
                <nav>
                    <ul>
                    <?php
                   echo make_links($nav);
                    ?>
                    </ul>
                </nav>
                </div>
            </header>
            <!-- end inner header -->
           
