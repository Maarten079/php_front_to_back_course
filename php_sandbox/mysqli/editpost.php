<?php

include_once('config/db.php');
include_once('config/config.php');

// Check for submit
if(isset($_POST['submit']))  {
    // Get form data
    $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);

    $query = "UPDATE posts SET
    title = '$title', author='$author', body='$body'
    WHERE id ='$update_id'";

    if(mysqli_query($conn, $query)) {
        header('Location: '.ROOT_URL);
    } else {
        echo 'ERROR: '.mysqli_error($conn);
    }
}

// Get ID
$id = mysqli_real_escape_string($conn, $_GET['id']);

// Create query
$query = 'SELECT * FROM posts WHERE id ='.$id;

// Get results
$result = mysqli_query($conn, $query);

// Fetch data
$post = mysqli_fetch_assoc($result);
//var_dump($posts);

// Free results
mysqli_free_result($result);

// Close connection
mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Add Post</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary">
            <input type="hidden" name="update_id" value="<?php echo $post['id']?>">
        </form>
    </div>
<?php include('inc/footer.php');
