<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product_category</title>
</head>

<body>
    <center>
        <form action="product_category_insert.php" method="post">
            <h1>Product Category</h1>
            <table border="5">
                <tbody>
                    <tr>
                        <td><label>NAME:</label></td>
                        <td><input type="text" id="pc_name" name="pc_name"></td>
                    </tr>
                    <tr>
                        <td><label>DATE:</label></td>
                        <td> <input type="date" id=pc_date name="pc_date"></td>
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
