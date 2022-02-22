<?php

include ("config.php");



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
    <script src="vendors/jquery/dist/jquery.min.js"></script>
  </head>

  <body class="login">
<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <form method="post" action="">
              <h1>Sign Up ..</h1>
              <div>
                  <label style="font-size:15px;"><b>User Name  </b></label>
                  <input type="text" name="uname"class="form-control" required/>
              </div>
              
              <div>
                   <label style="font-size:15px;"><b>Registration Number  </b></label>
                   <input type="text" name="regno"class="form-control"  required />
              </div>
              
               <div>
                   <label style="font-size:15px;"><b>NIC Number  </b></label>
                   <input type="text" name="nicno"class="form-control"  required />
              </div>
              
               <div>
                   <label style="font-size:15px;"><b>Department  </b></label>
                   <input type="text" name="dep"class="form-control"  required />
              </div>
              
               <div>
                   <label style="font-size:15px;"><b>Faculty </b></label>
                   <input type="text" name="fac"class="form-control"  required />
              </div>
               <div>
                   <label style="font-size:15px;"><b>User Type</b></label>
                   
              </div>
              <div>
                  <select name="utype" style="height:35px; width:350px; margin-left: 1px; border-radius:2px; ">
                           <option value="admin">Admin</option>
                           <option value="user">User</option>
                           
                        </select>
              </div>
              
              <div>
                   <label style="font-size:15px;"><b>Contact Number</b></label>
                   <input type="text" name="tellno"class="form-control" required />
              </div>
              
              
              <div>
                   <label style="font-size:15px;"><b>Password</b></label>
                   <input type="password" name="pass1"class="form-control" required />
              </div>
              
              <div>
                   <label style="font-size:15px;"><b>Confirm Password</b></label>
                   <input type="password" name="pass2"class="form-control" required />
              </div>
              
              
              
              <div>
                 <button type="reset" name="cancel" style="background-color:red; color: white;">Cancel</button>
                         
                 <button id="send" type="submit" name="submit" style="background-color:blue; color: white;">Submit</button>
                
              </div>

            
                  <h1>Welcome! to Department Of Physical Education </h1>
                  <p>©2019 South Eastern University of Sri Lanka</p>
                </div>
              </div>
            </form>
          </section>
        </div>

 
      </div>
    </div>
     <?php
     
        if(isset($_POST["submit"]))
        {
            $uname=$_POST["uname"];
            $regno=$_POST["regno"];
            $nic=$_POST["nicno"];
            $dep=$_POST["dep"];
            $fac=$_POST["fac"];
            $utype=$_POST["utype"];
            $tell=$_POST["tellno"];
            $pass1=$_POST["pass1"];
            $pass2=$_POST["pass2"];
           
            
            
            if($pass1==$pass2)
            {
                $sql="INSERT INTO user(uname,reg_no,nic,department,faculty,utype,password,tell_no)
                      VALUES('$uname','$regno','$nic','$dep','$fac','$utype','$pass1','$tell')";
                if($con->query($sql))
                {
                    
                }
                else
                {
                     echo "<p try again /p>";
                }
            }
            else
            {
                 echo "<p password is not match /p>";
            }
            
        }
        else
        {
            echo "<p fill up all details /p>";
        }
        
        
        ?>

  </body>
</html>



