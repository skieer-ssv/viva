<!DOCTYPE html>
<?php require_once("config.php");
require_once('dbquery.php');
$subject=$_GET['sub'];
 ?>
<html>

<head>
<meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
      />
    <title>
<?php echo $subject; ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>body{margin:20px;}</style>
</head>

<body>
    <?php
    echo '<h1>'.$subject.'</h1><br>'; 
    error_reporting(E_ALL ^ E_WARNING);
    // FETCH BIO
    $q='SELECT * from ques where subject = ? ORDER BY time';
    $p="s";
    $result=get_data_from_db($con,$subject,$q,$p);
    if (mysqli_num_rows($result) > 0) {

    echo '<div class="container">';
    $i=1;
        while ($row = mysqli_fetch_assoc($result)) {

            echo '<div class="row">'.
            $i.".  ".$row["question"].'</div>';
            $i++;
    } 
    echo '</div>';
}
    else {
        echo "No ques yet";
    }
    ?>


</body>

</html>