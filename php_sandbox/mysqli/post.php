<?php

include_once('config/db.php');
include_once('config/config.php');

// Check for submit
if(isset($_POST['delete']))  {
    // Get form data
    $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = {$delete_id}";

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
<?php include('inc/header.php')?>
<div class="container">
    <a href="<?php echo ROOT_URL?>/index.php" class="btn btn-primary">Back</a>
    <h1>Posts</h1>
        <div class="card m-1 p-1">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on: <?php echo $post['created_at'] ?> by <?php $post['author'] ?> </small>
            <p><?php echo $post['body'] ?></p>
            <hr>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" class="float-right">
                <input type="hidden" name="delete_id" value="<?php echo $post['id']?>">
                <input type="submit" name="delete" value="delete" class="btn btn-danger">
            </form>
            <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']?>" class="btn">Edit</a>
        </div>
</div>
<?php include('inc/footer.php');
