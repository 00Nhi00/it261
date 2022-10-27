<?php
//this file will demonstrate for loops and in addition to placing your php inside your HTML!!!
//The for loop -Loops through a block of code a specified number of times.
// for (init coutner; test counter; increment counter) {code to be executed for each iteration;}

//celcius and fahrenheit

//$far = {$celcius * 9/5) +32;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
    * {
        padding:0;
        margin:0;
        box-sizing:border-box;
    }

    table {
        width:500px;
        margin:20px;
        border-collapse:collapse;
        border:1px solid lightblue;
    }

    td {
        border:1px solid lightblue;
        border-collapse:collapse;
        padding:5px;
    }
    </style>
</head>
<body>
    <h1>My Celcius / Fahrenheit Table</h1>
    <table>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
        for($cel = 0; $cel <= 100; $cel +=2) {
        $far = number_format(($cel * 9/5) +32,0);
        echo '<tr>';
        echo '<td> '.$cel.' degrees </td>';
        echo '<td> '.$far.' degrees </td>';
        echo '</tr>';   
        }
        ?>
    </table>
    <h2>My Kilometer/Mileage Table</h2>
   <table >
        <tr>
            <th>Kilometer</th>
            <th>Milage</th>
        </tr>
        <?php
        for($km = 0; $km <= 100; $km +=5) {
        $mile = number_format(($km * 0.62137),2);
        echo '<tr>';
        echo '<td> '.$km.' kilometers </td>';
        echo '<td> '.$mile.' mileages </td>';
        echo '</tr>';   
        }
        ?>
    </table>
</body>
</html>