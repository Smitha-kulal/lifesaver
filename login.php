<?php
include 'connection.php';
$usrn=$_GET["usrn"];
$pwd=$_GET["pwd"];

$con=new mysqli("localhost","root","","contact");
if($con->connect_error)
{
    die("Failed to connect :".$con->connect_error);
}
else
{
    $stmt=$con->prepare("INSERT INTO `login` (`usrn`,`pwd`)VALUES('$usrn','$pwd');");
    $stmt->execute();
    echo "<script> window.open('login.html','_self')</script>";
    echo "Database connected successfully: ";
     $stmt->close();
     $con->close();
    
}
header("location:index.html");
?>