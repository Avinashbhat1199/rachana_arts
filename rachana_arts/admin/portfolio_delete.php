<?php
include_once("../db_connection.php");
$pf_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM portfolio WHERE pf_id=?");
$sql->bind_param("i",$pf_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='portfolio_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='portfolio_view.php';
  </script>"; 
}
?>
