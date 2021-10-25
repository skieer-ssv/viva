<?php
function get_data_from_db($con,$section,$query,$parameterString){
    if($con === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        echo 'Cannot connect to database';
    } else{
        $stmt= mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt, $query))
    {
        print "Failed to prepare statement\n";
    }

    if ($parameterString && $section) {
        mysqli_stmt_bind_param($stmt, $parameterString, $section);
    }

    mysqli_stmt_execute($stmt);
    // $sql="SELECT * FROM `uploadimage` WHERE Section = 'cultural' ORDER BY timestamp DESC";
     // $imageInfos=mysqli_query($con,$sql);
    $result = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $result;
}

}

function Validate_Ip($IP)
{    
    if (filter_var($IP, FILTER_VALIDATE_IP)) {
        return true;
    } else {
        return false;
    }
}
function checkVpn($ip){
    $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
    if ($details->country != "IN"){
        $mac=exec('getmac');
        $mac=strtok($mac,' ');
        echo '<script>alert("Oh using VPN now are we.\nDont worry I got more ways to track u than u can imagine\nSo kindly just stick to using this site for good.");document.location="index.php";</script>';
        return false;
    }
    return true;
}

function add_ip($ip,$con){
    
    $query= "INSERT INTO ipaddr (`ip`)VALUES(?)";
$stmt= mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt, $query))
{
print "Failed to prepare statement\n";
}
mysqli_stmt_bind_param($stmt, "s", $ip);
mysqli_stmt_execute($stmt);

}

function getSubjects($con)
{
    $q='SELECT subject FROM ques';
    $result = get_data_from_db($con, '', $q, '');
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getQuestions($con, $subject)
{
    $q='SELECT * FROM ques WHERE subject = ? ORDER BY time';
    $p="s";
    $result = get_data_from_db($con, $subject, $q, $p);
    return $result->fetch_all(MYSQLI_ASSOC);
}