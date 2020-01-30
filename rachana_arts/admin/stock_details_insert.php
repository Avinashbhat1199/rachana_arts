<?php
include_once("../db_connection.php");
$sd_purchased_from=$_POST["sd_purchased_from"];
$sd_name=$_POST["sd_name"];
$sd_description=$_POST["sd_description"];
$sd_qty=$_POST["sd_qty"];
$sd_date=$_POST["sd_date"];
$sql=$conn->prepare("INSERT INTO stock_details(sd_purchased_from,sd_name,sd_description,sd_qty,sd_date)VALUES(?,?,?,?,?)");
$sql->bind_param("sssis",$sd_purchased_from,$sd_name,$sd_description,$sd_qty,$sd_date);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Record Inserted');
    window.location='stock_details_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Record not inserted');
    window.location='stock_details_view.php';
    </script>";
}
?>