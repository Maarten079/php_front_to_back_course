<?php
    session_start();

    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'guest';
    $email = $_SESSION['email'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
    <h5>Thank you <?php echo $name?> for subscribing</h5>
<a href="page3.php">Go to page 3</a>
</body>
</html>