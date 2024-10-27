
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>admin dashbord</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="../fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <script defer src="../jsscript2.js"></script>
  </head  >
  <body>
    <div class="main">
      <?php
include ('header.php');
      ?>
      <div class="form">
      <div class="login_div1">
    <div class="login_div2">
        <div class="container">
            <fieldset class="loginbox">
                <legend>register new teacher</legend>
                <div class="login_right">
                    <div class="login_right_warp">
                        <h2 class="account-subtitle">please fill the following datas</h2>
                            <form enctype="multipart/form-data" method="post" id="form" name="myform" onsubmit="return registerTeacher()" action="">
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
                                        <option value=" ">grade9</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="age" name="age" placeholder="age" type="number">
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
                                <input id="nationality" name="nation" placeholder="Nationality" type="text">
                                <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="email" name="email" placeholder="Email" type="text">
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="name-area">
                                <div class="input-control">
                                    <input id="password"name="password" placeholder="Password" type="password">
                                    <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="phone" name="phone" placeholder="Phone number" type="number">
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="input-control">
                                    <select name="subject" id="atach">
                                        <option value=" ">subject</option>
                                        <option value="amharic">amharic</option>
                                        <option value="english">english</option>
                                        <option value="maths">maths</option>
                                        <option value="biology">biology</option>
                                        <option value="chemistry">chemistry</option>
                                        <option value="physics">physics</option>
                                        <option value="civic">civic</option>
                                        <option value="geography">geography</option>
                                        <option value="history">history</option>
                                        <option value="it">ICT</option>
                                        <option value="hpe">HPE</option>
                                        <option value="td">TD</option>
                                    </select>
                                <div class="error"></div>
                            </div>
                            <div class="form-group mb-0">
                                <input class="btn btn-primary btn-block" name="submit" id="submit" type="submit" value="register">
                                <div class="popup" id="popup">
                                    <img src="asset/tick.png">
                                    <h2>succssful</h2>
                                    <p>you add the user succssfully <br> please clik ok to go to exit page</p>
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
    $sex = $_POST['sex'];
    $grade = $_POST['grade']; 
    $nation = $_POST['nation'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $subject=$_POST['subject'];
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
    }
    else{
        ?>
    <script>
    popup.classList.add("open-popup");
    </script>
    <?php
    $insertQ = "insert into teacher(fname,lname,sname,sex,grade,subject,nation,phone,age,email,
    password) 
    values ('$fName','$lname','$sname','$sex','$grade','$subject','$nation','$phone','$age','$email'
    ,'$password')";
    $query = mysqli_query($dbcon,$insertQ);
    if($query){
    move_uploaded_file($imagetempname,"dataimg/$imagename");
    move_uploaded_file($documenttemp,"dataimg/$document");
    }
    mysqli_close($dbcon);
}
}
?>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>

      </div><?php
include ('notification.php');
?>
</div>
    <?php
include ('footer.php');
      ?>
</body>
</html>