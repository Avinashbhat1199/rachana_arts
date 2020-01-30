<?php
include_once("../db_connection.php");
$ps_name=$_POST["ps_name"];
$ps_price=$_POST["ps_price"];
$ps_date=$_POST["ps_date"];
$sql=$conn->prepare("INSERT INTO product_size(ps_name,ps_price,ps_date)VALUES(?,?,?)");
$sql->bind_param("sds",$ps_name,$ps_price,$ps_date);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Record Inserted');
    window.location='index.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Record not inserted');
    </script>";

}
?>