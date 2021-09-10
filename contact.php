<?php 
include 'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$con=new mysqli("localhost","root","","contact");
if($con->connect_error)
{
    die("Failed to connect :".$con->connect_error);
}
else
{
    $stmt=$con->prepare("INSERT INTO `contactus`(`name`,`email`,`subject`,`message`)VALUES('$name','$email','$subject','$message');");
    $stmt-> execute();
    echo "<script>window.open('ContactUs.html','_self')</script>";
     $stmt-> close();
     $con-> close();
    
}
?>