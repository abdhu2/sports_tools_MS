<?php
//include("config.php");
if(isset($_POST['update']))
{
    $userid=$_GET['eid'];
    $pname=$_POST['pname'];
    $pcode=$_POST['pcode'];
    $pcount=$_POST['pcount'];
    
    $query="UPDATE products SET pname='".$pname."', pcode='".$pcode."',pcounts='".$pcount."' WHERE pid='".$userid."'";
     $result=mysqli_query($con,$query ); 

     if($result)
     {
         header("location:dash.php");
     }
     else
     {
         echo "please try again";
     }
}
else
{
     header("location:dash.php");
} 
 
?> 