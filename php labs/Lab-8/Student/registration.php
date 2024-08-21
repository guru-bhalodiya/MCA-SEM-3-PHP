<?php
$error=[];
if($_SERVER["REQUEST_METHOD"]=="POST") {
	$name=trim($_POST["name"]);
	$email=trim($_POST["email"]);
	$pass=trim($_POST["pass"]);
	$mno=trim($_POST["mno"]);
}
if(empty($name)){
	$error["name"]= "name is required";
}
else{
	if(!preg_match("/^[a-zA-Z]*$/",$_POST["name"])){
		$error["name"]= "only letters ";
	}
}

if(empty($pass)){
	$error["pass"]= "password is required";
}
else{
	if(!preg_match("/^[0-9]{6}$/",$_POST["pass"])){
		$error["pass"]= "password pattern is not match ";
	}
}

if(empty($mno)){
	$error["mno"]= "mobile number is required";
}
else{
	if(!preg_match("/^[0-9]{9}$/",$_POST["mno"])){
		$error["mno"]= "mobile number pattern is not match ";
	}
}


if(empty($email)){
	$error["email"]= "email is required";
}
else{
	if(!preg_match("/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/",$_POST["email"])){
		$error["email"]= "email pattern is not match";
	}
}
//krushi.rathod@gmail.com is a valid email address.
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<table align="center">
			<tr>
				<th align="center">Student Registration</th>
			</tr>
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
				<td><?php echo isset($_POST["name"]) ? $error["name"]:""; ?></td>
				
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass"> </td>
				<td><?php echo isset($_POST["pass"]) ?$error["pass"]:""; ?></td>
			</tr>
			<tr>
				<td>Enrollment no</td>
				<td>:</td>
				<td><input type="number" name="eno"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"> </td>
				<td><?php echo isset($_POST["email"]) ?$error["email"]:""; ?></td>
			</tr>
			<tr>  
				<td>Mobile No</td>
				<td>:</td>
				<td><input type="number" name="mno"> </td>
				<td><?php echo isset($_POST["mno"]) ?$error["mno"]:""; ?></td>
			</tr>
			<tr>
				<td>City</td>
				<td>:</td>
				<td><input type="text" name="city"></td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><input type="radio" value="male" id="1" name="gender" >Male
				<input type="radio" value="female" id="2" name="gender" >Female</td>
			</tr>
			<tr>
				<td>Hobby</td>
				<td>:</td>
				<td>
					<input type="checkbox" value="Reading" name="hobby[]">Reading<br>
					<input type="checkbox" value="Music" name="hobby[]">Music<br>
					<input type="checkbox" value="Travelling" name="hobby[]">Travelling<br>
					<input type="checkbox" value="cooking" name="hobby[]">cooking<br>
				</td>
			</tr>
			<tr>
				<td><button value="Submit">Submit</button> </td>
			</tr>
		</table>
	</form>

</body>
</html>