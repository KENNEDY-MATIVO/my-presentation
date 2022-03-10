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
    <h2>Register</h2>
</div>

<form method="post" class="text-center" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group ">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
    </div>
</form>
</body>
</html>