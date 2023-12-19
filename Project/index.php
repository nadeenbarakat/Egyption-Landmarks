<?php
$firstname=$_REQUEST['First_Name'];
$lastname=$_REQUEST['Last_Name'];
$email=$_REQUEST['Email'];
$nationality=$_REQUEST['Nationality'];

if(isset($_POST['btn']))
{

   $host="localhost";
   $user= "root";
   $pass= "";
   $dbname= "register";
  
   $conn=mysqli_connect($host, $user, $pass, $dbname);

   $insert="insert into members_info values('$firstname','$lastname', '$email', '$nationality')";

   mysqli_query($conn, $insert);

   if($conn){
      header("Location:http://localhost/Project/Egyption%20Landmarks%20Project.html");
      exit();
   }
   else{
      echo("<h1 style='color:red;'> Your Registration Is Failed! </h1>");
   }


}



?>