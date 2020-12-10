<?php

require_once("config.php");
$ques=$_POST["ques"];
$sub=$_POST["sub"];
$qy= "INSERT INTO $sub (`ques`)VALUES('$ques')";
$sql = mysqli_query($con ,$qy);
if ($sql)
  {
    echo "added"; 
  }
  else{
      echo "failed";
  }
  header("Location:index.php");


?>