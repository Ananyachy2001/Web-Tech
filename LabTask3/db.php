<?php
class db{
 
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "mydb2";
$conn = new mysqli($dbhost, $dbuser, $dbpass,$db);

return $conn;
}
function InsertUser($conn,$table,$username,$password)
{
$result = $conn->query("INSERT INTO $table(firstname, email, username,password,gender)
VALUES ($firstname, $email, $username,$password,$gender)");
}
}
function CloseCon($conn)
 {
 $conn -> close();
 }
?>