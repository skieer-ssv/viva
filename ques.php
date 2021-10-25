<?php
    error_reporting(E_ALL ^ E_WARNING);

    require_once("config.php");
    require_once('dbquery.php');

    $ip = $_SERVER['REMOTE_ADDR'];
    if ( Validate_Ip($ip) ) {
        add_ip($ip,$con);
    }
    if ( checkVpn($ip) ){
        echo '<script>alert("Hey Kiddo dont bite the hand that feeds you\nI am noting ur ip- '.$ip.'just in case");document.location="index.php";</script>';
    }

    $sub=$_GET['sub'];
    $subject=strip_tags($sub);

    $available_subjects = [
        'css', 'dwm', 'spcc', 'se'
    ];

    $questions = getQuestions($con, $subject);
 ?>
<!DOCTYPE html>
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
            <?php if (!in_array($subject, $available_subjects)): ?>
                <script>alert("Kindly don't mess with the URLs");document.location="index.php"</script>
            <?php die(); endif; ?>
            <div class="jumbotron">
                <h1><?=strtoupper($subject)?></h1>
            </div>
            <div class="row mt-2">
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