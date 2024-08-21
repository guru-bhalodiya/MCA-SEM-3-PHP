<html>
    <head></head>
    <body>
        <form action="con_EmpReg.php" method="GET">
            <table align="center">
                <tr>
                    <th>Employee Registration</th>
                </tr>
                <tr>
                    <td>Employee ID</td>
                    <td><input type="text" name="Eid"></td>
                </tr>
                <tr>
                    <td>Employee Name</td>
                    <td><input type="text" name="Ename"></td>
                </tr>
                <tr>
                    <td>Employee Mobile</td>
                    <td><input type="text" name="Emobile"></td>
                </tr>
                <tr>
                    <td>Employee Email</td>
                    <td><input type="text" name="Eemail"></td>
                </tr>
                <tr>
                    <td>Employee Gender</td>
                    <td><input type="radio" name="Egender" value="Male">Male</td>
                    <td><input type="radio" name="Egender" value="Female">Female</td>
                </tr>
                <tr>
                    <td>Employee Hobbies</td>
                    <td>
                        <input type="checkbox" value="Reading" name="Ehobbies[]">Reading<br>
                        <input type="checkbox" value="Music" name="Ehobbies[]">Music<br>
                        <input type="checkbox" value="Dancing" name="Ehobbies[]">Dancing<br>
                    
                </td>
                </tr>
                <tr>
                    <td><input type="submit" value="Submit" /></td>
            </table>
        </form>
    </body>
</html>