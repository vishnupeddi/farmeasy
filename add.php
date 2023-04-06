<?php
$host='localhost';
$user='root';
$password="";
$db="farmeasy";

$conn=mysqli_connect($host,$user,$password,$db);

if($conn)
{
    session_start();
    $num=$_SESSION['mobileno'];
    $machine=$_POST['machine_name'];
    $model=$_POST['model'];
    $year=$_POST['model_year'];
    $from=$_POST['from'];
    $to=$_POST['to'];
    $rent=$_POST['rent'];

    $sql="insert into availability values('$num','$machine','$model','$year','$from','$to','$rent')";

    if(mysqli_query($conn,$sql))
    {
        echo'<script>alert("machine added successfully")</script>';
        header("Location:addmachine.html");
    }
}
mysqli_close($conn);
?>
