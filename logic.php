

<?php
$sname="localhost";
$uname="root";
$password="";
$bd_name="data";
$conn=mysqli_connect($sname, $uname,$password,$bd_name);
if(!$conn){
    echo"connection fail!";

}








    // Destroy if not possible to create a connection
    if(!$conn){
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }

    // Get data to display on index page
    $sql = "SELECT * FROM blog";
    $query = mysqli_query($conn, $sql);

    // Create a new post
    if(isset($_REQUEST['new_post'])){
        $title = $_REQUEST['title'];
        $content = $_REQUEST['content'];

        $sql = "INSERT INTO blog(title, content) VALUES('$title', '$content')";
        mysqli_query($conn, $sql);
        
        

       
    }
    


    // Get post data based on id
    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blog WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }

    

   

?>