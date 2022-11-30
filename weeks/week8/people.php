<?php

include('config.php');

$sql = 'SELECT * FROM people';
//now, we have to connect to our database

// $iConn = mysqli_connect(BD_NAME, DB_USER, DB_PASSWORD, DB_HOST) OR die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die(myError(__FILE__,__LINE__,mysqli_connect_error()));
 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

//we are asking if the number of rows is greater than 0

if(mysqli_num_rows($result) > 0) {
//we will be reading those rows with a while loop
while($row = mysqli_fetch_assoc($result)){

  echo'
<h2>Information about: '.$row['first_name'].'</h2>
<ul>
<li><b>First Name</b> '.$row['first_name'].'</li>
<li><b>Last Name</b> '.$row['last_nane'].'</li>
<li><b>Birthday</b> '.$row['birthday'].'</li>
</ul>
<p>For more information about '.$row['first_name'].', click <a href="people-view.php?id='.$row['people_id'].'">here</a></p>
';
}// end while
}// end if number of row is greater than 0

?>