<?php
session_start();

$username = $_SESSION['username'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <h1>Dashboard</h1>
    <form action="dashboard.php" method="post">
        <button name="logout">Logout</button>
    </form>
    <div class="message">Welcome back, <?= $username ?></div>






</body>

</html>

<?php

try {
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: index.php');
        exit();
    }
} catch (Exception $e) {
    echo "Error Encountered";
}
?>