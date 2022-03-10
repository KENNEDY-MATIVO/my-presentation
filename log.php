<?php
if(isset($_POST["btn_submit"])){
    $name=$_POST["name"];
    $gender=$_POST["gender"];
    $email=$_POST["email"];
    $id_number=$_POST["id_number"];
    $phone_number=$_POST["phone_number"];
    $home_region=$_POST["home_region"];
    $d_place=$_POST["d_place"];
    $d_date=$_POST["d_date"];
    $s_place=$_POST["s_place"];
    $host ="localhost";
    $dbUsername ="root";
    $dbPassword="";
    $dbname ="registration";
    $conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if (mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
    }
    else{
        $insertQuery="INSERT INTO `bookings` (`id`, `name`, `gender`, `email`, `id_number`, `phone_number`, `home_region`, `d_place`, `d_date`, `s_place`) VALUES (NULL, '$name', '$gender', '$email', '$id_number', '$phone_number', '$home_region', '$d_place', '$d_date', '$s_place')";
    }
    require_once "db_connection.php";
    $save=mysqli_query($connection,$insertQuery);
    if(isset($save)){
        echo "<script>alert('user registered successfully')</script>";
    }
}
?>
