<?php
// this will be our cities-view page, which of course starts with our include, pointing to our config, BUT NOT our header include!
include('config.php');

//is our get set - is it isset?
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:cities.php');
}    

// we will now select from the table where city_id = id

$sql = 'SELECT * FROM cities WHERE city_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $city = stripcslashes($row['city']);
        $country = stripcslashes($row['country']);
        $population = stripcslashes($row['population']);
        $blurb = stripcslashes($row['blurb']);
        $details = stripcslashes($row['details']);
        $feedback = '';
    } //close while
}else{//end if statement
    $feedback = 'There is a problem!!!';
} // end else

include('./includes/header.php');
?>
<div id="wrapper">
    <main>
        <h1>Welcome to our Cities View Page!</h1>
        <h2>Introducing you to <?php echo $city;?></h2>
        <ul>
            <?php
            echo '
            <li><b>City Name: </b>'.$city.'</li>
            <li><b>Country: </b>'.$country.'</li>
            <li><b>Population: </b>'.$population.'</li>
            <li>
            <p>'.$details.'</p>
            </li>
            
            ';
            ?>
        </ul>
        <p><a style="color:red;" href="cities.php">Return to the cities page!</a></p>
    </main>
    <aside>
        <h3>A picture of <?php echo $city;?>:</h3>
        <figure>
        <img src="images/<?php echo strtolower(str_replace(' ','',$city));?>.jpeg" alt="<?php echo $city;?>">
        <figcaption>
            <?php
            echo'
            <b>'.$city.' - '.$country.', '.$population.' people </b>
            ';
            ?>
        </figcaption>
        </figure>
        <p><i><?php
        echo $blurb;
        ?></i></p>

    </aside>
   
    <?php
    //we are going to release the server
    @mysqli_free_result($result);

    //close the connection
    @mysqli_close(iConn);

    ?>
</div>

<?php
include('./includes/footer.php');