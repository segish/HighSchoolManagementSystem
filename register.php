<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>dahlak high school student-Registeration</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
<script defer src="jsscript2.js"></script>
<style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button{
        -webkit-appearance: none;
        margin: 0;
    }
</style>
</head>
<body>
    <div class="main">
    <?php include('homeheader.php')?>
<div class="login_div1">
    <div class="login_div2">
        <div class="container">
            <fieldset class="loginbox">
                <legend>register as student</legend>
                <div class="login_right">
                    <div class="login_right_warp">
                        <h2 class="account-subtitle">please fill the following datas</h2>
                            <form enctype="multipart/form-data" method="post" id="form" name="myform" onsubmit="return validateInputs()" action="">
                            <div class="name-area">
                                <div class="input-control">
                                <input id="fname" name="fname" placeholder="First name" type="text">
                                <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="lname" name="lname" placeholder="Father name" type="text">
                                    <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="sname" name="sname" placeholder="G.father name" type="text">
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="name-area">
                                <div class="input-control">
                                    <select name="grade" id="grade">
                                        <option value=" ">grade</option>
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
                                <div class="input-control">
                                    <input id="phone" name="phone" placeholder="Phone number" type="number">
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="name-area">
                                <div class="input-control">
                                    <input id="mname"name="mname" placeholder="mother's name" type="text">
                                    <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="mfname"name="mfname" placeholder="mother's father name" type="text">
                                    <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    profile photo
                                    <div class="error"></div>
                                </div>
                            </div>
                            <div class="name-area">
                                <div class="input-control">
                                    <input id="password"name="password" placeholder="Password at least 8 character" type="password">
                                    <div class="error"></div>
                                </div>
                                <div class="input-control">
                                    <input id="password2"name="password2" placeholder="confirm password" type="password">
                                    <div class="error"></div>
                                </div>
                                <div class="input-control" style="width: 215px;">
                                    <input type="file" id="img" name="img">
                                    <div class="error"></div>
                                </div>
                            </div>
                            <fieldset>
                                <legend>primary contact</legend>
                                <div class="name-area">
                                    <div class="input-control">
                                        <input id="pname"name="pname" placeholder="Name" type="text">
                                        <div class="error"></div>
                                    </div>
                                    <div class="input-control">
                                        <input id="pfname"name="pfname" placeholder="Father name" type="text">
                                        <div class="error"></div>
                                    </div>
                                </div>
                                <div class="input-control">
                                    <input id="pphone"name="pphone" placeholder="Phone Number" type="number">
                                    <div class="error"></div>
                                </div>
                            </fieldset>
                                <div class="input-control">
                                    <h4>please atach your document here</h4>
                                    <input id="atach" name="atach" type="file" >
                                    <div class="error"></div>
                                </div>
                            <div class="form-group mb-0">
                                <input class="btn btn-primary btn-block" name="submit" id="submit" type="submit" value="register">
                                <div class="popup" id="popup">
                                    <img src="asset/tick.png">
                                    <h2>Thank You</h2>
                                    <p>you have Registered succssfully <br> please wait untill the admin aproves your registration</p>
                                    <button name="submit1" type="button" onclick="closepopup()">OK</button>
                                </div>
                            </div>
                        </form>
                        
                        <div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
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
                                $mname = $_POST['mname'];
                                $mfname = $_POST['mfname'];
                                $password = $_POST['password'];
                                $pname = $_POST['pname'];
                                $pfname = $_POST['pfname'];
                                $pphone = $_POST['pphone'];
                                $imagename=$_FILES['img']['name'];
                                $imagetempname=$_FILES['img']['tmp_name'];
                                $document=$_FILES['atach']['name'];
                                $documenttemp=$_FILES['atach']['tmp_name'];
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
                                    $insertQ = "insert into student(fname,lname,sname,sex,grade,nation,age,email,phone,
                                    mname,mfname,password,pname,pfname,pphone,img,document,logintype) 
                                    values ('$fName','$lname','$sname','$sex','$grade','$nation','$age','$email','$phone'
                                    ,'$mname','$mfname','$password','$pname','$pfname','$pphone','$imagename','$document','0')";
                                    $query = mysqli_query($dbcon,$insertQ);
                                    if($query){
                                    move_uploaded_file($imagetempname,"dataimg/$imagename");
                                    move_uploaded_file($documenttemp,"dataimg/$document");
                                    }
                                }

                                
                                mysqli_close($dbcon);
                            }?>

                    </div>

                </fieldset>
            </div>
        </div>
    </div>
</div>
      <footer>
        <div class="vision">
            <ul class="second">
                <li><a href="developers.html">about the developers</a></li>
                <li><a href="security.html"><i class="fas fa-copyright"></i>  privacy and security</a></li>
                <li><a href="http://www.email.com"><i class="fas fa-envelope"></i>  contact us</a></li>
            </ul>
          </div>
        <div class="mission">
            <ul class="second">
                <li><a href="contacts.html">contacts</a></li>
                <li><a href="security.html">privacy and security</a></li>
                <li><a href="contacts.html">contacts</a></li>
                </ul>
            </div>
        <div class="goal">
            <ul class="second">
                <li><a href="m.facebook.com/10004421529860"><i class="fab fa-twitter" style="font-size: 30px;"></i></a></li>
                <li><a href="http://www.facebook.com/10004421529860"><i class="fab fa-facebook-f" style="font-size: 30px;"></i></a></li>
                </ul>
            </div>
      </footer>
</body>
</html>
