<?php
include 'connection.php';

?>

<!DOCTYPE html>
<html>

<body>
<div class="container">


<body>
<div class="side-menu">
<div class="Admin-name">
    <h1> Welcome,</h1>
</div>
<ul>
    <li> <img src="student1.png" alt="">&nbsp;<a href="display.php" >Students</a></li>
    <li><img src="bed3.jpg" alt="">&nbsp; <a href="manage.php">Room Manage</a></li>
    <li><img src="staff1.png" alt="">&nbsp;<a href="staff.php" >Staff Manage</a></li>
    <li><img src="admi12.png" alt="">&nbsp;<a href="admission.php" >Admission Students</a></li>
    <li><img src="f2.jpg" alt="">&nbsp; <a href="readfeedback.php">Feedback</a></li>
    <li><img src="blog1.jpg" alt="">&nbsp; <a href="create.php">Blog</a></li>
    <li><img src="lg.jpg" alt="">&nbsp; <a href="Home.html">LogOut</a></li>
    
</ul>




</div>

<button type="button" class="btn"><a href="information.php">Add User</a></button>
<style>


*{
  margin:0;
  padding:0;
  box-sizing: border-box;
}
body{

    min-height: 100vh;
   background-image:url("view.jpg") ;

}
a{
text-decoration: none;
}
h1{

    color:black;
    margin-top: 20px;
    margin-bottom: 30px;
    font-style: italic;
}
.side-menu{
position: fixed;
background:rgb(82, 160, 233);
width: 20vw;
min-height: 100vh;
display: flex;
flex-direction: column;


}
.side-menu.Admin-name{
    font-size: 24px;
    padding: 10px;
}
.side-menu li{
    font-size: 25px;
    padding: 10px 40px;
    color:black;
    display: flex;
}
.side-menu li:hover{
    background: white;
    color:blue;
}
</style>


<table  class ="table" >

      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone </th>
        <th>Operations</th>
        
      </tr>
      
      <style>
        body{
          

min-height: 100vh;
background-image:url("view.jpg") ;

}
     .btn {
       


margin-left:320px;
font-size: 20px;
margin-bottom:30px;


}
.btn1{

color: darkblue;
}
.btn2{

color: rgb(14, 220, 20);
}
.btn3{

color: rgb(237, 14, 14);
}


        
      
table, td, th {
  border: 1px solid black;
  background-attachment: fixed;
  
}

table {
  border-collapse: collapse;
  width: 80%;
  margin-left:350px;
  margin-right:100px;
  
  
}

th {
  height: 50px;
  
}

</style>

<?php
$sql="Select*from  studentsinfo limit 0,50";
$result=mysqli_query($con, $sql);


if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id']; 
        $name=$row['name'];
        $email=$row['email'];
        $address=$row['address'];
        $phone=$row['phone'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <th >'.$name.'</th>
        <th>'.$email.'</th>
        <th>'.$address.'</th>
        <th>'.$phone.'</th>

        <th>
        <button class="btn2"><a href="update.php ? updateid='.$id.'" class="text-light " >Update</a></button>
        <button class="btn3" ><a href="delete.php? deleteid='.$id.'" class="text-primary" > Delete</a></button>
  
       </th>
        
        </tr>';
       
       

    
}
}
?>


</table>
 
<style>
.btn2 {background-color: #FFFFFF;}
.btn3 {background-color: #FF0000;}
.btn{background-color:  #00FF00;}
.text-primary{
  background-color: #FF0000;
}

.btn2{


}


  </style>
 <script>

   function checkdelete(){

    return Confirm('Are you sure');
   }
   </script>


  
</body>
</html>