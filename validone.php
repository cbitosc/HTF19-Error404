<?php
include('databasecon.php');
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$q="SELECT * FROM register WHERE user='$user' && pass='$pass'";
$result=mysqli_query($connection,$q);
$num=mysqli_num_rows($result);
if($num==1)
{
   $_SESSION['username']=$user;
    header('location:project.php');
}
else
{
    header('location:login.php');  
}
?>
