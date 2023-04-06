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
    $machine=$_GET['machine'];
    $sql="delete from  availability where mobileno='$num' and machine='$machine'";

    if(mysqli_query($conn,$sql))
    {
        echo'<script>alert("machine deleted successfully")</script>';
        header("Location:display.php");
    }
}
        mysqli_close($conn);
        ?>
