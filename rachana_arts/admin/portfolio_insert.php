<?php
include_once("../db_connection.php");
$pf_name=$_POST["pf_name"];
$pf_description=$_POST["pf_description"];
$pf_image=$_POST["pf_image"];
$pf_date=$_POST["pf_date"];
$sql=$conn->prepare("INSERT INTO portfolio(pf_name,pf_description,pf_image,pf_date)VALUES(?,?,?,?)");
$sql->bind_param("ssss",$pf_name,$pf_description,$pf_image,$pf_date);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Record Inserted');
    window.location='portfolio_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Record not inserted');
    window.location='portfolio_view.php';
    </script>";

}
?>