<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    
<h1>My Registration Page</h1>

<form>
<table>
<tr> <td> Name  </td>
<td> : <input type="text" name="firstname"> </td> </tr>
<br>
<br>
<tr> 
<td> Email </td>
<td> : <input type="text" name="email"> </td> </tr>
<tr> <td> User Name  </td>
<td> : <input type="text" name="username"> </td> </tr>
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