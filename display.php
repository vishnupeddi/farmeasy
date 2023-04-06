<!DOCTYPE html>

<html>

<head>

    <title> deleting details</title>
    <style>

       
        h1{
            font-family:montserrat;
            text-align:center;
        }
        table{
            border-collapse:collapse;
            width:100%;
            color:#080808;
            font-family:montserrat;
            font-size:25px;
            text-align:center;
           
        }
        th{
            background-color:#44803a;
            color:white;
            border-left:3px solid #2f412b;
        }
        td{
            border-left:3px solid #44803a;
        }
        tr:nth-child(even)
        {
            background-color:#bcf7b2;  
        }
        </style>
</head>

<body>


<script type="text/javascript">
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <table>
        <th>Machine</th>
        <th>Model</th>
        <th>model year</th>
        <th>available from</th>
        <th>available till</th>
        <th>rent per hour</th>
        <th>mobileno</th>
        <th>Delete</th>


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
    echo"<h1> Details of machines added by you </h1>";
    $sql="select machine,model,model_year,available_from,available_till,rent_per_hour,
    mobileno from availability   where mobileno='$num'";

    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
        $machine=$row['machine'];
        $mobile=$row["mobileno"];
        echo 
        "<tr><td>".$row["machine"]."</td>
        <td>".$row["model"]."</td>
        <td>".$row["model_year"]."</td>
        <td>".$row["available_from"]."</td>
        <td>".$row["available_till"]."</td>
        <td>".$row["rent_per_hour"]."</td>
        <td>".$row["mobileno"]."</td>
        <td> <a href='delete.php? machine=$machine'>DELETE</td></tr>";


    }

    echo "</table>";
    
}
    mysqli_close($conn);
?> 
</table>
</body>
</html>