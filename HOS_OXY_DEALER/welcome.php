<?php 

include 'config.php';
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome </h1>"; ?>
    <a href="logout.php">Logout</a>
</body>
</html>