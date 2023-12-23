<?php

$sever = "localhost";
$username = "root";
$password = "";
$dbname = "campusmanage";

$con = mysqli_connect($sever, $username, $password, $dbname);

if($_SERVER['REQUEST_METHOD'] ==='POST')
{
    $lusername=$_POST['lusername'];
    $lpassword=$_POST['lpassword'];

    $sql = "insert into login(lusername,lpassword) values ('$lusername','$lpassword')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "<a href='newhome.php'><button>click here</button></a>";
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