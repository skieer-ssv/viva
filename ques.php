<!DOCTYPE html>
<?php
    require_once("config.php");
    require_once('dbquery.php');
    $sub=$_GET['sub'];
    $subject=strip_tags($sub);

    $allSubjects = array_unique(array_map(function($el) {
        return $el['subject'];
    }, getSubjects($con)));

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
    }
?>
<html>
    <head>
        <meta
                name="viewport"
                content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <title>
            Viva Ques Subject: <?=strtoupper($subject);?>
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
              integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1><?=strtoupper($subject)?></h1>
            </div>
            <div class="my-2">
                <a type="button" class="btn btn-primary ml-1" href="add.php?sub=<?=$subject?>">
                    New question
                </a>
                <a type="button" class="btn btn-primary ml-1" href="index.php">
                    Go back
                </a>
            </div>
            <h2>Questions</h2>
            <?php if (empty($questions)): ?>
                <p>No questions yet.</p>
            <?php else: ?>
                <ol>
                    <?php foreach ($questions as $q): ?>
                        <li><?=$q['question']?></li>
                    <?php endforeach; ?>
                </ol>
            <?php endif; ?>
        </div>
    </body>
</html>