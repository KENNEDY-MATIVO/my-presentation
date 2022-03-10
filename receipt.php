<?php
session_start();
if (!isset($_SESSION["name"]))
{
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">
<head></head>
<meta charset="UTF-8">
title>Document</title>
<body>
<h1>This is your ticket</h1>
<?php
echo $_SESSION["name"];
$_SESSION["name"];
$_SESSION["email"];
$_SESSION["d_place"];
$_SESSION["s_place"];
?>
</body>
</html>

