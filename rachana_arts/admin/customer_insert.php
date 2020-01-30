<?php
include_once("../db_connection.php");
$cu_name=$_POST["cu_name"];
$cu_contact=$_POST["cu_contact"];
$cu_email=$_POST["cu_email"];
$cu_address=$_POST["cu_address"];
$cu_type=$_POST["cu_type"];
$cu_username=$_POST["cu_username"];
$cu_password=$_POST["cu_password"];
$cu_date=$_POST["cu_date"];
$sql=$conn->prepare("INSERT INTO customer(cu_name,cu_contact,cu_email,cu_address,cu_type,cu_username,cu_password,cu_date)VALUES(?,?,?,?,?,?,?,?)");
$sql->bind_param("sissssss",$cu_name,$cu_contact,$cu_email,$cu_address,$cu_type,$cu_username,$cu_password,$cu_date);
if($sql->execute())
{
    echo"<script type='text/Javascript'>
    alert('Record Inserted');
    window.location='customer_view.php';
    </script>";  
    #code...
}
else
{
    echo"<script type='text/Javascript'>
    alert('Record not inserted');
    window.location='customer_view.php';
    </script>";

}
?>
