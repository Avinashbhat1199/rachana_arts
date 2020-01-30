<?php
include_once("../db_connection.php");
$ec_id=$_REQUEST['id'];
$sql=$conn->prepare("DELETE FROM extra_charges WHERE ec_id=?");
$sql->bind_param("i",$ec_id);
if($sql->execute())
{
  echo"<script type='text/Javascript'>
  alert('RECORD DELETED');
  window.location='extra_charges_view.php';
  </script>";  
}
else
{
  echo"<script type='text/Javascript'>
  alert('NOT DELETE RECORD');
  window.location='extra_charges_view.php';
  </script>"; 
  
}
?>
