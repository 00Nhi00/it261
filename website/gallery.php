<?php
$singer['Taylor_Swift'] = 'Taylor was born on December 13, 1989 - Singer';
$singer['Justin_Bieber'] = 'Justin was born on March 1, 1994 - Singer';
$singer ['Ariana_Grande'] = 'Ariana was born on June 26, 1993 - Singer';
$singer['Ed_Sheeran'] = 'EdShee was born on February 17, 1991 - Singer';
$singer ['Adele_Adkins'] = 'AdeleA was born on May 5, 1988 - Singer';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery of Images</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <style>
        table{
            border:1px solid black;
            border-collapse:collapse;
        }

        td {
            border: 1px solid black;
            padding:5px;
        }

        img{
            width:150px;
            height:150px;
        }
    </style>
</head>
<body>
    <table>
        <?php foreach($singer as $name => $image) :?>
        <tr>
            <td><img src="./images/<?php echo substr($image, 0, 6);?>.png" alt="<?php echo $name;?>"></td>
            <td><?php echo str_replace('_',' ', $name);?></td>
            <td><?php echo substr($image, 19, 27);?></td>
            <td><img src="images/<?php echo $name;?>.png" alt="<?php echo $name;?>"></td>
        </tr>
        <?php endforeach ;?>
    </table>
<?php
include('./includes/footer.php')
?>