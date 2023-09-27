<?php 
 $un = $_POST["username"];
 $em = $_POST["email"];
 $ps = $_POST["password"];
 

 $connection = mysqli_connect("localhost","root","","zenate");
if($connection){
    $chk = "SELECT * FROM reg WHERE uname = '$un'";
    $r = mysqli_query($connection,$chk);
    $num = mysqli_num_rows($r);
   echo $num;
     if($num > 0 ){
      echo "username not available";
        }else{
        
 
$query ="INSERT INTO reg(uname,mail,pass)
  value('$un','$em','$ps')";
  $result = mysqli_query ($connection,$query);

  if($result){
    header("location:../login.php");
  }else{
    echo mysqli_error($connection);
  }

}
}
?>