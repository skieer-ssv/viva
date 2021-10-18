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
                <label for="department">Sub <?php if(isset($_GET["sub"]) && !($_GET["sub"]!='dwm' and $_GET["sub"]!='css' and $_GET["sub"]!='spcc' and $_GET["sub"]!='se')){echo "(already selected)";} ?></label>
                <select class="form-control" id="sub" name="sub" <?php if(isset($_GET["sub"]) && !($_GET["sub"]!='dwm' and $_GET["sub"]!='css' and $_GET["sub"]!='spcc' and $_GET["sub"]!='se')){echo " disabled";} ?>>
                  <option value="dwm"<?php if(isset($_GET["sub"])&&$_GET["sub"]==="dwm"){echo " selected";}?>>dwm</option>
                  <option value="css"<?php if(isset($_GET["sub"])&&$_GET["sub"]==="css"){echo " selected";}?>>css</option>
                  <option value="spcc"<?php if(isset($_GET["sub"])&&$_GET["sub"]==="spcc"){echo " selected";}?>>spcc</option>
                  <option value="se"<?php if(isset($_GET["sub"])&&$_GET["sub"]==="se"){echo " selected";}?>>se</option>                 
                </select>
              </div>
        </div>
        <input type="submit"  value="submit">
       </form>
   </div>


</body>

</html>