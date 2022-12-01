<?php

include('config.php');
include('./includes/header.php');
?>
<div id="wrapper">
<main>
<h1>Welcome to our project page about Cities!!</h1>
<?php

$sql = 'SELECT * FROM cities';
//now, we have to connect to our database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//we are asking if the number of rows is greater than 0

if(mysqli_num_rows($result) > 0) {
//we will be reading those rows with a while loop
while($row = mysqli_fetch_assoc($result)){

  echo'

<h2>Information about: <u>'.$row['city'].'</u></h2>
<ul>
<li><b>City Name</b> '.$row['city'].'</li>
<li><b>Country</b> '.$row['country'].'</li>
<li><b>Population</b> '.$row['population'].'</li>
</ul>
<p>For more information about '.$row['city'].', click <a style="color:red;" href="cities-view.php?id='.$row['city_id'].'">here</a></p>
';
}// end while
}else{// end if number of row is greater than 0
echo 'No city!';
}

//we are going to release the server
@mysqli_free_result($result);

//close the connection
@mysqli_close(iConn);




?>
</main>
<aside>
  <h3>Refresh the page to see a random city's image:</h3>
  <?php echo random_cities($photos);?>
</aside>

</div> <!--  end wrapper -->
<?php
include('./includes/footer.php');