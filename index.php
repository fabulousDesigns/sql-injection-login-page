<?php
error_reporting(0);
include_once('config.php');
if (isset($_POST)) {
    $username = $_POST['uName'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM members WHERE username = '$username' AND password = '$pass' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        header("location:cc.php");
    } else {
        echo "Error" . $sql;
    }

    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/jQuery.min.js"></script>
    <title>Demo</title>
</head>

<body>
    <div class="wrapper">
        <form method="post">
            <h4 class="logo-text">LOGIN</h4>
            <div class="line"></div>
            <input type="text" name="uName" class="input-group" placeholder="Enter your Username"><input type="password" name="password" class="input-group" placeholder="Enter your Password">
            <pre> <input type="checkbox" name="chkbox"> Remember me</pre>
            <button type="submit" name="submit" class="btn">LOGIN</button>
        </form>
    </div>
</body>

</html>