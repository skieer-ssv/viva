<?php

require_once("config.php");

$query= "INSERT INTO ques (`question`,`subject`)VALUES(?,?)";
$stmt= mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt, $query))
{
print "Failed to prepare statement\n";
}
mysqli_stmt_bind_param($stmt, "ss", $ques,$sub);
$ques=strip_tags($_POST["ques"]);
$sub=strip_tags($_POST["sub"]);
mysqli_stmt_execute($stmt);

$sql = mysqli_stmt_get_result($stmt);
if ($sql)
  {
    echo '<script>alert("added");document.location="index.php"</script>'; 
  }
  else{
      echo '<script>alert("failed");document.location="index.php"</script>';
  }



?>