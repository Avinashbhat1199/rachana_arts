<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>view</title>
</head>

<body>
    <table border="1">
       <tr>
           <td colspan="11"><center>Product Details</center></td>
           <td><a href="product_details_form.php">New</a></td>
       </tr>
        <tr>
            <td>Sl.no</td>
            <td>Pcid</td>
            <td>Psid</td>
            <td>Ptid</td>
            <td>Name</td>
            <td>Image1</td>
            <td>Image2</td>
            <td>Image3</td>
            <td>Description</td>
            <td>Date</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        <?php
        include_once("../db_connection.php");
        $sno=1;
        $sql=$conn->prepare("SELECT * FROM product_details");
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
                    <?php echo $row["pc_id"];?>
                </td>
                <td>
                    <?php echo $row["ps_id"];?>
                </td>
                <td>
                    <?php echo $row["pt_id"];?>
                </td>
                <td>
                    <?php echo $row["pd_name"];?>
                </td>
                <td>
                    <?php echo $row["pd_image1"];?>
                </td>
                <td>
                    <?php echo $row["pd_image2"];?>
                </td>
                <td>
                    <?php echo $row["pd_image3"];?>
                </td>
                <td>
                    <?php echo $row["pd_description"];?>
                </td>
                <td>
                    <?php echo $row["pd_date"];?>
                </td>
                <td>EDIT</td>
                <td><a href="product_details_delete.php?id=<?php echo $row["pd_id"]?>">DELETE</a>
            </tr>
            <?php 
        }
         ?>
    </table>
</body>

</html>
