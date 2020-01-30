<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>view</title>
</head>

<body>
    <table border="1">
       <tr>
           <td colspan="6"><center>Portfolio</center></td>
           <td><a href="portfolio_form.php">New</a></td>
       </tr>
        <tr>
            <td>Sl.no</td>
            <td>Name</td>
            <td>Description</td>
            <td>Image</td>
            <td>Date</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
        include_once("../db_connection.php");
        $sno=1;
        $sql=$conn->prepare("SELECT * FROM portfolio");
        $sql->execute();
        $result=$sql->get_result();
        while($row=$result->fetch_assoc())
        {
          ?>
            <tr>
                <td>
                    <?php echo $sno++;?>
                </td>
                <td>
                    <?php echo $row["pf_name"];?>
                </td>
                <td>
                    <?php echo $row["pf_description"];?>
                </td>
                <td>
                    <?php echo $row["pf_image"];?>
                </td>
                <td>
                    <?php echo $row["pf_date"];?>
                </td>
                <td>EDIT</td>
                <td><a href="portfolio_delete.php?id=<?php echo $row["pf_id"]?>">DELETE</a></td>
            </tr>
            <?php 
        }
         ?>
    </table>
</body>

</html>
