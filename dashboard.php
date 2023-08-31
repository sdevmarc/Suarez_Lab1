<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'db_lazamarc');
if (!isset($_SESSION['username'])) {
    header('location: logout.php');
    exit();
} else {
    echo "<script>alert('asdasd')</script>";
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
    $conn = mysqli_connect('localhost', 'root', '', 'db_lazamarc');
    if (isset($_POST['Yes'])) {
        $sql = "update tbl_users set isactive = 0 where username = '$username'";
        mysqli_query($conn, $sql);


        $sql = "select id_users from tbl_users where username = '$username'";
        $index = mysqli_query($conn, $sql);
        $irow = mysqli_fetch_assoc($index);
        $index = $irow['id_users'];
        $sql = "update tbl_audit set attempts = 0, status = 0, lock_time = 0 where id_users = '$index'";
        mysqli_query($conn, $sql);


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