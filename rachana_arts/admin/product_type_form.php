<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product type</title>
</head>

<body>
    <center>
        <form action="product_type_insert.php" method="post">
            <h1>Product type Details</h1>
            <table border="5">
                <tbody>

                    <tr>
                        <td><label>NAME:</label></td>
                        <td><input type="text" id="pt_name" name="pt_name"></td>
                    </tr>
                    <tr>
                        <td><label>QUALITY:</label></td>
                        <td><input type="text" id="pt_quality" name="pt_quality"></td>
                    </tr>
                    <tr>
                        <td><label>DATE:</label></td>
                        <td><input type="date" id="pt_date" name="pt_date"></td>
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
