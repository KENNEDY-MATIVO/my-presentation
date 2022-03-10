<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BOOKING SYSTEM</title>
    <script src="assests/bootstrap/bootstrap/js/jquery-3.4.0.js"></script>
    <script src="assests/bootstrap/bootstrap/js/popper.min.js"></script>
    <script src="assests/bootstrap/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="assests/bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap/css/bootstrap-reboot.css">
    <script src="https://kit.fontawesome.com/3e413eb4ab.js" crossorigin="anonymous"></script>
</head>
<body class="bg-secondary">
<form action="log.php" method="post" class="booking">
<h1 class="table-dark w-50 m-auto text-center">BOOKING PAGE</h1>
<div class="w-50 m-auto text-center bg-success clasi">
    <h1 class="table-active">apply here!</h1>
        <input placeholder="enter your name" name="name" type="text"></br> <br>
        <select class="w-75 text-center table-bordered" name="gender">
            <option>male</option>
            <option>female</option>
            <option>other</option>
        </select></br> <br>
        <input type="email" placeholder="enter your email" name="email"></br> <br>
        <input type="text" placeholder="enter your id number" name="id_number"></br> <br>
        <input type="text" placeholder="enter your phone number number" name="phone_number"></br> <br>
       <input type="text" placeholder="add your home region" name="home_region"></br> <br>
        <input type="text" placeholder="enter departure place" name="d_place"></br> <br>
        <input type="date" placeholder="add date" name="d_date"></br> <br>
        <input type="text" placeholder="enter destination place" name="s_place"></br> <br>
        <input class="booking_btn" type="submit" name="btn_submit" value="submit">
        <a href="homepage.php"><input type="button" value="homepage"></a>
</div>
</form>
</body>
</html>




