<?php
$error=[];
if($_SERVER["REQUEST_METHOD"]=="POST") {
	$name=trim($_POST["name"]);
	$pass=trim($_POST["pass"]);
	$email=trim($_POST["email"]);
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
                <th>Employee Registration</th>
            </tr>
            <tr>
                <td>Employee id</td>
                <td>:</td>
                <td><input type="number" name="eid"></td>
            </tr>
			<tr>
				<td>Employee name</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
                <td><?php echo isset($_POST["name"]) ? $error["name"]:""; ?></td>
			</tr>
            <tr>
				<td>Employee Password</td>
				<td>:</td>
				<td><input type="password" name="pass"></td>
                <td><?php echo isset($_POST["pass"]) ?$error["pass"]:""; ?></td>
			</tr>
			<tr>
				<td>Employee email</td>
				<td>:</td>
				<td><input type="email" name="email"> </td>
                <td><?php echo isset($_POST["email"]) ? $error["email"]:""; ?></td>
			</tr>
			<tr>
				<td><button value="Submit">Submit</button> </td>
			</tr>
		</table>
	</form>

</body>
</html>