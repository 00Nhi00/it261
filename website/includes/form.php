<?php
ob_start();
//test errors 
error_reporting(-1);
ini_set('display_errors', 'On');

$first_name= '';
$last_name = '';
$email = '';
$phone = '';
$pets = '';
$gender = '';
$size = '';
$privacy = '';
$comments = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$pets_err = '';
$gender_err = '';
$size_err = '';
$privacy_err = '';
$comments_err = '';




if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['pets'])) {
        $pets_err="Please choose your favorite pets!";
    } else {
        $pets = $_POST['pets'];
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

   
   
    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_err = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        } // end else
        } // end main if
    if(empty($_POST['gender'])) {
        $gender_err="Please choose your pet's gender!";
        } else {
        $gender = $_POST['gender'];
        }
    if(empty($_POST['size'])) {
        $size_err="Please select your pet's size";
    } else {
        $size = $_POST['size'];
    }

    if(empty($_POST['comments'])) {
        $comments_err="Please fill out your requirements if any!";
    } else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])) {
        $privacy_err="Please agree to our privacy policy!";
    } else {
        $privacy = $_POST['privacy'];
    }

    //pets function
     function my_pets($pets){
        $my_return = '';
        if(!empty($_POST['pets'])){
            $my_return = implode(', ', $_POST['pets']);

        }else{
            $pets_err = 'Please choose your favorite pets!';
        }
        return $my_return;
     }//end function

    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['gender'],
    $_POST['phone'],
    $_POST['pets'],
    $_POST['size'],
    $_POST['comments'],
    $_POST['privacy'])){

    $to = 'szemeo@mystudentswa.com';
    $subject = 'Email on '.date('m/d/y, h i A');
    $body = '
    First Name : '.$first_name.' '.PHP_EOL.'
    Last Name : '.$last_name.' '.PHP_EOL.'
    Email : '.$email.' '.PHP_EOL.'
    Phone : '.$phone.' '.PHP_EOL.'
    Favorite Pets : '.my_pets($pets).' '.PHP_EOL.'
    Pet\'s gender : '.$gender.' '.PHP_EOL.'
    Pet\'s size : '.$size.' '.PHP_EOL.'
    Comments/Requirements : '.$comments.' '.PHP_EOL.'
    ';

    $headers = array(
        'From' => 'noreply@mystudentswa.com'
    );
    $headers = implode("\n", $headers);

    if(!empty($first_name && $last_name && $email && $gender && $phone && $size && $pets && $comments) && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) ){

    
    mail($to, $subject, $body, $headers);
    header('Location: ./thx.php');
    // $mail_sent = @mail( $to, $subject, $body, $headers ); 
    // echo $mail_sent ? "Mail sent" : "Mail failed";
    }
}//end isset
}// end server request method

?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
  <fieldset>
    <legend>Contact Nhi</legend>

    <label>First Name</label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
    <span class="error"><?php echo $first_name_err ;?></span>
    
    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
    <span class="error"><?php echo $last_name_err ;?></span>

    <label>Email</label>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
    <span class="error"><?php echo $email_err ;?></span>

    <label>Phone</label>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']);?>">
    <span class="error"><?php echo $phone_err ;?></span>

    <label>What pets are you interested in adopting?</label>
    <ul>
      <li>
        <input type="checkbox" name="pets[]" value="cats" <?php if(isset($_POST['pets']) && in_array('cats', $pets)) echo 'checked="checked"';?>>Cats
      </li>
      <li>
        <input type="checkbox" name="pets[]" value="dogs" <?php if(isset($_POST['pets']) && in_array('dogs', $pets)) echo'checked="checked"';?>>Dogs
      </li>
      <li>
        <input type="checkbox" name="pets[]" value="birds" <?php if(isset($_POST['pets']) && in_array('birds', $pets)) echo'checked="checked"';?>>Birds
      </li>
      <li>
        <input type="checkbox" name="pets[]" value="rabbits" <?php if(isset($_POST['pets']) && in_array('rabbits', $pets))echo'checked="checked"';?>>Rabbits
      </li>
      <li>
        <input type="checkbox" name="pets[]" value="hamsters" <?php if(isset($_POST['pets']) && in_array('hamsters', $pets))echo'checked="checked"';?>>Hamsters
      </li>
      
    </ul>
    <span class="error"><?php echo $pets_err ;?></span>

    <label>Pet's gender</label>
    <ul>
      <li>
        <input type="radio" name="gender" value="Female"<?php if(isset($_POST['gender']) && $_POST['gender']=='Female') echo 'checked="checked"';?>> Female
      </li>
      <li>
        <input type="radio" name="gender" value="Male"<?php if(isset($_POST['gender']) && $_POST['gender']=='Male') echo 'checked="checked"';?>> Male
      </li>
      <li>
        <input type="radio" name="gender" value="Either"<?php if(isset($_POST['gender']) && $_POST['gender']=='Either') echo 'checked="checked"';?>> Either. It's not important to me!
      </li>
    </ul>
    <span class="error"><?php echo $gender_err ;?></span>

    <label>Pet's size</label>
    <select name="size">
      <!-- we weill return to options to add additional option when we make our form sticky -->
    <option value="" NULL <?php if(isset($_POST['size']) && $_POST['size']==NUll) echo 'selected="unselected"';?>>Select One!</option>

    <option value="large"  <?php if(isset($_POST['size']) && $_POST['size']=="large") echo 'selected="selected"';?>>Large</option>

    <option value="medium"  <?php if(isset($_POST['size']) && $_POST['size']=="medium") echo 'selected="selected"';?>>Medium</option>

    <option value="small"  <?php if(isset($_POST['size']) && $_POST['size']=="small") echo 'selected="selected"';?>>Small</option>
    
    </select>
    <span class="error"><?php echo $size_err ;?></span>

    <label>Please let us know if you have any other requirements!</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
    <span class="error"><?php echo $comments_err ;?></span>
    

    <label>Do you agree with our privacy?</label>
    <ul>
      <li>
        <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy']=="yes") echo 'checked="checked"';?>>Yes, I agree!
      </li>
    </ul>
    <span class="error"><?php echo $privacy_err ;?></span>

    <input type="submit" value="Send it!">
    <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ?>'"value="Reset">
   
  </fieldset>

