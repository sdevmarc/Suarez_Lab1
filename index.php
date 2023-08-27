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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'db_accounts');

    if (isset($_POST['login'])) {
        if (!$conn) {
            echo "<script>alert('You are not connected to the database!')</script>";
        } else {
            $sql = "select * from tbl_users where username = '$username' and password = '$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['username'] = $username;
                header('location: dashboard.php');
            } else {
                echo "<script>alert('Invalid username or password!')</script>";
            }
        }
    }
} catch (Exception $e) {
    echo "Error Encountered";
} finally {
    mysqli_close($conn);
}
?>