<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Product Details</title>
</head>

<body>
    <center>
        <form action="product_details_insert.php" method="post">
            <h1>Product Details</h1>
            <table border="5">
                <tbody>
                    <tr>
                        <td><label>PCID</label></td>
                         <td><input type="text" id="pc_id" name="pc_id"></td>
                    </tr>
                    <tr>
                       <td><label>PSID</label></td>
                       <td><input type="text" id="ps_id" name="ps_id"></td>
                    </tr>
                    <tr>
                      <td><label>PTID</label></td>
                      <td><input type="text" id="pt_id" name="pt_id"></td>
                    </tr>
                    <tr>
                        <td><label>NAME:</label></td>
                        <td><input type="text" id="pd_name" name="pd_name"></td>
                    </tr>
                    <tr>
                        <td><label>IMAGE1:</label></td>
                        <td><input type="text" id="pd_image1" name="pd_image1"></td>
                    </tr>
                    <tr>
                        <td><label>IMAGE2:</label></td>
                        <td><input type="text" id="pd_image2" name="pd_image2"></td>
                    </tr>
                    <tr>
                        <td><label>IMAGE3:</label></td>
                        <td><input type="text" id="pd_image3" name="pd_image3"></td>
                    </tr>
                    <tr>
                        <td><label>DESCRIPTION:</label></td>
                        <td><textarea name="pd_description" id="pd_description"></textarea></td>
                    </tr>
                    <tr>
                        <td><label> DATE:</label></td>
                        <td> <input type="date" id=pd_date name="pd_date"></td>
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
