<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Extra Charges</title>
</head>

<body>
    <center>
        <form action="extra_charges_insert.php" method="post">
            <h1>Extra Charges Details</h1>
            <table border="5">
                <tbody>
                  
                    <tr>
                        <td><label>TAX:</label></td>
                        <td><input type="text" id="ec_tax" name="ec_tax"></td>
                    </tr>
                    <tr>
                        <td><label>DISCOUNT:</label></td>
                        <td><input type="text" id="ec_discount" name="ec_discount"></td>
                    </tr>
                    <tr>
                        <td><label> DATE:</label></td>
                        <td> <input type="date" id=ec_date name="ec_date"></td>
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
