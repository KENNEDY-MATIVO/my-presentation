<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <script src="assests/bootstrap/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assests/bootstrap/bootstrap/js/popper.min.js"></script>
    <script src="assests/bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assests/bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap/css/bootstrap-reboot.css">
    <script src="https://kit.fontawesome.com/3e413eb4ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-secondary">
<div class="header">
    <h2>Login</h2>
</div>

<form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
        Not yet a member? <a href="register.php">Sign up</a>
        <a href="services.php"><input type="button" value="back"></a>
    </p>
</form>
</body>
</html>