<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    
<h1>My Registration Page</h1>



<?php
include('db.php');
session_start(); 
$validatename = $validateemail =$validateusername = $validatepassword = $validateconfirmPassword =  $validategender="";
$name = $email =$username = $password = $confirmPassword = $gender="";
$v1="";
$v2="";
$v3="";



$error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
$name=$_POST['firstname'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirmPassword =$_POST['confirmpassword'];
$gender=$_POST['gender'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"regi",$username,$password);

if ($userQuery->num_rows > 0) {
 
  $_SESSION['username']=$_POST['username'];
  $_SESSION['password']=$_POST['password'];
   }
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}




    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=$_REQUEST["firstname"];
        $email=$_REQUEST["email"];
        $username=$_REQUEST["username"];



        
if(empty($name) || !preg_match("/^[a-zA-Z ]*$/",$name)){

    $validatename = "Valid Name is Required.";
}
else
{
    $validatename="Your Name is".$name;
 }

if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2.6}$/ix",$email)){

    $validateemail = "Valid Email is Requied";
}
else{
    $validateemail="Your Email is".$email;
}


if(empty($password) || (strlen($password))<6 || !preg_match("@#$%",$password))
    {
       $validatepassword = "Invalid password.";
    }
    if(empty($username) || (strlen($username))<5){
      $validateusername = "Invalid user name";
    }
    else{
       $validateusername = "Your username is ".$username;
    }
    if($password!=$confirmPassword){
       $validateconfirmPassword = "Password doesn't match with the previous one.";
    }

    if(isset($_REQUEST["gender"])){

        $validategender= $_REQUEST["gender"];
    }
    else{
       echo $validategender= "Please select atleast one";
    }
    
    }


?>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
<table>
<tr> <td> Name  </td>
<td> : <input type="text" name="firstname"></td><?php echo $validatename; ?> </tr>
<br>
<br>
<tr> 
<td> Email </td>
<td> : <input type="text" name="email"></td><?php echo $validateemail; ?> </tr>
<br>
<br>
<tr> <td> User Name  </td>
<td> : <input type="text" name="username"></td><?php echo $validateusername; ?>  </tr>
<br>
<br>
<tr> 
<td> Password </td>
<td> : <input type="password" name="password"></td><?php echo $validatepassword; ?></tr>
<br>
<br>
<tr> 
<td> Confirm Password </td>
<td> : <input type="password" name="confirmpassword"></td><?php echo $validateconfirmPassword; ?> </tr>
<br>
<br>
<tr>
<td> Gender : </td>
<td>  <input type="radio" id="male" name="gender" value="Gender:male">
<label for="male">Male</label> <br>
<input type="radio" id="female" name="gender" value="Gender:female">
<label for="female">Female</label> <br>
<input type="radio" id="other" name="gender" value="Gender: Other"> 
<label for="other">Other</label> <br>

</td><?php echo $validategender; ?> </tr>


<tr>
<td> Date Of Birth : </td>
<td>
<input type="date" id="date" name="DOB" >(mm/dd/yyyy) </td> </tr>
<tr>
<td>
<input type="submit" value="Submit">
<input type="reset" value="Reset"> </td> </tr>

</table>
</form>

</body>
</html>