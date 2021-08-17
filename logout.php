<!DOCTYPE html>
<html>
<body>

<?php

if (! empty($_SESSION['logged_in']))
{
    ?>

    <p>here is my super-secret content</p>
    <a href='logout.php'>Click here to log out</a>

    <?php
}
else
{
    echo 'You are not logged in. <a href="login.php">Click here</a> to log in.';
}

// session_start();
// session_destroy();
// echo 'You have been logged out. <a href="/">Go back</a>';

session_start();
session_unset();
session_destroy();
echo 'You have been logged out. <a href="/">Go back</a>';
header('location:login.php');




?>


</body>
</html>