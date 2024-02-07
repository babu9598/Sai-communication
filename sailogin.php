
<?php
$servername="localhost";
$username="root";
$password="";
$database="saicommunication";


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$pass=$_POST['password'];

$con=new mysqli("$servername","$username","$password","$database");
$query="insert into login (firstname,lastname,email,password) values('$firstname', '$lastname','$email','$pass')";

if(!$con->connect_errno){
    $con->query($query);
echo "<h1> Thanks u for registration</h1>";

}
?>