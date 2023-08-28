<?php
$userStatus = ''; // Initialize the variable
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <section class="section-1">
        <div class="wrapper">
            <div class="form-box login">
                <form action="index.php" method="post">
                    <div class="input-box login">
                        <input type="text" placeholder="Username" name="username" required>
                    </div>
                    <div class="input-box login">
                        <input type="password" id="password" placeholder="Password" name="password" required>
                        <p class="caps-warn">Caps lock is on!</p>
                        <div class="show-pas">
                            Show
                        </div>
                    </div>
                    <!-- <input type="radio"> -->

                    <button name="login">Login</button>
                </form>
            </div>
        </div>
    </section>


    <script src="index.js"></script>
</body>

</html>

<?php
try {
    $conn = mysqli_connect('localhost', 'root', '', 'db_accounts');
    if (isset($_POST['login'])) {
        if (!$conn) {
            echo "<script>alert('You are not connected to the database!')</script>";
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "select * from tbl_users where username = '$username' and password = '$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['username'] = $username;
                header('location: dashboard.php');
            } else {

                echo "<script>alert('Invalid username or password!')</script>";
                $sql = "update tbl_users set attempts = attempts + 1 where username = '$username'";
                mysqli_query($conn, $sql);
                $attemptQuery = "select attempts from tbl_users where username = '$username'";
                $attemptResult = mysqli_query($conn, $attemptQuery);
                $row = mysqli_fetch_assoc($attemptResult);
                $attempts = $row['attempts'];
                echo "<script>alert('attempts: $attempts');</script>";



                if ($attempts >= 3) {
                    echo "<script>alert('Your account has been disabled!')</script>";
                    $sql = "update tbl_users set status = 'locked' where username = '$username'";
                    mysqli_query($conn, $sql);
                }
            }
        }
    }
} catch (Exception $e) {
    echo "Error Encountered";
} finally {
    mysqli_close($conn);
}
?>