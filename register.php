
<?php
include 'connect1.php';
include('header.php');
if (isset($_POST['submit'])){
    echo "Thanks for Registration";
}
@$name=$_POST['name'];
@$age=$_POST['age'];
@$phoneNumber=$_POST['phoneNumber'];
@$PernamentAddress =$_POST['PernamentAddress'];


if (empty($name)) {
    echo '<script>alert("Name is Required")</script>';
    exit();
}


if (empty($phoneNumber)) {
    echo '<script>alert("Phone number is Required")</script>';
    exit();
}
if (empty($PernamentAddress)) {
    echo '<script>alert("Address is Required")</script>';
    exit();
}




$sql = "INSERT INTO students(name,age,phoneNumber,PernamentAddress) values('$name','$age','$phoneNumber','$PernamentAddress')";

if ($con->query($sql) === TRUE) {
    echo '<script>alert("Thank You for the Registration")</script>';
    header:
} 


?>

