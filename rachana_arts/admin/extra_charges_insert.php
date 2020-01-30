<?php
include_once("../db_connection.php");
$ec_tax=$_POST["ec_tax"];
$ec_discount=$_POST["ec_discount"];
$ec_date=$_POST["ec_date"];
$sql=$conn->prepare("INSERT INTO extra_charges(ec_tax,ec_discount,ec_date)VALUES(?,?,?)");
$sql->bind_param("dis",$ec_tax,$ec_discount,$ec_date);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Record Inserted');
    window.location='extra_charges_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Record not inserted');
    window.location='extra_charges_view.php';
    </script>";
}
?>