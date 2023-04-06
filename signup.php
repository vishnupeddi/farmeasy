<?php
$host='localhost';
$user='root';
$password="";
$db="farmeasy";

$conn=mysqli_connect($host,$user,$password,$db);

if($conn)
{
    $name=$_POST['farmer_name'];
    $mobile=$_POST['mobileno'];
    $pass=$_POST['password'];
    $address=$_POST['address'];

    $sql="select mobileno from account where mobileno='$mobile'";

    $result=mysqli_query($conn,$sql);

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(!$row)
    {

    $sql="insert into account values('$name','$mobile','$pass','$address')";

    if(mysqli_query($conn,$sql)){

        
        echo'<script>alert("account created successfully")</script>';
        header("Location:home.html");
        session_start();
        $_SESSION['mobileno']=$mobile;
    }
    }
    else
    {
       
        header("Location:signup.html");

         echo "<font color='red' >already have an account with this number</font>";
    
    }
    }

        mysqli_close($conn);
        ?>