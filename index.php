<!DOCTYPE html>
<meta
    name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1"
/>
<html>
    <head>
        <title>
            Viva Ques
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>ASSDF ROCKS!</h1>
            </div>
            <div class="row justify-content-between">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <?php for ($i=2; $i<=8; $i++): ?>
                            <p class="card-text">
                                <a href="ques.php?sub=css&sem=<?=$i?>">
                                    Semester <?=$i?>
                                </a>
                            </p>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">DWM</h5>
                        <?php for ($i=2; $i<=8; $i++): ?>
                            <p class="card-text">
                                <a href="ques.php?sub=dwm&sem=<?=$i?>">
                                    Semester <?=$i?>
                                </a>
                            </p>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SE</h5>
                        <?php for ($i=2; $i<=8; $i++): ?>
                            <p class="card-text">
                                <a href="ques.php?sub=se&sem=<?=$i?>">
                                    Semester <?=$i?>
                                </a>
                            </p>
                        <?php endfor; ?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">SPCC</h5>
                        <?php for ($i=2; $i<=8; $i++): ?>
                            <p class="card-text">
                                <a href="ques.php?sub=spcc&sem=<?=$i?>">
                                    Semester <?=$i?>
                                </a>
                            </p>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <a type="button" class="btn btn-primary" href="add.php">
                    Add Ques
                </a>
            </div>
        </div>
    </body>
</html>