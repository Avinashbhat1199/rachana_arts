<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>customer</title>
</head>

<body>
    <center>
        <form action="customer_insert.php" method="post">
            <h1>Customer Details</h1>
            <table border="5">
                <tbody>
                    <tr>
                        <td><label>FULLNAME:</label></td>
                        <td><input type="text" id="cu_name" name="cu_name"></td>
                    </tr>
                    <tr>
                        <td><label>CONTACT:</label></td>
                        <td><input type="text" id="cu_contact" name="cu_contact"></td>
                    </tr>
                    <tr>
                        <td><label>EMAIL:</label></td>
                        <td><input type="email" id="cu_email" name="cu_email"></td>
                    </tr>
                    <tr>
                        <td><label>ADDRESS:</label></td>
                        <td><textarea name="cu_address" id="cu_address"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>TYPE:</label></td>
                        <td><input type="text" id="cu_type" name="cu_type"></td>
                    </tr>
                    <tr>
                        <td><label>USERNAME:</label></td>
                        <td><input type="text" id="cu_username" name="cu_username"></td>
                    </tr>
                    <tr>
                        <td><label>PASSWORD:</label></td>
                        <td><input type="text" id="cu_password" name="cu_password"></td>
                    </tr>
                    <tr>
                        <td><label> DATE:</label></td>
                        <td> <input type="date" id=cu_date name="cu_date"></td>
                    </tr>
                    <tr>
                       <td><input type="submit" name="submit" value="submit"></td> 
                       <td><input type="reset" value="reset"></td> 
                    </tr>
                </tbody>
            </table>
        </form>
    </center>
    </body>
</html>
