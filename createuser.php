

<html>
    <head>
        <title>create user</title>
       
        
    </head>
    <body Style="background-color: #2E4053 ;">
        <h1 style="color:white; text-align:center; margin-top:50px;margin-right: 130px;" ><b>Department Of Physical Education..</b></h1>
        
        <div>
            <fieldset style="margin-left: 350;margin-right: 450; margin-top: 100; border: 5px solid #F7DC6F  ;padding: 5px; font-size: 20px;">
                <legend style=" color: red;"><b>Fill Up Here</b></legend>
                <form  method="post" action="" style="background-color:#ECF0F1;">
            <table   style="width:20%; font-size:20px;margin-left:150px;margin-right: 50px; border-radius:7px; padding: 30px;">
                <tr>
                    <td><label style="padding:10px;">User Name :</label></td>
                    <td style="padding:10px;"><label><input type="text" name="uname" id="uname"required/></label></td>
                    
                </tr>
                
                <tr>
                    <td style="padding:10px;"><label>Registration_NO :</label></td>
                    <td style="padding:10px;"><label><input type="text" name="regno" id="regno"required/></label></td>
                    
                </tr>
                
                <tr>
                    <td style="padding:10px;"><label>NIC Number :</label></td>
                    <td style="padding:10px;"><label><input type="text" name="nicno" id="nicno"required/></label></td>
                    
                </tr>
                
                <tr>
                    <td style="padding:10px;"><label>Department :</label></td>
                    <td style="padding:10px;"><label><input type="text" name="dep" id="dep"required/></label></td>
                    
                </tr>
                
                <tr>
                    <td style="padding:10px;"><label>Faculty :</label></td>
                    <td style="padding:10px;"><label><input type="text" name="fac" id="fac"required/></label></td>
                    
                </tr>
                
                <tr>
                    <td style="padding:10px;"><label>User Type</label></td>
                    <td style="padding:10px;"> 
                        <select name="utype">
                           <option value="admin">Admin</option>
                           <option value="user">User</option>
                           
                        </select>
                    <td>
                </tr>
                
                <tr>
                    <td style="padding:10px;"><label>Password:</label></td>
                    <td style="padding:10px;"><label><input type="password" name="pass1" id="pass1"required/></label></td>
                    
                </tr>
                
                 <tr>
                    <td style="padding:10px;"><label>Confirm Password:</label></td>
                    <td style="padding:10px;"><label><input type="password" name="pass2" id="pass2"required/></label></td>
                    
                </tr
                
                 <tr>
                    <td style="padding:10px;"><label>Telephone:</label></td>
                    <td style="padding:10px;"><label><input type="number" name="tell" id="tell"required/></label></td>
                    
                </tr>
                
                <tr>
                    <td style="padding:10px;" >
                        <button type="reset" name="cancel" style="background-color:red; color: white;">Cancel</button>
                         
                         <button id="send" type="submit" name="submit" style="background-color:blue; color: white;">Submit</button>
                    </td>
                </tr>
               
            </table>
            
        </form>
            </fieldset>
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
            $pass1=$_POST["pass1"];
            $pass2=$_POST["pass2"];
            $tell=$_POST["tell"];
            
            
            if($pass1==$pass2)
            {
                $sql="INSERT INTO user(uname,reg_no,nic,department,faculty,utype,password,tell_no)
                      VALUES('$uname','$regno','$nic','$dep','$fac','$utype','$pass1','$tell')";
                if($con->query($sql))
                {
                    echo "<p send /p>";
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


