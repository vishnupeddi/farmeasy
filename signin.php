<?php
$host='localhost';
$user='root';
$password="";
$db="farmeasy";

$conn=mysqli_connect($host,$user,$password,$db);

if($conn)
{
    $mobile=$_POST['mobileno'];
    $pass=$_POST['password'];

    $sql="select mobileno,password from account where mobileno='$mobile' and password='$pass'";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if($row)
    {
        header("Location:home.html");
        echo'<script>alert("login successfull")</script>';

        session_start();
        $_SESSION['mobileno']=$mobile;
    }
    else
    {
        echo'<script>alert("wrong mobileNo/password")</script>';
        header("Location:signin.html");
        echo'<script>alert("wrong mobileNo/password")</script>';
    }
}
mysqli_close($conn);
?>