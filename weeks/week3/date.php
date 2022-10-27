<?php
// date function and if statement
echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';
date_default_timezone_set('America/Los_Angeles');

echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';

$name ='Nhi';
$our_time = date('H:i A');
echo '<br>';
echo $our_time;

//the logic behind this is, IF the time is less or equal to 11, then it is morning.
// if the time is less or equal to 17, which equal 5, then it is afternoon
// now we will have an else, that will mean it is evening!

if($our_time <=11) {
    echo '<h2 style="color:yellow;">Good Morning, '.$name.'</h2>
    <img src="./images/sun.png" alt="sun">
    <p>It\'s time to get up!</p>';
} elseif($our_time <=17) {
    echo '<h2 style="color:green;">Good Afternoon, '.$name.'</h2>
    <img src="./images/afternoon.png" alt="afternoon">
    <p>It\'s afternoon!</p>';
} else {
    echo '<h2 style="color:blue;">Good Eveneing, '.$name.'</h2>
    <img src="./images/evening.png" alt="evening">
    <p>It\'s time to have dinner!</p>';
}