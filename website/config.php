<?php

ob_start();

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
// our navigational array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);
// function for homework 6
function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a style="color:red;" href=" '.$key.' "> '.$value.' </a></li>';
        } else {
             $my_return .='<li><a style="color:green;" href=" '.$key.' "> '.$value.' </a></li>';
        }
    }//end for each
    return $my_return;
}
// this is the beginning of the switch for homework 3

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
case 'Wednesday':
$background = '#E6CAC6';
$food = '<h2>Wednesday is Pasta Day!</h2>';
$pic = 'pasta.png';
$alt = 'Pasta';
$content = '<p> <b>Pasta </b> is a type of food typically made from an unleavened dough of wheat flour mixed with water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking. Pasta is for Wednesday!</p>';
break;


case 'Thursday':
$background = '#5CE289';
$food = '<h2>Thursday is Pho Day!</h2>';
$pic = 'pho.png';
$alt = 'Pho';
$content = '<p> <b>Phở or pho</b> is a Vietnamese soup dish consisting of broth, rice noodles, herbs, and meat. Pho is a popular food in Vietnam where it is served in households, street stalls and restaurants countrywide. Nam Định people were the first to create Vietnamese traditional pho. Pho is considered Vietnam\'s national dish. Let\'s have pho for Thursday!</p>';
break;

case 'Friday':
$background = '#6CCBFA';
$food = '<h2>Friday is Vetetarian Food Day</h2>';
$pic = 'vegetarian_food.png';
$alt = 'Vegetarian Food';
$content = '<p> <b>Vegetarian cuisine </b>is based on food that meets vegetarian standards by not including meat and animal tissue products (such as gelatin or animal-derived rennet).Firday is for Vetetarian food! </p>';
break;

case 'Saturday':
$background = 'orange';
$food = '<h2>Saturday is Ramen Day!</h2>';
$pic = 'ramen.png';
$alt = 'Ramen';
$content = '<p> <b>Ramen </b> is a Japanese noodle dish. It consists of Chinese-style wheat noodles served in a broth; common flavors are soy sauce and miso, with typical toppings including sliced pork, nori, menma, and scallions. Ramen has its roots in Chinese noodle dishes. Ramen is for Saturday!</p>';
break;

case 'Sunday':
$background = '#A2B5BF';
$food = '<h2>Sunday is Hot Pot Day!</h2>';
$pic = 'hotpot.png';
$alt = 'Hot Pot';
$content = '<p> <b>Hot pot or hotpot </b>, also known as soup-food or steamboat, is a cooking method that originated in China. A heat source on the dining table keeps a pot of soup stock simmering, and a variety of Chinese foodstuffs and ingredients are served beside the pot for the diners to put into the hot stock. Sunday is for hot pot!</p>';
break;

case 'Monday':
$background = '#F29ABA';
$food = '<h2>Monday is BBQ Day!</h2>';
$pic = 'BBQ.png';
$alt = 'BBQ';
$content = '<p> <b>Barbecue or barbeque (BBQ)</b> is a term used with significant regional and national variations to describe various cooking methods that use live fire and smoke to cook the food. BBQ is for Monday! </p>';
break;

case 'Tuesday':
$background = '#8573BF';
$food = '<h2>Tuesday is Curry Rice Day!</h2>';
$pic = 'curry_rice.png';
$alt = 'Curry Rice';
$content = '<p><b>Rice and curry </b> is a popular dish in Sri Lanka, as well as in the Indian subcontinent. Rice and curry dinner comprises the following: A large bowl of rice, most often boiled, but frequently fried. Sometimes kiribath, rice cooked in coconut milk, is served. A vegetable curry, perhaps of green beans, jackfruit or leeks. Curry rice is for Tuesday!</p>';
break;

}
//my form's php


$first_name= '';
$last_name = '';
$email = '';
$phone = '';
$wines = '';
$gender = '';
$regions = '';
$privacy = '';
$comments = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$wines_err = '';
$gender_err = '';
$regions_err = '';
$privacy_err = '';
$comments_err = '';




if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['wines'])) {
        $wines_err="What, no wines?!";
    } else {
        $wines = $_POST['wines'];
    }

    if(empty($_POST['first_name'])) {
        $first_name_err="Please fill out your first name!";
    } else {
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])) {
        $last_name_err="Please fill our your last name!";
    } else {
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])) {
        $email_err="Please fill out your email!";
    } else {
        $email = $_POST['email'];
    }

    if(empty($_POST['gender'])) {
        $gender_err="Please choose your gender!";
    } else {
        $gender = $_POST['gender'];
    }
    if(empty($_POST['phone'])) {
        $phone_err="Please fill out your phone number!";
    } else {
        $phone = $_POST['phone'];
    }
    
    if(empty($_POST['regions'])) {
        $regions_err="Please select your regions";
    } else {
        $regions = $_POST['regions'];
    }

    if(empty($_POST['comments'])) {
        $comments_err="Please share your thought with us!";
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err="Please agree to our privacy policy";
    } else {
        $privacy = $_POST['privacy'];
    }

    //wines function
     function my_wines($wines){
        $my_return = '';
        if(!empty($_POST['wines'])){
            $my_return = implode(', ', $_POST['wines']);

        }else{
            $wines_err = 'Please fill out your wines!';
        }
        return $my_return;
     }//end function

    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['phone'],
    $_POST['wines'],
    $_POST['regions'],
    $_POST['comments'],
    $_POST['privacy'])){

    $to = 'thaonhi.nguyen411@gmail.com';
    $subject = 'Test Email on '.date('m/d/y, h i A');
    $body = '
    First Name : '.$first_name.' '.PHP_EOL.'
    Last Name : '.$last_name.' '.PHP_EOL.'
    Email : '.$email.' '.PHP_EOL.'
    Gender : '.$gender.' '.PHP_EOL.'
    Phone : '.$phone.' '.PHP_EOL.'
    Wines : '.my_wines($wines).' '.PHP_EOL.'
    Regions : '.$regions.' '.PHP_EOL.'
    Comments : '.$comments.' '.PHP_EOL.'
    ';

    $headers = array(
        'From' => 'noreply@mystudentswa.com'
    );
    
    if(!empty($first_name && $last_name && $email && $gender && $phone && $regions && $wines && $comments)){

    
    mail($to, $subject, $body, $headers);
    header('Location:thx.php');
    }
}//end isset
}// end server request method
