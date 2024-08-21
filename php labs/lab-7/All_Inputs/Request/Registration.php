<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
    <form action="con_Reg.php" method="REQUEST">
        <table align="center">
            <tr>
                <th>Student Registration</th>
            </tr>
            <tr>
                <td>Employee ID</td>
                <td>:</td>
                <td><input type="number" name="id" /></td>
            </tr>
            <tr>
                <td>Employee Name</td>
                <td>:</td>
                <td><input type="name" name="name" /></td>
            </tr>
            <tr>
                <td>Employee Password</td>
                <td>:</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>Employee Joining Date</td>
                <td>:</td>
                <td><input type="date" name="date" /></td>
            </tr>
            <tr>
                <td>Employee Email</td>
                <td>:</td>
                <td><input type="email" name="email" /></td>
            </tr>
            <tr>
                <td>Employee Address</td>
                <td>:</td>
                <td><input type="textarea" name="address" /></td>
            </tr>
            <tr>
                <td>Employee Gender</td>
                <td>:</td>
                <td><input type="radio" name="gender" value="Female" />Female
                <input type="radio" name="gender" value="Male" />Male</td>
            </tr>
            <tr>
                <td>Employee Hobbies</td>
                <td>:</td>
                <td><input type="checkbox" id="h1" name="hobby[]" value="Reading">Reading<br>
                <input type="checkbox" id="h2" name="hobby[]" value="Singing">Singing<br>
                <input type="checkbox" id="h3" name="hobby[]" value="Dancing">Dancing<br>
                <input type="checkbox" id="h4" name="hobby[]" value="Cooking">Cooking</td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit" /></td>
                <td><input type="reset" name="reset" value="Reset" /></td>
            </tr>

        </table>
    </form>
</body>
</html>