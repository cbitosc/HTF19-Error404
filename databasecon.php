<?php
    $server="localhost";
    $username="root";
    $password="";
    $database="db_exam";
try{
$connection=mysqli_connect($server,$username,$password,$database);
if($connection)
{
    echo "connection okay";
}
}
catch(exception $errormsg)
    {
        echo $errormsg->getMessage();
    }

?>