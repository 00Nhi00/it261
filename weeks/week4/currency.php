<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>currency if/else</title>
    <!-- <link href="css/styles.css" type="text/css" rel="stylesheet"> -->
    <style>

    </style>
</head>
<body>
    <h1>Currency - if/else</h1>
    <form action="" method="post">
        <fieldset>
        <label>NAME</label>
        <input type="text" name="name">

        <label>EMAIL</label>
        <input type="email" name="email">

        <label>How much money do you have?</label>
        <input type="number" name="amount">

        <label>Choose your currency</label>

        <input type="radio" id="rubles" name="currency" value="Rubles" checked> 
        <label for="Rubles">Rubles</label>
        <input type="radio" id="canadian" name="currency" value="Canadian">
        <label for="Canadian">Canadian</label>
        <input type="radio" id="pound" name="currency" value="Pounds">
        <label for="Pounds">Pounds</label>
        <input type="radio" id="euros" name="currency" value="Euros">
        <label for="Euros">Euros</label>
        <input type="radio" id="yen" name="currency" alue="Yen">
        <label for="Yen">Yen</label>
        
        <label for="bank">Choose your banking institution</label>

        <select name="bank">
        <option value="" NULL>Select one</option>
        <option value="Chase">Chase</option>
        <option value="Bank of America">Bank of America</option>
        <option value="Well Fargo">Well Fargo</option>
        <option value="Credit Union">Credit Union</option>
        <option value="Capital One">Capital One</option>
        <option value="Other">Others</option>
        </select>
        <input type="submit" value="Convert It">
        <p><a href="">RESET</a></p>
        </fieldset>
    </form>
    

<?php
    if(isset($_POST['name'],
    $_POST['email'],
    $_POST['amount'], 
    $_POST['currency'], 
    $_POST['bank'])){
        if(empty($_POST['name']&&
        $_POST['email'] &&
        $_POST['emal'] &&
        $_POST['currency'] &&
        $bank = $_POST['bank'])) {
        echo '<p class="error">Please fill out all of the fields</p>';
        } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];
        $currency = $_POST['currency'];
        $bank = $_POST['bank'];
        }
    }
        ?>
</body>
</html>