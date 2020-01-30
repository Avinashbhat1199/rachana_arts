<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Size</title>
</head>

<body>
    <center>
        <form action="product_size_insert.php" method="post">
            <h1>Product Size Details</h1>
            <table border="5">
                <tbody>

                    <tr>
                        <td><label>NAME:</label></td>
                        <td><input type="text" id="ps_name" name="ps_name"></td>
                    </tr>
                    <tr>
                        <td><label>PRICE:</label></td>
                        <td><input type="text" id="ps_price" name="ps_price"></td>
                    </tr>
                    <tr>
                        <td><label>DATE:</label></td>
                        <td> <input type="date" id="ps_date" name="ps_date"></td>
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
