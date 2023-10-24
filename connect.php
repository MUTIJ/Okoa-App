<?php ob_start(); 
?>
<?php
    $connection=mysqli_connect('localhost','root','','rockcity');
    if($connection){
        // echo"Connected Successfully";
    }
    else{
        echo"Connection not successful";
    }
?>