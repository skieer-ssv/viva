<?php

require_once("config.php");

$query= "INSERT INTO ques (`question`,`subject`)VALUES(?,?)";
$stmt= mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt, $query))
{
print "Failed to prepare statement\n";
}
mysqli_stmt_bind_param($stmt, "ss", $ques,$sub);
$ques=$_POST["ques"];
$sub=$_POST["sub"];
mysqli_stmt_execute($stmt);

$sql = mysqli_stmt_get_result($stmt);
if ($sql)
  {
    echo '<script>alert("added");</script>'; 
  }
  else{
      echo "failed";
  }
  header("Location:index.php");


?>