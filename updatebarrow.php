<?php
include ("config.php");
if(isset($_POST['update']))
{
    $userid=$_POST['id'];
     $uname=$_POST['uname'];
      $regno=$_POST['regno'];
      $pname=$_POST['pname'];
      $pcode=$_POST['pcode'];
      $pcount=$_POST['pcount'];
      
    $query="UPDATE barrow SET uname='".$uname."',regno='".$regno."',pname='".$pname."', pcode='".$pcode."',pcount='".$pcount."' WHERE bid='".$userid."'";
     $result=mysqli_query($con,$query );

     if($result)
     {
         header("location:barrowlist.php");
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

