<?php
include('./includes/header.php');
 
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
case 'Wednesday':
$food = '<h2>Wednesday is Pasta Day!</h2>';
$pic = 'pasta.png';
$alt = 'Pasta';
$content = '<p> <b>Pasta </b> is a type of food typically made from an unleavened dough of wheat flour mixed with water or eggs, and formed into sheets or other shapes, then cooked by boiling or baking.</p>';
break;


case 'Thursday':
$food = '<h2>Thursday is Pho Day!</h2>';
$pic = 'pho.png';
$alt = 'Pho';
$content = '<p> <b>Phở or pho</b> is a Vietnamese soup dish consisting of broth, rice noodles, herbs, and meat. Pho is a popular food in Vietnam where it is served in households, street stalls and restaurants countrywide. Nam Định people were the first to create Vietnamese traditional pho. Pho is considered Vietnam\'s national dish.</p>';
break;

case 'Friday':
$food = '<h2>Friday is Vetetarian Food Day</h2>';
$pic = 'vegetarian_food.png';
$alt = 'Vegetarian Food';
$content = '<p> <b>Vegetarian cuisine </b>is based on food that meets vegetarian standards by not including meat and animal tissue products (such as gelatin or animal-derived rennet). </p>';
break;

case 'Saturday':
$food = '<h2>Saturday is Ramen Day!</h2>';
$pic = 'ramen.png';
$alt = 'Ramen';
$content = '<p> <b>Ramen </b> is a Japanese noodle dish. It consists of Chinese-style wheat noodles served in a broth; common flavors are soy sauce and miso, with typical toppings including sliced pork, nori, menma, and scallions. Ramen has its roots in Chinese noodle dishes.</p>';
break;

case 'Sunday':
$food = '<h2>Sunday is Hot Pot Day!</h2>';
$pic = 'hotpot.png';
$alt = 'Hot Pot';
$content = '<p> <b>Hot pot or hotpot </b>, also known as soup-food or steamboat, is a cooking method that originated in China. A heat source on the dining table keeps a pot of soup stock simmering, and a variety of Chinese foodstuffs and ingredients are served beside the pot for the diners to put into the hot stock. </p>';
break;

case 'Monday':
$food = '<h2>Monday is BBQ Day!</h2>';
$pic = 'BBQ.png';
$alt = 'BBQ';
$content = '<p> <b>Barbecue or barbeque (BBQ)</b> is a term used with significant regional and national variations to describe various cooking methods that use live fire and smoke to cook the food.  </p>';
break;

case 'Tuesday':
$food = '<h2>Tuesday is Curry Rice Day!</h2>';
$pic = 'curry_rice.png';
$alt = 'Curry Rice';
$content = '<p><b>Rice and curry </b> is a popular dish in Sri Lanka, as well as in the Indian subcontinent. Rice and curry dinner comprises the following: A large bowl of rice, most often boiled, but frequently fried. Sometimes kiribath, rice cooked in coconut milk, is served. A vegetable curry, perhaps of green beans, jackfruit or leeks.</p>';
break;


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
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
<body>
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
    <li><a href="daily.php?today=Monday">Monday</a></li>
    <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
    <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    <li><a href="daily.php?today=Thursday">Thursday</a></li>
    <li><a href="daily.php?today=Friday">Friday</a></li>
    <li><a href="daily.php?today=Saturday">Saturday</a></li>
    <li><a href="daily.php?today=Sunday">Sunday</a></li>
    
</ul>
</div>
    <!-- end wrapper -->
</body>
</html>
<?php
include('./includes/footer.php');
?>