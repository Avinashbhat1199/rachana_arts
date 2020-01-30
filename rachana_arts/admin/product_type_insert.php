<?php
include_once("../db_connection.php");
$pt_name=$_POST["pt_name"];
$pt_quality=$_POST["pt_quality"];
$pt_date=$_POST["pt_date"];
$sql=$conn->prepare("INSERT INTO product_type(pt_name,pt_quality,pt_date)VALUES(?,?,?)");
$sql->bind_param("sss",$pt_name,$pt_quality,$pt_date);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Record Inserted');
    window.location='product_type_view.php';
    </script>";  
}
else
{
    echo"<script type='text/Javascript'>
    alert('Record not inserted');
    window.location='product_type_view.php';
    </script>";
}
?>