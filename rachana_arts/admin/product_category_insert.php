<?php
include_once("../db_connection.php");
$pc_name=$_POST["pc_name"];
$pc_date=$_POST["pc_date"];
$sql=$conn->prepare("INSERT INTO product_category(pc_name,pc_date)VALUES(?,?)");
$sql->bind_param("ss",$pc_name,$pc_date);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Record Inserted');
    window.location='product_category_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Record not inserted');
    window.location='product_category_view.php';
    </script>";

}
?>