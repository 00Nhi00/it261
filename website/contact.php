<?php
include('config.php');
include('./includes/header.php');
 
?>

<div id="wrapper">
<main>
<h1>Welcome to our contact page!</h1>

<p>Please fill out the form below and send to us for review. Thank you!</p>
<?php
include('./includes/form.php');
?>
</main>
<aside style="background-color:transparent">
    <h3 style="margin-left:20px;">Let's adopt some cute pets!</h3>
    <?php echo random_images($photos)?>
    
</aside>
    <!-- end wrapper -->
<!-- </body>
</html> -->
<?php
include('./includes/footer.php');
?>