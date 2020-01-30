<?php
include_once("../db_connection.php");
 $pc_id=$_POST["pc_id"];
 $ps_id=$_POST["ps_id"];
 $pt_id=$_POST["pt_id"];
 $pd_name=$_POST["pd_name"];
 $pd_image1=$_POST["pd_image1"];
 $pd_image2=$_POST["pd_image2"];
 $pd_image3=$_POST["pd_image3"];
 $pd_description=$_POST["pd_description"];
 $pd_date=$_POST["pd_date"];


    
 $sql=$conn->prepare("INSERT INTO product_details( pc_id, ps_id, pt_id, pd_name, pd_image1, pd_image2, pd_image3, pd_description, pd_date)VALUES(?,?,?,?,?,?,?,?,?)");
 $sql->bind_param("iiissssss",$pc_id,$ps_id,$pt_id,$pd_name,$pd_image1,$pd_image2,$pd_image3,$pd_description,$pd_date);
if($sql->execute())
{
    echo"<script type='text/javascript'>
    alert('Record Inserted');
    window.location='product_details_view.php';
    </script>";  
    
}
else
{
    echo"<script type='text/javascript'>
    alert('Record not inserted');
    xwindow.location='product_details_view.php';
    </script>";

}
?>
