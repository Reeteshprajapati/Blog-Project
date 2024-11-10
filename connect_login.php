<?php

session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$host = "localhost";
$dbusername ="root";
$dbpassword ="";
$dbname ="register";

$connection = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
$sql = "SELECT * FROM rp WHERE email ='$email' and password ='$password'";
$result = mysqli_query($connection,$sql);
$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['email'] =$email;
    header("location:admin/create.php");
}

else{
    echo"incorrect username password must be required";
}
// else{
//     echo'<script>alter("incorrect username password must be required")</script>';
// }

?>