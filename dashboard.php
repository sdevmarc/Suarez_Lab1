<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('location: logout.php');
    exit();
}
else{
    $username = $_SESSION['username'];
}
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

    <form action="dashboard.php" method="post" id="logoutForm">
        <!-- <div class="status">asd</div> -->
        <button name="logout" onclick="confirmLogout()">Logout</button>
    </form>
    <div class="message">Welcome back, <?= $username ?></div>

    <script src="dashboard.js"></script>
</body>

</html>

<?php

try {
    if (isset($_POST['logout'])) {
        session_start();
        $_SESSION = array();
        session_destroy();
        header('location: index.php');
        exit();
    }
} catch (Exception $e) {
    echo "Error Encountered";
}
?>