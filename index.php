<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lazamarc</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="">Laza<span>marc.</span></a>
        </div>
        <div class="navBars">
            <a href="">Men</a>
            <a href="">Women</a>
            <a href="">Accessories</a>
            <a href="">About</a>
            <button>Show Finder Quiz</button>
        </div>
        <div class="supNav">
            <a href="">Support</a>
            <i id="btnUser" class='bx bx-user' style='color:#020202'></i>
            <i class='bx bxs-shopping-bag' style='color:#020202'></i>
        </div>
    </header>


    <section class="section-1">
        <div class="wrapper">


            <div class="unauthorized">
                <i id="unexit" class='bx bxs-x-square'></i>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUCAYAAAAcaxDBAAAAAXNSR0IArs4c6QAAA7RJREFUeF7tnGFu2zAMhcmbtCfZepKtJ1l3krUnWXeStifRwMAGnMBOHuUniYploMiPqDT56UkiFcsq46ISUKq1YUwGULIIBtABlEyAbG4odAAlEyCby1ZoSum7iPwQEft8IPvVyty7iNjfP1W1T/eVBTSl9EdEfrrv1tc/vIjIm6p+etx2A00p/Z1U6blPr23fVfXJ47wLaErpl4hYzx3pelHV32jAXqAJNXxn7R7RoQ8DTSnZwvNxZ6DQcIoAPeJwn4E/q+orQt+j0CMDhefRARSRncgAinGCWw2gMCqsYRdArbSzsrXEZdUNsxwOD/S0ahYqFF5V9ZlsOzTQsxSEHPgJ5ix5ou2wQFfzOVLgZzDJUEMCvZoc74S6CpMINRzQqwHvDBy1vWeXLBxQYwY55VQqCnPv/i3kuwVZu1KCHAOh1oIJi6EFUNi5G1BrwoR9bgUUdnADam2YsL8tgcJOXkBtARP2tTVQ2NEJ6sMyad+qVwv9gAjN/RGAwlCRgr8QTJePtVf5LS6wAiorc74d7F8UoC4VXEItqMyugWZBrQDT5VckhbrVUAlm90Ch1MiiBCsqZD271abLOdSCgmHOBCpB7RKoG2ZFqN0BzYZZCWpXQHfDrAC1G6AQzGk1/0Segis0p3YB1ANzfrgXCqwAVOi+LWv5HJiuPJUMNTTQPTBbQQ0LlAGzBdSQQJkwa0MNBxR6+D+zNoeC3XnYArpH7UXpqlOZMCGl7rQdenNkFSoh4M2gS9pe21FpsX13BpUU8KpSibZDDvllh54cJAZc2nZ4oAaA/VDsEirbdhdAb23qRvp+ACX3xgA6gJIJkM0VUahtodlzlke8igC1IzD2FPARryf0DQ9wYm8UU0p2Gpl5/qeLzlFVmBPccAJ6xAO08HB3bY7MUjqYSqFdsuUwcyl0AXXvIYAehjq0f3sZSBbQafjbIvVt8Zqhe5hb7fypla32Npx6rxliyKvw1OEeqoyYsuZQ1o2nd5hYGsZWtv1+/8jy02sne8h7b7TWvgBUG652BDJruDJiagp0MRfbIsdQKpyAM+Ct2WgOdJHfWmm7B2pzmE3n0Mve3fmkB/waoFLKnO2GUOgiv82pxLLyxVJgQwGdhr+naGiWHm11SDigjk2YcDBDzaHLHgfSqaa55rXpIqRCJ5Xair+W+DfPNbsEeiVHDZEedTWHXgx/W/nnHDU0zLBz6EaO+oW+crJUSoTYDTuHIs5HbDOAkntlAB1AyQTI5oZCB1AyAbK5oVAy0P9li3VzbrTTegAAAABJRU5ErkJggg==" />
                <h1>Unauthorized Access Detected</h1>
            </div>

            <div class="slider">
                <div class="slides 1">
                    <img src="https://source.unsplash.com/NUoPWImmjCU" alt="">
                </div>
                <div class="slides 2">
                    <img src="https://source.unsplash.com/kP6knT7tjn4" alt="">
                </div>
                <div class="slides 3">
                    <img src="https://source.unsplash.com/NOpsC3nWTzY" alt="">
                </div>
                <div class="slides 4">
                    <img src="https://source.unsplash.com/VQxKattL-X4" alt="">
                </div>
                <div class="slides 5">
                    <img src="https://source.unsplash.com/_fOL6ebfECQ" alt="">
                </div>
            </div>

            <div class="form-box">
                <div class="invalid">
                    <i class='bx bxs-x-square'></i>Invalid Username and Password!
                </div>
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
                    <button name="login">Login</button>
                </form>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="section-2-content">
            <div class="sec__2__title">
                "The most thoughtfully designed sneakers ever"
            </div>

            <div class="sec__2__logos">
                <a href="">a</a>
                <a href="">b</a>
                <a href="">c</a>
            </div>
        </div>
    </section>

    <section class="section-3">

    </section>


    <script src="index.js"></script>
</body>

</html>

<?php
try {
    date_default_timezone_set('Asia/Shanghai');
    $conn = mysqli_connect('localhost', 'root', '', 'db_accounts');
    if (isset($_POST['login'])) {
        if (!$conn) {
            echo "<script>alert('You are not connected to the database!')</script>";
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "select * from tbl_users where username = '$username' and binary password = '$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['username'] = $username;
                header('location: dashboard.php');
            } else {

                echo "<script>document.querySelector('.invalid').classList.toggle('active');</script>";
                $sql = "update tbl_users set attempts = attempts + 1 where username = '$username'";
                mysqli_query($conn, $sql);
                $attemptQuery = "select attempts from tbl_users where username = '$username'";
                $attemptResult = mysqli_query($conn, $attemptQuery);
                $row = mysqli_fetch_assoc($attemptResult);
                $attempts = $row['attempts'];
                // echo "<script>alert('attempts: $attempts');</script>";

                if ($attempts >= 3) {

                    $time = time();
                    $currentTime = date('Y-m-d H:i:s', $time); // Format as 'YYYY-MM-DD HH:MM:SS'
                    echo "<script>document.querySelector('.unauthorized').classList.toggle('active');</script>";
                    // echo "<script>alert('Unauthorized Access Detected')</script>";
                    $sql = "update tbl_users set status = 'Unauthorized Access', unlock_time = '$currentTime' where username = '$username'";
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