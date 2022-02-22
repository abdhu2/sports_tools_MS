<?php


include ("config.php");



$check=$con->query("SELECT * FROM user");
if ($check->num_rows == 0)
{
   echo "table is empty";
}
else
{
    echo "table is not empty";
}


//-----------------------------------------------------------------//
//$uname=$_POST["uname1"];
//$pass=$_POST["pass01"];
//$sql="select * from user";
//  if($con->query($sql)) 
//  {
//      echo "$sql";
//  }
// else 
// {
//      
// 
//     echo "error";
// }
 
//$sql = "SELECT * FROM user";
//if($result = mysqli_query($link, $sql)){
//    if(mysqli_num_rows($result) > 0){
//        echo "<table>";
//            echo "<tr>";
//                echo "<th>id</th>";
//                echo "<th>first_name</th>";
//                echo "<th>last_name</th>";
//                echo "<th>email</th>";
//            echo "</tr>";
//        while($row = mysqli_fetch_array($result)){
//            echo "<tr>";
//                echo "<td>" . $row['id'] . "</td>";
//                echo "<td>" . $row['first_name'] . "</td>";
//                echo "<td>" . $row['last_name'] . "</td>";
//                echo "<td>" . $row['email'] . "</td>";
//            echo "</tr>";
//        }
//        echo "</table>";
//        // Free result set
//        mysqli_free_result($result);
//    } else{
//        echo "No records matching your query were found.";
//    }
//
//
// ----------------------------------------------------------//
 ?>


<!-- if(isset($_POST["submit01"]))
  {   
    
      $uname=mysqli_real_escape_string($con,$_POST["uname1"]);
      $pass=mysqli_real_escape_string($con,$_POST["pass01"]);
      
      if($uname!="" && $pass!="")
      {
        $sql="SELECT uid FROM user WHERE uname ='$uname' AND password =' $pass'";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            header("location:dash.php");
        }
        else
        {
        
      
         }
    else
    {
    }
          
-->

