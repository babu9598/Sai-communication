<?php
$servername="localhost";
$username="root";
$password="";
$database="saicommunication";

$name=$_POST["name"];
$email=$_POST["email"];
$sub=$_POST["subject"];
$mesg=$_POST["message"];

$con=new mysqli("$servername","$username","$password","$database");

$query="insert into contect (name,email,subject,message) values('$name','$email','$sub','$mesg')";

if(!$con->connect_errno){
    $con->query($query);
echo"<h1> Message has  Successfull added in Server  </h1>";
}
?>