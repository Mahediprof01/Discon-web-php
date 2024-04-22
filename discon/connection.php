<?php

$username ="root";
$password = "";
$server ='localhost';
$database = "dis_db";

$con = mysqli_connect($server,$username,$password,$database);
$db = mysqli_select_db($con,$database);

if($con){
    
    ?>
    <script>
        alert("Connection Successful")
    </script>
            <?php
}else{
    echo"terminated";
}

?>