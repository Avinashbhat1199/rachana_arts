<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Stock Details</title>
</head>

<body>
    <center>
        <form action="stock_details_insert.php" method="post">
            <h1>Stock Details</h1>
            <table border="5">
                <tbody>
                    <tr>
                        <td><label>PURCHASED FROM:</label></td>
                        <td><input type="text" id="sd_purchased_from" name="sd_purchased_from"></td>
                    </tr>
                    <tr>
                        <td><label>NAME:</label></td>
                        <td><input type="text" id="sd_name" name="sd_name"></td>
                    </tr>
                    <tr>
                        <td><label>DESCRIPTION:</label></td>
                        <td><textarea id="sd_description" name="sd_description"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>QUANTITY:</label></td>
                        <td><input type="text" id="sd_qty" name="sd_qty"></td>
                    </tr>
                    <tr>
                        <td><label>DATE:</label></td>
                        <td> <input type="date" id=sd_date name="sd_date"></td>
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
