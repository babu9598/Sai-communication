
<?php
$servername="localhost";
$username="root";
$password="";
$database="saicommunication";


$title=$_POST['Title'];
$name=$_POST['Name'];
$email=$_POST['Email'];
$phone=$_POST['Phone'];
$address=$_POST['Address'];
$city=$_POST['City'];
$state=$_POST['State'];
$zip=$_POST['Zip'];


$con=new mysqli("$servername","$username","$password","$database");
$query="insert into checkout(Title,Name,Email,Phone,Address,City,State,Zip) values('$title', '$name','$email','$phone','$address','$city','$state','$zip')";

if(!$con->connect_errno){
    $con->query($query);
echo "<h1> Thanks for visited </h1>";

}
?>