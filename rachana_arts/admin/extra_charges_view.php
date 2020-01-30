<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>view</title>
</head>

<body>
    <table border="1">
       <tr>
           <td colspan="5"><center>Extra Charges</center></td>
           <td><a href="extra_charges_form.php">New</a></td>
       </tr>
        <tr>
            <td>Sl.no</td>
            <td>Tax</td>
            <td>Discount</td>
            <td>Date</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
        include_once("../db_connection.php");
        $sno=1;
        $sql=$conn->prepare("SELECT * FROM extra_charges");
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
                    <?php echo $row["ec_tax"];?>
                </td>
                <td>
                    <?php echo $row["ec_discount"];?>
                </td>
                <td>
                    <?php echo $row["ec_date"];?>
                </td>
                <td>EDIT</td>
                <td><a href="extra_charges_delete.php?id=<?php echo $row["ec_id"]?>">DELETE</a></td>
            </tr>
            <?php 
        }
         ?>
    </table>
</body>

</html>
