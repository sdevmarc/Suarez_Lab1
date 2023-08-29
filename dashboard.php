<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'db_accounts');
if (!isset($_SESSION['username'])) {
    header('location: logout.php');
    exit();
} else {
    $username = $_SESSION['username'];
    $sql = "update tbl_users set isactive = 1 where username = '$username'";
    mysqli_query($conn, $sql);
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
    <header class="header">
        <div class="dashboard-title">
            <a href="">Dashboard</a>
        </div>
        <div class="message">Welcome back, <?= $username ?></div>
        <button onclick="Logout()">Logout</button>
    </header>
    <section class="section-1">
        <div class="wrapper">
            <div class="form-box">
                <form action="dashboard.php" method="post" id="logoutForm">
                    <!-- <div class="status">asd</div> -->

                    Are you sure you want to logout?
                    <div class="form-logout">
                        <button name="Yes">Yes</button>
                    </div>
                    <div class="form-cancel">
                        <button id="cancel">Cancel</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <script src="dashboard.js"></script>
</body>
</html>

<?php
try {
    $conn = mysqli_connect('localhost', 'root', '', 'db_accounts');
    if (isset($_POST['Yes'])) {
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