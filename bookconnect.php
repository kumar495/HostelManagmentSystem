<?php
$sname="localhost";
$uname="root";
$password="";
$bd_name="rbook";
$conn=mysqli_connect($sname, $uname,$password,$bd_name);
if(!$conn){
    echo"connection fail!";

}






?>