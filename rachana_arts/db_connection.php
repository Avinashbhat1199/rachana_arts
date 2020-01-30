<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $servername="localhost";
    $username="root";
    $password=""  ;
    $db_name="rachana_arts";
        
    $conn=new mysqli($servername,$username,$password,$db_name);
    if($conn->connect_errno){
        echo"connection failed";die;
        #code...
    }
    ?>
</body>
</html>