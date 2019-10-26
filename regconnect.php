
<?php
include('databasecon.php');
header('location:login.php');
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$q="SELECT * FROM register WHERE user='$user' && pass='$pass'";
$result=mysqli_query($connection,$q);
$num=mysqli_num_rows($result);
if($num>=1)
{
    echo "we are very sorry we already have this details registered";
}
else
{
    $qr="INSERT INTO register(user,pass,phone) VALUES ('$user','$pass','$phone')";
    mysqli_query($connection,$qr);
}
?>