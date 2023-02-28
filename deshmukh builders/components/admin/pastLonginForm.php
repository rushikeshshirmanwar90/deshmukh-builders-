<?php
include "../connect.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="../../css/new_login.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="userName" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required>
                <span></span>
                <label>Password</label>
            </div>
            <input style="margin-bottom: 2rem;" type="submit" name="login" value="Login">
        </form>
    </div>

    <?php
    if (isset($_POST['login'])) {
        $pass = $_POST['pass'];
        $username = $_POST['userName'];

        $sql = "SELECT * FROM `admin_login`";

        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['admin_name'] == $username && $row['admin_pass'] ==  $pass) {
                session_start();
                $_SESSION['AdminLoginId'] = $username;
                header("location: pastProject.php");
            } else {
                echo "<script>alert('password is incorrect');</script>";
            }
        }
    }
    ?>

</body>

</html>