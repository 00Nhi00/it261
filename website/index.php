<?php
include('config.php');
include('./includes/header.php');
$photos[0] = 'dog';
$photos[1] = 'cat';
$photos[2] = 'hamster';
$photos[3] = 'rabbit';
$photos[4] = 'bird';
$i = rand(0, 4);

// $selected_image = ''.$photos[$i].'.png';
// echo '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'">';
//create a randome_images function 

function random_images($photos) {
    
    $my_return = '';
    $i = rand(0,4);
    $selected_image = ''.$photos[$i].'.png';
    $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
    return $my_return;
}


?>
            <div id="wrapper">
            <div id="hero">
                <!-- <img src="images/lake.jpg" alt="lake"> -->
                <?php echo random_images($photos);?>
            </div>
            <!-- end hero-->
            <main>
               <h1>Welcome to our Home Page!</h1>     
               <h2>Please refresh the page for different images!</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae massa finibus, viverra tortor in, varius tortor. Suspendisse a neque at felis accumsan imperdiet. Integer id mauris sed ante lobortis elementum. Nam luctus tortor tortor, consequat consectetur felis fermentum pellentesque. Proin faucibus imperdiet urna. Ut gravida feugiat lorem, vel dignissim felis aliquam in. Phasellus elit turpis, vulputate lacinia enim sit amet, mollis blandit diam. Cras maximus eros velit, sit amet accumsan neque sodales vitae. 
            </p>
            <h2>Another Headline 2</h2> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae massa finibus, viverra tortor in, varius tortor. Suspendisse a neque at felis accumsan imperdiet. Integer id mauris sed ante lobortis elementum. Nam luctus tortor tortor, consequat consectetur felis fermentum pellentesque. Proin faucibus imperdiet urna. Ut gravida feugiat lorem, vel dignissim felis aliquam in. Phasellus elit turpis, vulputate lacinia enim sit amet, mollis blandit diam. Cras maximus eros velit, sit amet accumsan neque sodales vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 

            </p>
            </main>
            <aside>
                <h3>This is our headline three in our beautiful aside</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae massa finibus, viverra tortor in, varius tortor. Suspendisse a neque at felis accumsan imperdiet. Integer id mauris sed ante lobortis elementum. Nam luctus tortor tortor, consequat consectetur felis fermentum pellentesque. Proin faucibus imperdiet urna. Ut gravida feugiat lorem, vel dignissim felis aliquam in. Phasellus elit turpis, vulputate lacinia enim sit amet, mollis blandit diam. 
                </p>

            </aside>
       
        </div>
    <!-- end wrapper -->
    <?php
    include('./includes/footer.php');