<!DOCTYPE html>
<?php
    require_once("config.php");
    require_once('dbquery.php');
    $sub=$_GET['sub'];
    $subject=strip_tags($sub);

    $allSubjects = array_unique(array_map(function($el) {
        return $el['subject'];
    }, getSubjects($con)));
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
        if(!in_array($sub, $allSubjects)){
            if ($sub==$subject){
                echo '<script>alert("kindly dont mess with the urls");document.location="index.php"</script>';
            } else{
                $ip=$_SERVER['REMOTE_ADDR'];
                if(Validate_Ip($ip)){
                add_ip($ip,$con);
                }
                if (checkVpn($ip)){
                    echo '<script>alert("Hey Kiddo dont bite the hand that feeds you\nI am noting ur ip- '.$ip.'just in case");document.location="index.php";</script>';
                }
            }
        } else {
            echo '<h1>'.strip_tags($subject).'</h1><br>';
            echo "<a href='add.php?sub=".strip_tags($subject)."'><button>New question</button></a><br />";
            error_reporting(E_ALL ^ E_WARNING);
            // FETCH BIO
            $q='SELECT * from ques where subject = ? ORDER BY time';
            $p="s";
            $result=get_data_from_db($con,$subject,$q,$p);
            mysqli_close($con);
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
        }
    ?>
</body>

</html>