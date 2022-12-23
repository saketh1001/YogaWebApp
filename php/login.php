<?php
$server = "localhost";
$user="root";
$password = "";
$dbname = "yogamudra";

$conn = mysqli_connect($server,$user,$password,$dbname);

if(!$conn)
{
    echo "Connection failed " .mysqli_connect_error($conn);
    die();
}
$mail = $_POST['mail'];
$pass = $_POST['pass'];

$sql= "SELECT email,u_password FROM members WHERE email='$mail' and u_password='$pass'";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
   
   if($num > 0) 
   {
       $row = mysqli_fetch_array($result);
       echo " logged in";
       print(" <script> location.href='../index.html'</script> ");
   }
   else 
   {
     echo "Failed to login";
   }
mysqli_close($conn);
?>