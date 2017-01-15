<?php

require_once 'includes/global.inc.php';

?>

<!doctype html>
<html>
<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="/css/styles.min.css">
</head>
<body>

<?php if(isset($_SESSION['logged_in'])) : ?>
    <?php $user = unserialize($_SESSION['user']); ?>
    <h1>Hello, <?php echo $user->username; ?>!</h1>
    <a href="logout.php">Log Out</a> | <a href="profile.php">View Profile</a>
<?php else : ?>
    <h1>You are not logged in.</h1>
    <a href="login.php">Log In</a> | <a href="register-user.php">Register</a>
<?php endif; ?>

<script src="js/index.min.js" charset="utf-8"></script>
</body>
</html>
