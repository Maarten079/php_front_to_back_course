<?php
//if(isset($_GET['name'])) {
    // print_r($_GET);
    // echo $_GET['name'];
    # When dealing with user input, use htmlentities and set input to a variable
    //$name = htmlentities($_GET['name']);
    //echo $name;
//}
//if(isset($_POST['name'])) {
//    $name = htmlentities($_POST['name']);
//    echo $name;
//}

//if(isset($_REQUEST['name'])) {
//    $name = htmlentities($_REQUEST['name']);
//    echo $name;
//}

echo $_SERVER['QUERY_STRING'];
?>

    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Name</title>
    </head>
    <body>
    <form method="GET" action="get_post.php">
        <div>
            <label for="name">Name</label>
            <!-- You can hook onto name attribute with php-->
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Name</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="submit">
    </form>
    </body>
    </html>

<?php

// GET sends info trough URL (unsafe)
// POST sends info trough http-header and can be secured with HTTPS

?>