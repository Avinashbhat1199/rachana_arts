<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin</title>
</head>

<body>
    <center>
        <form action="admin_insert.php" method="post">
            <h1>Personal Details</h1>
            <table border="5">
                <tbody>
                    <tr>
                        <td><label>FULLNAME:</label></td>
                        <td><input type="text" id="ad_name" name="ad_name"></td>
                    </tr>
                    <tr>
                        <td><label>CONTACT:</label></td>
                        <td><input type="text" id="ad_contact" name="ad_contact"></td>
                    </tr>
                    <tr>
                        <td><label>ADDRESS:</label></td>
                        <td><textarea name="ad_address" id="ad_address"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>EMAIL:</label></td>
                        <td><input type="email" id="ad_email" name="ad_email"></td>
                    </tr>
                    <tr>
                        <td><label>USERNAME:</label></td>
                        <td><input type="text" id="ad_username" name="ad_username"></td>
                    </tr>
                    <tr>
                        <td><label>PASSWOR:</label></td>
                        <td><input type="text" id="ad_password" name="ad_password"></td>
                    </tr>
                    <tr>
                        <td><label> DATE:</label></td>
                        <td> <input type="date" id=ad_date name=" ad_date"></td>
                    </tr>
                    <tr>
                        <td> <input type="submit" value="submit"></td>
                        <td><input type="reset" value="reset"></td>
                    </tr>

                </tbody>
            </table>
        </form>
    </center>
</body>

</html>
