<?php
    $username = htmlentities(isset($_POST['submit'])) ? $_POST['name'] : 'Guest';

    setcookie('username', $username, time()+3600);

    header('Location: p2.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookies</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <input type="text" name="name" placeholder="Enter username">
    <br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>