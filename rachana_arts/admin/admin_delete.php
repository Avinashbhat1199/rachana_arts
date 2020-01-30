<?php
include_once("../db_connection.php");
$ad_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM admin WHERE ad_id=?");
$sql->bind_param("i",$ad_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='admin_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='admin_view.php';
  </script>"; 
  
}
?>
