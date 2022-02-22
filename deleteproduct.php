<?php
include ("config.php");

$sql="DELETE FROM products WHERE pid='$_GET[id]'";
if(mysqli_query($con,$sql))
{
   header("location:dash.php");

}
else
{
    echo"not deleted";
}





?>   