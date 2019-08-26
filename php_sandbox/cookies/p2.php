<?php
if(isset($_COOKIE['username'])) {
    echo 'User '.$_COOKIE['username'].' is set<br>';
} else {
    echo 'User is not set';
}

// Delete cookie
setcookie('username', 'maarten', time() - 3600);
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

</body>
</html>