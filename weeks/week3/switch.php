<?php
//$variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// } else
// echo 'Variable has not been set!';

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'TOday has been set';
// } else {
//     echo 'NOT!!!!!';
// }

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
case 'Wednesday':
$coffee = '<h2>Wednesday is our Pumpkin Latte Day!</h2>';
$pic = 'pumpkin.jpg';
$alt = 'Pumpkin Latte';
$content = '<p> <b>A pumpkin latter</b> is a coffee drink made with a mix of traditional autumn spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. </p>';
break;

case 'Thursday':
$coffee = '<h2>Thursday is our Green Tea Latte Day!</h2>';
$pic = 'greentea.jpg';
$alt = 'Green Tea';
$content = '<p> <b>A green tea latter</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place. </p>';
break;

case 'Friday':
$coffee = '<h2>Friday is our Regular Joe Day!</h2>';
$pic = 'coffee.png';
$alt = 'Regular Coffee';
$content = '<p> <b>Coffee</b>  is a drink prepared from roasted coffee beans. Darkly colored, bitter, and slightly acidic, coffee has a stimulating effect on humans, primarily due to its caffeine content. It is the most popular hot drink in the world. </p>';
break;

case 'Saturday':
$coffee = '<h2>Saturday is our Latte Day!</h2>';
$pic = 'latte.jpg';
$alt = 'Latte';
$content = '<p> <b>Caffè latte </b>, often shortened to just latte in English, is a coffee beverage of Italian origin made with espresso and steamed milk </p>';
break;

case 'Sunday':
$coffee = '<h2>Sunday is our Americano Day!</h2>';
$pic = 'americano.png';
$alt = 'Americano';
$content = '<p> <b>Caffè Americano </b> is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. Its strength varies with the number of shots of espresso and amount of water added.</p>';
break;
case 'Monday':
$coffee = '<h2>Monday is our Lemon Tea Day!</h2>';
$pic = 'lemontea.png';
$alt = 'Lemon Tea';
$content = '<p> <b>Lemon tea </b>,is a low-sugar, low-calorie way to add a range of vitamins and minerals to your diet. Grating lemon zest into your tea also adds the peel\'s limonene. This antioxidant, found in fruit peels, may lower your risk of cancer, diabetes, osteoarthritis, and other chronic diseases. </p>';
break;
case 'Tuesday':
$coffee = '<h2>Tuesday is our Boba Tea Day!</h2>';
$pic = 'bobatea.png';
$alt = 'Boba Tea';
$content = '<p> <b>Boba tea </b> is a tea-based drink that originated in Taiwan in the early 1980s. Taiwanese migrants brought it to the United States in the 1990s, initially in California through regions like Los Angeles county, but has likewise spread to other countries where there is a large East Asian diasporic population.</p>';
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
        h1, h2, img {
            margin-bottom:10px;
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
<h1>My Wonderful Switch Classwork Execise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
    <img src="./images/<?php echo $pic;?>" alt="<?php
 echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials</h2>
<ul>
    <li><a href="switch.php?today=Monday">Monday</a></li>
    <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
    <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
    <li><a href="switch.php?today=Thursday">Thursday</a></li>
    <li><a href="switch.php?today=Friday">Friday</a></li>
    <li><a href="switch.php?today=Saturday">Saturday</a></li>
    <li><a href="switch.php?today=Sunday">Sunday</a></li>
    
</ul>
</div>
    <!-- end wrapper -->
</body>
</html>
