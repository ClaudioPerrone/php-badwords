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
        <h1>IL TESTO E':</h1>
        <p><?php echo $str_replace($badword,"***",$paragraph); ?></p>
    </div>


    <h2>Il testo è: <?php echo $badword; ?></h1>

</body>
</html>