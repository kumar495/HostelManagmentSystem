<?php
include 'staffconnect.php';


?>




<!DOCTYPE html> 

<head>
    <body>
        
        <div class="side-menu">
        <div class="Admin-name">
            <h1> Welcome,</h1>
        </div>
        <ul>
            <li> <img src="student1.png" alt="">&nbsp;<a href="display.php" >Students</a></li>
            <li><img src="bed3.jpg" alt="">&nbsp; <a href="manage.php">Room Manage</a></li>
            <li><img src="staff1.png" alt="">&nbsp;<a href="staff.php" >Staff Manage</a></li>

            <li><img src="admi12.png" alt="">&nbsp;<a href="admission.php" >Addmission Students</a></li>
            <li><img src="f2.jpg" alt="">&nbsp; <a href="readfeedback.php">Feedback</a></li>
            <li><img src="blog1.jpg" alt="">&nbsp; <a href="create.php">Blog</a></li>
            <li><img src="lg.jpg" alt="">&nbsp; <a href="Home.html">LogOut</a></li>
        </ul>
        
        
        
        
        </div>
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
        
        
    <link rel="stylesheet" type="text/css"  href="staff.css">
</head>


<body>
<button type="button" class="btn"><a href="staffinfo.php">Add User</a></button>

<table  class ="table" >

<tr>
  <th>ID</th>
  <th>Name</th>
  <th>Email</th>
  <th>Address</th>
  <th>Phone </th>
  <th>Start Date</th>
  <th>End Date</th>
  
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
$sql="Select*from  stafftable limit 0,50";
$result=mysqli_query($con, $sql);


if($result){
while($row=mysqli_fetch_assoc($result)){
  $id=$row['id']; 
  $name=$row['name'];
  $email=$row['email'];
  $address=$row['address'];
  $phone=$row['phone'];
  $start_date=$row['start_date'];
  $end_date=$row['end_date'];
  echo '<tr>
  <th scope="row">'.$id.'</th>
  <th >'.$name.'</th>
  <th>'.$email.'</th>
  <th>'.$address.'</th>
  <th>'.$phone.'</th>
  <th>'.$start_date.'</th>
  <th>'.$end_date.'</th>

 
  
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

     <style>

*{
    padding: 0;
    margin: 0;

}


.test{
    margin: 40px auto;
    margin-left: 330px;
}
.test h1{
    margin-left: 150px;
    margin-bottom: 40px;
    text-align: center;
    font-weight: bold;
    color: rgb(35, 19, 211);
    padding-bottom: 10px;
    text-transform: uppercase;

}
.test h1::after{
    content: '';
    background: #ff9800;
    display: block;
    height: 3px;
    width: 150px;
    margin: 20px auto 5px;
 
}
.test.row{
    margin-top: 20px;

}
.col-md-4{
    margin: 40px auto;

}
.profile{
    padding: 70px 10px 10px;
 
    

}
.profile img:hover{
    transform: scale(1.2);
    
    
}
.test h1:hover{
    
        transform: scale(1.2);
    
    
}
.profile p{

    border: 1px solid;
    padding: 10px;
    box-shadow: 5px 10px rgb(8, 0, 255);
    background-color:greenyellow ;
    font-size: 20px;
    font-weight: bold;
}
.profile h3,h2{
    margin-left: 70px;
    color: blue;
    
}
.profile img{
    margin-top: 10px;
    margin-bottom: 10px;

}
                            body{

min-height: 100vh;
background-image:url("view.jpg") ;

}
                        </style>






                        </body>
                        