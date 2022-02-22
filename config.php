<?php
$con=new mysqli("localhost","root","","stbs");

if($con ->connect_error)
{
    echo $con->connect_errorl;
    dei("connection failed");
}
else
{
    //echo"connected";
}

?>

