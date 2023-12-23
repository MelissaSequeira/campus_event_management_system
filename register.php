
<?php

$sever = "localhost";
$username = "root";
$password = "";
$dbname = "campusmanage";

$con = mysqli_connect($sever, $username, $password, $dbname);

if($_SERVER['REQUEST_METHOD'] ==='POST')
{
    $remail=$_POST['remail'];
    $createuse=$_POST['createuse'];
    $createpass=$_POST['createpass'];
    $confpass=$_POST['confpass'];

    $sql = "insert into regtonew(remail,createuse,createpass,confpass) values ('$remail','$createuse','$createpass','$confpass')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<a href='registersuccess.php'><button>click here</button></a>";
    }
    else{
        echo "query failed!";
    }
}

else
{
  die(mysqli_error($con));  
}

?>