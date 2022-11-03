<!DOCTYPE html>
<!-- adding <!DOCTYPE html> on line 1 -->
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- adding meta tags -->
<title>My Adder Assignment</title>
<style>

    p {
        color:red;
        text-align: center;
    }
    
    h1 {
        color:green;
        margin-top:20px;
    }
    
    h2 {
        font-size:1.5em;
        text-align: center;
    }
    
    form {
        width:350px;
        margin:0 auto;
        border:1px solid red;
        padding:10px;
    }
    
    h1 {
        text-align: center;
    }
</style>
<!-- adding styles for the page -->
</head>

<body>
<h1>Adder.php</h1> 
<form action="" method="post">
<label>Enter the first number:</label><input type="number" name="num1"><br>
</label>Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> 
</form>

<?php     //adder-troubleshooting.php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['num1'], $_POST['num2'])){
$num1 = $_POST['num1'];
$num1 = intval($num1);
$num2 = $_POST['num2'];
$num2 = intval($num2);
$myTotal = $num1 + $num2;
echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
echo ' <p> and the answer is <br>
<style="color:red";> '.$myTotal.' !</p>
<p><a href="">Reset page</a></p>';
}
}

?>

</body>
</html>




  <!-- line 41: removing the slash sign before the form tag, adding post method -->

  <!-- line 42: missing opening tag <label>, changing Num1 into num1, changing input type to number -->

  <!-- line 43: missing closing tag </label>, changing input type to number -->

  <!-- line 44: missing closing double quote after "Em!!" -->

  <!-- moving php code below closing form tag -->
  
  <!-- line 48: adding if($_SERVER['REQUEST_METHOD'] == 'POST')  -->

  <!-- line 49: missing $_POST['num2'] -->

  <!-- line 51: missing assigning $num1 as an integer variable -->

  <!-- line 53: missing assigning $num2 as an integer variable -->

  <!-- line 54: removing the '-' sign in front of the '=' sign, changing $Num2 to $num2 -->

  <!-- line 55: changing double quote to single quote around $num1, adding single quotes around .$num2, removing an extra double quote at the end of the line, removing unnecesary space and adding <h2> tag  -->

  <!-- line 57: moving the double quote next to value "red", change double quotes to single quotes around $myTotal and removing double quote next to the closing tag </p> -->

  <!-- line 57: removing the semicolon -->

  <!-- line 58: removing echo and adding the closing </p> tag -->

  <!-- line 60: adding closing bracket for the first if statement -->

  <!-- line 62: adding closing php tag -->

  <!-- last line: removing ';{?>' -->