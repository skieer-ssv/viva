<?php
function get_data_from_db($con,$section,$query,$parameterString){
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    echo 'Cannot connect to database';
}
else{
    $stmt= mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $query))
{
    print "Failed to prepare statement\n";
}
mysqli_stmt_bind_param($stmt, $parameterString, $section);
    
mysqli_stmt_execute($stmt);
    // $sql="SELECT * FROM `uploadimage` WHERE Section = 'cultural' ORDER BY timestamp DESC";
     // $imageInfos=mysqli_query($con,$sql);
    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
   return $result;

}

}