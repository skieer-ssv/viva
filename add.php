<?php
    require_once("config.php");
    require_once('dbquery.php');
    $allSubjects = array_filter(
        array_unique(
            array_map(
                function($el) {
                    return $el['subject'];
                }, getSubjects($con)
            )
        )
    );
?>
<!DOCTYPE html>
<html>

<head>
    <title>
Add Ques<?php if(isset($_GET["sub"]) && !($_GET["sub"]!='dwm' and $_GET["sub"]!='css' and $_GET["sub"]!='spcc' and $_GET["sub"]!='se')){echo " for ".$_GET["sub"];} ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
   <div class="container">
       <form action="addques.php" method="POST">
        <div class="row">
            <div class="col">
                <div class="form-group">
                <label>Question asked:</label>
                <textarea class="form-control" id="ques" rows="3" name="ques"></textarea>
            </div>
            </div>
            
        </div>
        <div class="row">
            <div class="form-group">
                <label for="department">Sub
                    <?php
                        if( !empty($_GET["sub"]) && in_array($_GET["sub"], $allSubjects)) {
                            echo "(already selected)";
                        } ?>
                </label>
                <select class="form-control" id="sub" name="sub">
                    <?php foreach ($allSubjects as $sub): ?>
                        <option value="<?=$sub?>"
                            <?php if(!empty($_GET["sub"]) && $_GET["sub"] !== $sub): ?>
                                disabled="disabled"
                            <?php endif; ?>
                        >
                            <?=$sub?>
                        </option>
                    <?php endforeach; ?>
                </select>
              </div>
        </div>
        <input type="submit"  value="Submit">
       </form>
   </div>


</body>

</html>