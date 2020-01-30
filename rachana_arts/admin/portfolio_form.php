<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
</head>

<body>
    <center>
        <form action="portfolio_insert.php" method="post">
            <h1>Portfolio</h1>
            <table border="5">
                <tbody>
                   <tr>
                        <td><label>NAME:</label></td>
                        <td><input type="text" id="pf_name" name="pf_name"></td>
                    </tr>
                    <tr>
                        <td><label>DESCRIPTION:</label></td>
                        <td><textarea name="pf_description" id="pf_description"></textarea></td>
                    </tr>
                    <tr>
                        <td><label>IMAGE:</label></td>
                        <td><input type="text" id="pf_image" name="pf_image"></td>
                    </tr>
                    <tr>
                        <td><label> DATE:</label></td>
                        <td> <input type="date" id="pf_date" name="pf_date"></td>
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
