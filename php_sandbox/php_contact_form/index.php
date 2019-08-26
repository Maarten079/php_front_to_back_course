<?php
// Message Vars
$msg = '';
$msgClass = '';

// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Check required fields
    if (!empty($email) && !empty($name) && !empty($message)) {
        // Passed
        // Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // Failed
            $msg = 'Please fill in a valid email';
            $msgClass = 'alert-warning';
        } else {
            // Passed
            // Recipient Email
            $toEmail = 'm.moerland.92@gmail.com';
            // Subject
            $subject = 'Contact form submission from' . $name;
            // Body
            $body = "<h2>Contact request</h2><h4>Name: $name</h4><h4>Email: $email</h4><h4>Message: $message</h4>";

            // Email Headers
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=utf-8" . "\r\n";

            // Additional Headers
            $headers .= "From: $name <$email> \r\n";

            if(mail($toEmail, $subject, $body, $headers)) {
             // Email send msg
                $msg = "Your email has been sent";
                $msgClass = 'alert-success';
            } else {
                $msg = "Your email was not sent";
                $msgClass = "alert-danger";
            }

        }
    } else {
        // Failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">My Website</a>
        </div>
    </div>
</nav>
<div class="container">
    <?php if ($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>
    <?php endif; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control"
                   value="<?php echo isset($_POST['name']) ? $name : '' ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control"
                   value="<?php echo isset($_POST['email']) ? $email : '' ?>">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message"
                      class="form-control"><?php echo isset($_POST['message']) ? $message : '' ?></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>