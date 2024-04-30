<?php
$name = $_POST['firstname'];
$lastname = $_POST['lastname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Alternative -->
    <h2>Ciao <?php echo $name . ' ' . $lastname; ?></h1>
    <h2>Ciao <?php echo $name; ?> <?php echo $lastname; ?></h2>
</body>
</html>