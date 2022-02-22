<?php
include ("config.php");

?>
 <?php

$userid=$_GET['edit'];
$query="SELECT * FROM barrow WHERE bid='".$userid."'";
$result=mysqli_query($con,$query);
 while($row=mysqli_fetch_assoc($result))
 {
      $userid=$row['bid'];
      $uname=$row['uname'];
      $regno=$row['regno'];
      $pname=$row['pname'];
      $pcode=$row['pcode'];
      $pcount=$row['pcount'];
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
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>update </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                  <img src="images/12.jpeg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>SEUSL Physical Department Admin !!</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                    <li><a href="dash.php"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li><a href="#"><i class="fa fa-user"></i> Add User</a>
                       <li><a href="userlist.php"><i class="fa fa-group"></i>User List</a>
                  <li><a href="addproduct.php"><i class="fa fa-edit"></i> Add Product</a>
                 
                  </li>
                   <li><a href="barrowform.php"><i class="fa fa-file"></i> Barrow Form</a>
                  </li>
                  <li><a href="barrowlist.php"><i class="fa fa-desktop"></i> Barrow List</a>
 
                  </li>
                </ul>
              </div>
            
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    
                    
                    <li><a href="index1.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                  </div>
        </div>

               
                
                   
            
          
        
        <!-- /top navigation -->

        <!-- page content -->
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            
            <form action="updatebarrow.php"method="post"class="form-horizontal form-label-left" novalidate>

                        <p style="color: #37B6B1; font-size: 30px;align-text:center;"><b>THINGS BARROW FORM 
                            </b> </p>
                            <span class="section" style="color: #37B6B1;font-size:20px;"><b>Barrow Info</b></span>
                      <input name="id" type="hidden" value="<?php echo $userid; ?>">
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="uname">User Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="bname"   type="text" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="uname" value="<?php echo $uname ?>" required>
                        </div>
                      </div>
                     
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bregnumber">Registration_no <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="bregnumber" name="regno" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo $regno ?>"required >
                        </div>
                      </div>
                            
                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bpname">pname <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="bregnumber" name="pname"  data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo $pname ?>" required>
                        </div>
                      </div>
                            
                               <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="bpcode">pcode <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="bregnumber" name="pcode"  data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo $pcode ?>" required>
                        </div>
                      </div>
                            
                            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pcount">pcount <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="number" id="bregnumber" name="pcount"  data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" value="<?php echo $pcount ?>"required>
                        </div>
                      </div>
                            
                            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <button type="reset" class="btn btn-primary">Cancel</button>
                         
                          <button id="send" type="submit" name="update"class="btn btn-success">Update</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        

        
        
        

        <!-- footer content -->
        <footer>
          <div class="pull-right">
              <central>Created by M.I.L.ABDALLA, Department Of ICT,Faculty Of Technology,South Eastern University of Sri Lanka</central>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>
  
  </body>
</html>



?>