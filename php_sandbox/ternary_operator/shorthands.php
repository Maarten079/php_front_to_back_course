<?php
$loggedIn = true;
$arr = [1, 2, 3, 4, 5];

// Default if-else
if ($loggedIn) {
    echo 'You are logged in';
} else {
    echo 'You are not logged in';
}

// Ternary
echo ($loggedIn) ? 'You are logged in' : 'You are not logged in';

$age = 9;
$score = 9;

echo 'Your score is: ' . ($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible' : 'Average'));

# SHORTHAND SYNTAX
// Default
?>
<div>
    <?php if ($loggedIn) { ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome guest</h1>
    <?php } ?>
</div>

<?php // Better way?>
<div>
    <?php if ($loggedIn): ?>
        <h1>Welcome User</h1>
    <?php else: ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<?php // Also works with loops ?>
<?php foreach ($arr as $val): ?>
    <?php echo $val; ?>
<?php endforeach; ?>

