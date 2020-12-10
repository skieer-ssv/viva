<!DOCTYPE html>
<html>

<head>
    <title>

    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <?php
    require_once("config.php");

    // FETCH BIO
    
    $sql = "SELECT * from cn";

    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {

    echo '<div class="container">';
        while ($row = mysqli_fetch_assoc($result)) {

            echo '<div class="row">'.
            $row["sr"].".  ".$row["ques"].'</div>';

    } 
    echo '</div>';
}
    else {
        echo "No ques yet";
    }
    ?>


</body>

</html>