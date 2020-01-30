<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>view</title>
</head>

<body>
    <table border="1">
       <tr>
           <td colspan="7"><center>Stock Details</center></td>
           <td><a href="stock_details_form.php">New</a></td>
       </tr>
        <tr>
            <td>Sl.no</td>
            <td>Purchase From</td>
            <td>Name</td>
            <td>Description</td>
            <td>Quantity</td>
            <td>Date</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
        include_once("../db_connection.php");
        $sno=1;
        $sql=$conn->prepare("SELECT * FROM stock_details");
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
                    <?php echo $row["sd_purchased_from"];?>
                </td>
                <td>
                    <?php echo $row["sd_name"];?>
                </td>
                <td>
                    <?php echo $row["sd_description"];?>
                </td>
                <td>
                    <?php echo $row["sd_qty"];?>
                </td>
                <td>
                    <?php echo $row["sd_date"];?>
                </td>
                <td>EDIT</td>
                <td><a href="stock_details_delete.php?id=<?php echo $row["sd_id"]?>">DELETE</a>
            </tr>
            <?php 
        }
         ?>
    </table>
</body>

</html>
