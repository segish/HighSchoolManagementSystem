<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo "";					
}
else
{
    header('location: ../login.php');
}
include("../dbcon.php")
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>admin dashbord</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
<script defer src="../jsscript2.js"></script>
  </head  >
  <body>
    <div class="main">
      <?php
include ('header.php');
include ('notification.php');
      ?>
      <div class="form">
      <div class="login_div1">
    <div class="login_div2">
        <div class="container">
            <fieldset class="loginbox">
                <legend>register new parent</legend>
                <div class="login_right">
                    <div class="login_right_warp">
                        <h2 class="account-subtitle">please fill the following datas</h2>
                            <form enctype="multipart/form-data" method="post" id="form" name="myform" onsubmit="return registerTeacher1()" action="">
                            <div class="name-area">
                                <div class="input-control">
                                <input id="fname" name="fname" placeholder="First name" type="text">
                                <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="lname" name="lname" placeholder="Father name" type="text">
                                    <div class="error"></div>
                                </div>
                            </div>
                                <div class="input-control">
                                    <input id="sname" name="sname" placeholder="G.father name" type="text">
                                    <div class="error"></div>
                                </div>
                            <div class="name-area">
                                <div class="input-control">
                                    <select name="grade" id="grade">
                                        <option>student name</option><?php
                                            include("../dbcon.php");
                                            $sql="SELECT *FROM student ;";
                                            $result=mysqli_query($con,$sql);
                                            while($row=mysqli_fetch_assoc($result)){
                                                echo '
                                                <option value="'.$row['ID'].'">'.$row['fname'].'</option>
                                                ';
                                            }
                                        ?>
                                    </select>
                                    <div class="error"></div>
                                </div>
                              <div class="sex">
                                <div class="pad">
                                   SEX
                                </div>
                                <div>
                                    male
                                </div>
                                <div>
                                    <input id="male" name="sex" type="radio" value="M">
                                </div>
                                <div>
                                    female
                                </div>
                                <div>
                                    <input id="fmale" name="sex" type="radio" value="F">
                                </div>
                              </div>
                            </div>
                            <div class="name-area">
                                <div class="input-control">
                                    <input id="email" name="email" placeholder="Email" type="text">
                                    <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="phone" name="phone" placeholder="Phone number" type="number">
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="name-area">
                                <div class="input-control">
                                    <input id="password"name="password" placeholder="Password" type="password">
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <input class="btn btn-primary btn-block" name="submit" id="submit" type="submit" value="register">
                                <div class="popup" id="popup">
                                    <img src="../asset/tick.png">
                                    <h2>succssful!!!</h2>
                                    <p>you add the user succssfully <br> please clik ok to go to exit this page</p>
                                    <button name="submit1" type="button" onclick="techerRegPop()">OK</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        if(isset($_POST['submit'])){
                        $servername="localhost";
                        $username="root";
                        $passcode="";
                        $db_name="dahlak";
                        $dbcon=mysqli_connect($servername,$username,$passcode,$db_name);
                            $fName = $_POST['fname'];
                            $lname = $_POST['lname'];
                            $sname = $_POST['sname'];
                            $grade = $_POST['grade']; 
                            $sex = $_POST['sex'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $password = $_POST['password'];
                            $searchsqlstud="SELECT * FROM `student`  WHERE `email`='$email';";
                            $searchsqlteacher="SELECT * FROM `teacher`  WHERE `email`='$email';";
                            $searchsqladmin="SELECT * FROM `admin`  WHERE `email`='$email';";
                            $searchsqlparent="SELECT * FROM `parent`  WHERE `email`='$email';";
                            $searchquerystud=mysqli_query($dbcon,$searchsqlstud);
                            $searchqueryteacher=mysqli_query($dbcon,$searchsqlteacher);
                            $searchqueryadmin=mysqli_query($dbcon,$searchsqladmin);
                            $searchqueryparent=mysqli_query($dbcon,$searchsqlparent);
                            if(mysqli_num_rows($searchquerystud)>=1||mysqli_num_rows($searchqueryadmin)>=1||
                            mysqli_num_rows($searchqueryteacher)>=1||mysqli_num_rows($searchqueryparent)>=1){
                                echo '       '.'<h4 style="color:red;text-align: center;font-size: 30px;margin: 0;">
                                <i class="fa fa-warning" style="color:red;"></i>&nbsp;&nbsp;&nbsp;email already exist</h4>';
                            }else{
                                ?>
                            <script>
                            popup.classList.add("open-popup");
                            </script>
                            <?php
                            $insertQ="INSERT INTO `parent`(`fname`, `mname`, `lname`, `studid`, `sex`, `email`, `phone`, `password`) 
                            VALUES ('$fName','$lname','$sname','$grade','$sex','$email','$phone','$password')";
                            $query = mysqli_query($dbcon,$insertQ);
                            mysqli_close($dbcon);
                        }
                    }?>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

      </div>
</div>
    <?php
include ('footer.php');
      ?>
</body>
</html>