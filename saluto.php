<?php
$paragraph = $_POST['paragraph'];
$badword = $_POST['badword'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <h1>IL TESTO E':</h1>
        <h2><?php echo $paragraph; ?></h2>
        <h1>IL TESTO E' LUNGO:</h1>
        <h2><?php echo strlen($paragraph)?></h2>
    </div>

    <div>
        <h1>IL TESTO EDITATO E':</h1>
        <h2>
            <?php
            echo str_replace($badword,"***",$paragraph); 
            ?>
        </h2>
        <h1>IL TESTO E' LUNGO:</h1>
        <h2><?php echo strlen($paragraph)?></h2>
    </div>

</body>
</html>