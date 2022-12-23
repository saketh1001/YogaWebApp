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

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$event = $_POST['event'];


$sql="INSERT INTO booking (u_name, email, phone, c_event) VALUES
        ('$name','$mail','$phone','$event')";

$result = mysqli_query($conn,$sql);
if($result)
{
    printf("Inserted");
    print(" <script> location.href='../index.html'</script> ");
}
else
{
    echo " Failed to Book! " .mysqli_error($conn);
}
mysqli_close($conn);
?>