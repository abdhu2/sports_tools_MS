<?php
include ("config.php");

$sq = "Select * from barrow where bid=$_GET[id]";
$res = $con->query($sq);
foreach ($res as $r){
    $sql1 = "UPDATE products SET pcounts = pcounts + $r[pcount] WHERE pid= $r[pid]";
    $con->query($sql1);
}


$sql="DELETE FROM barrow WHERE bid='$_GET[id]'";

if(mysqli_query($con,$sql))
{
    
 header("location:barrowlist.php");
 
}

else
{
    echo"not deleted";
}

?>

