<?php
session_start();
$un = $_POST["uname"];
$pw = $_POST["pass"];
   //connecting to mysql server
   $dbconnect = mysqli_connect("localhost","root","","zenate");
   //preparing sql query to retrieve data from database
   $sql = "SELECT * FROM reg WHERE uname= '$un'  
   AND pass = '$pw'";
   $result = mysqli_query($dbconnect,$sql);
   $num = mysqli_num_rows($result);
   if($num == 1){
      while($rows = mysqli_fetch_assoc($result)){
           $username = $rows["uname"];
           $userid = $rows["id"];
           $_SESSION["uname"] = $rows["username"];
           $_SESSION["id"] = $rows["user_id"];
          
           header("Location:home.php");
      }
    
   }else{
    echo "username and password not found";
   }

   echo "<br>";
   echo "<br>";
   echo  '<a href="index.php">Go back</a>'; 
   ?>