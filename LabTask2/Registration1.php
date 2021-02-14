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
$validatename = $validateemail =$validateusername = $validatepassword = $validateconfirmPassword =  $validategender="";
$name = $email =$username = $password = $confirmPassword = $gender="";
$v1="";
$v2="";
$v3="";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name=$_REQUEST["fname"];
        $email=$_REQUEST["email"];
        $username=$_REQUEST["username"];
if(empty($_POST["firstname"]) ||! preg_match("/^[a-zA-Z ]*$/",$name){

    $validatename = "Valid Name is Required."

}
else{
    $validatename = "Your Name is".$name;
 }

if(empty($_POST["email"]) ||! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+*@([a-z0-9\'-]+\.)+[a-z]{2.6}$/1x".$email)){

    $validateemail = "Valid Email is Requied"
}
else{
    $validateemail="Your Email is".$email;
}


if(empty($password) || (strlen($password))<6 || !preg_match("/^([@#$%]$/",$password))
    {
       $validatepassword = "Invalid password.";
    }
    if(empty($username)|| (strlen($username))<5){
      $validateusername = "Invalid user name";
    }
    else{
       $validateusername = "Your username is ".$username;
    }
    if($password!=$confirmPassword){
       $validateconfirmPassword = "Password doesn't match with the previous one.";
    }

if(isset($_REQUEST["vehicle1"]) &&! isset($_REQUEST["vehicle2"])  &&! isset($_REQUEST["vehicle3"])){

    echo "please select one";
}
else{
    if(isset($_REQUEST["vehicle1"])){
        $v1= $_REQUEST["vehicle1"];
    }
    if(isset($_REQUEST["vehicle2"])){
        $v2= $_REQUEST["vehicle2"];
    }
    if(isset($_REQUEST["vehicle3"])){
        $v3= $_REQUEST["vehicle3"];
    }

}


}
<form>
<table>
<tr> <td> Name  </td>
<td> : <input type="text" name="firstname"><?php echo $validatename; ?> </td> </tr>
<br>
<br>
<tr> 
<td> Email </td>
<td> : <input type="text" name="email"><?php echo $validateemail; ?> </td> </tr>
<tr> <td> User Name  </td>
<td> : <input type="text" name="username"></td> </tr>
<br>
<br>
<tr> 
<td> Password </td>
<td> : <input type="password" name="password"> </td> </tr>
<br>
<br>
<tr> 
<td> Confirm Password </td>
<td> : <input type="password" name="password"> </td> </tr>
<br>
<br>
<tr>
<td> Gender : </td>
<td>  <input type="radio" id="male" name="gender" value="male">Male 
<input type="radio" id="female" name="gender" value="female">Female  
<input type="radio" id="other" name="gender" value="other">Other </td> </tr>


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