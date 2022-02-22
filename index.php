<?php

include ("config.php");
$check=$con->query("SELECT * FROM user");
if ($check->num_rows == 0)
{
   header("location:createuser1.php");
}
else
{
     if(isset($_POST["submit01"]))
  {   
    
      $uname=mysqli_real_escape_string($con,$_POST["uname1"]);
      $pass=mysqli_real_escape_string($con,$_POST["pass01"]);
      
      if($uname!="" && $pass!="")
      {
        $sql="SELECT uid FROM user WHERE uname ='$uname' AND password ='$pass'";
        $result=mysqli_query($con,$sql);
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
        
        $count=mysqli_num_rows($result);
        if($count==1)
        {
            header("location:dash.php");
        }
        else 
        {
         echo"there is no user";
        }
      }    
    else      
    {
     echo"password or username null";
    } 
  }  
 else 
        
 {
    // echo"error";
 }   
               
}





 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>login page</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form method="post" action="">
              <h1>Login Form</h1>
              <div>
                  <input type="text" name="uname1" class="form-control" placeholder="Username" required />
              </div>
              <div>
                  <input type="password" name="pass01" class="form-control" placeholder="Password" required/>
              </div>
              <div>
                   <button id="send" type="submit" name="submit01" style="background-color:#D7D5CB; color:#494C64;">login</button>
                
              </div>

             
                <br />

                <div>
                  <h1>Welcome! To Department Of Physical Education </h1>
                  <p>©2019 South Eastern University of Sri Lanka</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
     
  </body>
</html>

