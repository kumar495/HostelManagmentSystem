<?php
session_start();
@$username=$_POST['username'];
$password=$_POST['password'];

$con= new mysqli('localhost','root','','hosteladmin');
$res= mysqli_query($con, "SELECT * FROM `admin` WHERE  username='$username' AND password='$password'");

if($res){
    $row=mysqli_num_rows($res);

}

if($row){
    $_SESSION['user']=@$username;
   
    echo"
    <script>
    alert('Login sucessfully');
    window.location.href='Dashboard.html';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('Invalid Username or password');
    window.location.href='Adminlogin.php';
    </script>
    ";
}

?>