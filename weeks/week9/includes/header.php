<?php
define('THIS_PAGE', basename($_SERVER['PHP_SELF']))
;

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page';
        break;
    case 'login.php':
        $title = 'Login page';
        break;
    case 'register.php':
        $title = 'Registration page';
        break;
    }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href ="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    
