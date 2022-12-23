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
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$shape = $_POST['shape'];
$familiar = $_POST['fami'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$u_password = $_POST['pass'];


$sql="INSERT INTO members (email,u_password, u_name, age, gender, shape, familiar, height, u_weight) VALUES
        ('$mail','$u_password','$name','$age','$gender','$shape','$familiar','$height','$weight')";

$result = mysqli_query($conn,$sql);
if($result)
{
    printf("Inserted");
    print(" <script> location.href='../login.html'</script> ");
}
else
{
    echo " Failed to register! " .mysqli_error($conn);
}
mysqli_close($conn);
?>