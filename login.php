<?php
session_start();
if(isset($_SESSION['uid']))
{
include('dbcon.php');
$id=$_SESSION['uid'];
$type=$_SESSION['type'];
if($type == "teacher"){
$sql="SELECT * FROM `teacher` WHERE `id`='$id'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)>0){
    $data=mysqli_fetch_assoc($run);
	header('location: index.php');	
        }
    }
    if($type == "admin"){
    $sql="SELECT * FROM `admin` WHERE `id`='$id'";
    $run=mysqli_query($con,$sql);
    if(mysqli_num_rows($run)>0){
        $data=mysqli_fetch_assoc($run);
        header('location: index.php');	
            }
        }
        if($type == "parent"){
        $sql="SELECT * FROM `parent` WHERE `id`='$id'";
        $run=mysqli_query($con,$sql);
        if(mysqli_num_rows($run)>0){
            $data=mysqli_fetch_assoc($run);
            header('location: index.php');	
                }
            }
            if($type == "student"){
            $sql="SELECT * FROM `student` WHERE `ID`='$id'";
            $run=mysqli_query($con,$sql);
            if(mysqli_num_rows($run)>0){
                $data=mysqli_fetch_assoc($run);
                header('location: index.php');	
                    }
                }
}
?><!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>dahlak high school Login</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="fontawesome-free-5.15.4-web/css1/all.css" rel="stylesheet">
      <script defer src="jsscript2.js"></script>
   </head>
   <body>
    <div class="main">
    <header class="header" >
        <div class="logo"> 
            <img src="asset/logo.png" >
        </div>
        <div class="navdiv">
            <nav class="navbar">
                <ul>
                    <li><a a href="index.php">Home</a></li>
                    <li><b>ABOUT</b>
                        <ul>
                            <li> <a href="history.php">history</a></li>
                            <li> <a href="vision.php">vision</a></li>
                            <li> <a href="message.php">message</a></li>
                            <li> <a href="plan.php">plan</a></li>
                    </li>
                        </ul>
                    <li><a href="service.php">service</a></li>
                    <li><a href="calender.php">calender</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="register.php">register</a></li>
                </ul>
            </nav>
        </div>
    </header>
      <div class="login_div1">
         <div class="login_div2">
            <div class="contener">
               <div class="loginbox">
                  <div class="login_left"></div>
                  <div class="login_right">
                     <div class="login_right_warp">
                        <h1>Login</h1>
                        <h2 class="account-subtitle">to your existing account</h2>
                        <form action="login.php" id="form" name="myform" onsubmit="return validateInputs2()" method="post">
                          <div class="input-control">
                              <input id="email" name="email" placeholder="Email" type="text">
                              <div class="error"></div>
                          </div>
                          <div class="input-control">
                              <input id="password"name="password" placeholder="Password" type="password">
                              <div class="error"></div>
                          </div>
                           <div class="form-group">
                              <input class="btn" type="submit" name="submit" value="login">
                           </div>
                        </form>
<?php
if(isset($_POST['submit']))
{
    include('dbcon.php');
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qryadmin="SELECT * FROM `admin` WHERE `email`='$email' AND `password`='$password'";
    $qryteacher="SELECT * FROM `teacher` WHERE `email`='$email' AND `password`='$password'";
    $qryparent="SELECT * FROM `parent` WHERE `email`='$email' AND `password`='$password'";
    $qrystud="SELECT * FROM `student` WHERE `email`='$email' AND `password`='$password'";
    $runadmin=mysqli_query($con,$qryadmin);
    $runteacher=mysqli_query($con,$qryteacher);
    $runparent=mysqli_query($con,$qryparent);
    $runstud=mysqli_query($con,$qrystud);
    $rowadmin=mysqli_num_rows($runadmin);
    $rowteacher=mysqli_num_rows($runteacher);
    $rowparent=mysqli_num_rows($runparent);
    $rowstud=mysqli_num_rows($runstud);
    if($rowadmin==1)
    {
        $data=mysqli_fetch_assoc($runadmin);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        $_SESSION['type']="admin";
        header('location:  index.php');
    } 
    elseif($rowteacher==1)
    {
        $data=mysqli_fetch_assoc($runteacher);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        $_SESSION['type']="teacher";
        header('location:  index.php');
    }
    elseif($rowparent==1)
    {
        $data=mysqli_fetch_assoc($runparent);
        $id=$data['id'];
        $_SESSION['uid']=$id;
        $_SESSION['type']="parent";
        header('location:  index.php');
    }
    elseif($rowstud==1)
    {
        $data=mysqli_fetch_assoc($runstud);
        if($data['logintype'] == 0){
            echo '      '.'<h4 style="color:red;text-align: center;font-size: 30px;margin: 0;">
            <i class="fa fa-warning" style="color:red;"></i>&nbsp;&nbsp;&nbsp;you are not approved by admin</h4>';
        }
        else{
        $id=$data['ID'];
        $_SESSION['uid']=$id;
        $_SESSION['type']="student";
        header('location: index.php');
        }
    }
    else
    {
        echo '       '.'<h4 style="color:red;text-align: center;font-size: 30px;margin: 0;">
    <i class="fa fa-warning" style="color:red;"></i>&nbsp;&nbsp;&nbsp;</i>Email or Password Not Match</h4>';
    }
}
?>
                        <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div>
                        <div class="text-center dont-have">Don’t have an account? <a href=" register.php">Register</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
<?php
include('footer.php');
?>
</body>
</html>