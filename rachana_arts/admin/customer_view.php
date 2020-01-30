<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>view</title>
</head>

<body>
    <table border="1">
       <tr>
           <td colspan="10"><center>Customer</center></td>
           <td><a href="customer_form.php">New</a></td>
       </tr>
        <tr>
            <td>Sl.no</td>
            <td>Fullname</td>
            <td>Contact</td>
            <td>Email</td>
            <td>Address</td>
            <td>Type</td>
            <td>Username</td>
            <td>Password</td>
            <td>Date</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
        include_once("../db_connection.php");
        $sno=1;
        $sql=$conn->prepare("SELECT * FROM customer");
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
                    <?php echo $row["cu_name"];?>
                </td>
                <td>
                    <?php echo $row["cu_contact"];?>
                </td>
                <td>
                    <?php echo $row["cu_email"];?>
                </td>
                <td>
                    <?php echo $row["cu_address"];?>
                </td>
                <td>
                    <?php echo $row["cu_type"];?>
                </td>
                <td>
                    <?php echo $row["cu_username"];?>
                </td>
                <td>
                    <?php echo $row["cu_password"];?>
                </td>
                <td>
                    <?php echo $row["cu_date"];?>
                </td>
                <td>EDIT</td>
                <td><a href="customer_delete.php?id=<?php echo $row["cu_id"]?>">DELETE</a></td>
            </tr>
            <?php 
        }
         ?>
    </table>
</body>

</html>
