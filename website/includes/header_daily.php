<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']))
;

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;
    case 'about.php':
        $title = 'About page of our Website Project';
        $body = 'about inner';
        break;
    case 'daily.php':
        $title = 'Daily page of our Website Project';
        $body = 'daily inner';
        break;
    case 'project.php':
        $title = 'Project page of our Website Project';
        $body = 'project inner';
        break;
    case 'contact.php':
        $title = 'Contact page of our Website Project';
        $body = 'contact inner';
        break;
    case 'gallery.php':
        $title = 'Gallery page of our Website Project';
        $body = 'gallery inner';
        break;
    

}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
case 'Wednesday':
$background = '#E6CAC6';
break;


case 'Thursday':
$background = '#5CE289';
break;

case 'Friday':
$background = '#6CCBFA';
break;

case 'Saturday':
$background = 'orange';
break;

case 'Sunday':
$background = '#A2B5BF';
break;

case 'Monday':
$background = '#F29ABA';
break;

case 'Tuesday':
$background = '#8573BF';


}
// our navigational array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'gallery.php' => 'Gallery',
);
?>
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
                    foreach($nav as $key => $value) {
                        if(THIS_PAGE == $key) {
                            echo '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';
                        } else {
                            echo '<li><a style="color:green;" href=" '.$key.' "> '.$value.' </a></li>';
                        }

                        }//end foreach
                    ?>
                    </ul>
                </nav>
                </div>
            </header>
            <!-- end inner header -->
           
