<?php
include_once("../db_connection.php");
$ps_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM product_size WHERE ps_id=?");
$sql->bind_param("i",$ps_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='product_size_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='product_size_view.php';
  </script>";  
}
?>
