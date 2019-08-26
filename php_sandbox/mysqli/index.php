<?php

include_once('config/db.php');
include_once('config/config.php');

// Create query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// Get results
$result = mysqli_query($conn, $query);

// Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($posts);

// Free results
mysqli_free_result($result);

// Close connection
mysqli_close($conn);
?>

<?php include('inc/header.php');?>
<div class="container">
    <h1>Posts</h1>
    <?php foreach ($posts as $post) : ?>
        <div class="card m-1 p-1">
            <h3><?php echo $post['title']; ?></h3>
            <small>Created on: <?php echo $post['created_at'] ?> by <?php echo $post['author'] ?> </small>
            <p><?php echo $post['body'] ?></p>
            <a href=<?php echo ROOT_URL;?>post.php?id=<?php echo $post['id']?>>Read more</a>
        </div>
    <?php endforeach; ?>
</div>
<?php include('inc/footer.php');
