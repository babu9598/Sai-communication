<?php
$servername="localhost";
$username="root";
$password="";
$database="saicommunication";

$name=$_POST["name"];
$email=$_POST["email"];
$mesg=$_POST["message"];

$con=new mysqli("$servername","$username","$password","$database");

$query="insert into footer (name,email,message) values('$name','$email','$mesg')";

if(!$con->connect_errno){
    $con->query($query);
echo "<h1> Your Email and Message has Successfull added in Server  </h1>";
}
?>