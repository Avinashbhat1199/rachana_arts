<?php
include_once("../db_connection.php");
$cu_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM customer WHERE cu_id=?");
$sql->bind_param("i",$cu_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='customer_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='customer_view.php';
  </script>"; 
  
}
?>
