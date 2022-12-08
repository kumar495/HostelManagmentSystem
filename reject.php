<?php
include 'bookconnect.php';

if(isset($_GET['rejectid'])){
    $id=$_GET['rejectid'];
 $sql="DELETE from bookr  where id=$id";
 
    $result= mysqli_query($conn,$sql);
    if($result){
        
        header('location:manage.php');
       
    }
    else{
        
    }
}


?>