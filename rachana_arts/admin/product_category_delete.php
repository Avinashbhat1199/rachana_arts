<?php
include_once("../db_connection.php");
$pc_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM product_category WHERE pc_id=?");
$sql->bind_param("i",$pc_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='product_category_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='product_category_view.php';
  </script>";  
}
?>
