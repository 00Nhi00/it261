<?php
// our config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

 

 

 

 

 

 

 

 

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
// create random_images function for people.php page
$pics[0] = 'pic1';
$pics[1] = 'pic2';
$pics[2] = 'pic3';
$pics[3] = 'pic4';
$pics[4] = 'pic5';




function random_images($pics) {
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$pics[$i].'.jpeg';
    $my_return = '<img src="images/'.$selected_image.'" alt="'.$pics[$i].'">';
    return $my_return;
}

