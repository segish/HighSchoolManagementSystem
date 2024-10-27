<?php
$id11 = $_SESSION['uid'];
$sqlmain="SELECT * FROM `admin` WHERE `id`='$id11'";
$run11=mysqli_query($con,$sqlmain);
$data11=mysqli_fetch_assoc($run11);
$fromname=$data11['Fname'];
$sql22="SELECT *FROM message WHERE towhich = 'admin' AND toname = '$fromname' ;";
$result22=mysqli_query($con,$sql22);
$count=mysqli_num_rows($result22);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>messages</title>
        <link rel="stylesheet" href="../admin/css1.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="../fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
        <script defer src="../jsscript2.js"></script>
<style>
</style>
    </head>
    <body>
        <input type="checkbox" id="btn2" hidden>
        <label for="btn2" class="menu-btn2">
            <h4 style="color: red;">new</h4>
        </label>
        <div class="newmessage" id="neemessage">
            <legend style="text-align: center; margin-bottom:3%;">New message</legend>
            <form method="post" id="form" name="myform" action="">
                <div class="name-area">
                    <div class="input-control">    
                        <select name="towhich" id="towhich">
                            <option value="">select the user type</option>
                            <option value="student">student</option>
                            <option value="admin">admin</option>
                            <option value="teacher">teacher</option>
                            <option value="parent">parent</option>
                        </select>
                        <div class="error"></div>
                    </div>
                </div>
            <div class="form-group mb-0">
                <input class="btn btn-primary btn-block" name="search" type="submit" value="search">
            </div>
            </form>
            <?php if(isset($_POST['search'])){
?>
               <style>
                  #neemessage{
                    transform: scale(1);
                    visibility: visible;
                  }
                  #btn2:checked ~ #neemessage{
                    transform: scale(0);
                    visibility: hidden;
                  }
               </style>
               <?php
             $towhich = $_POST['towhich'];
            ?>
            <form method="post" id="form" name="myform" action="#">
                <div class="name-area">
                    <div class="input-control">
                        <select name="toname" id="toname">
                           <option value="">reciever name</option>
                           <?php
                           if($_POST['towhich']=='admin'){
                            $sqlli="SELECT *FROM admin;";
                            $resultli=mysqli_query($con,$sqlli);
                            if($resultli){
                                while($rowli=mysqli_fetch_assoc($resultli)){
                                    echo '
                                    <option>'.$rowli['Fname'].'</option>
                                    ';
                                }
                            }
                        }
                        if($_POST['towhich']=='student'){
                        $sqlli="SELECT *FROM student WHERE fname != '$fromname' AND logintype != '0';";
                        $resultli=mysqli_query($con,$sqlli);
                        if($resultli){
                            while($rowli=mysqli_fetch_assoc($resultli)){
                                echo '
                                <option>'.$rowli['fname'].'</option>
                                ';
                            }
                        }
                     }
                        if($_POST['towhich']=='teacher'){
                        $sqlli="SELECT *FROM teacher;";
                        $resultli=mysqli_query($con,$sqlli);
                        if($resultli){
                            while($rowli=mysqli_fetch_assoc($resultli)){
                                echo '
                                <option>'.$rowli['fname'].'</option>
                                ';
                            }
                        }
                     }
                     if($_POST['towhich']=='parent'){
                     $sqlli="SELECT *FROM parent;";
                     $resultli=mysqli_query($con,$sqlli);
                     if($resultli){
                         while($rowli=mysqli_fetch_assoc($resultli)){
                             echo '
                             <option>'.$rowli['fname'].'</option>
                             ';
                         }
                     }
                  }
                        ?>
                        </select>
                        <div class="error"></div>
                    </div>
                </div>
            <div class="name-area">
                <div class="input-control">
                    <textarea name="message" id="message" placeholder="enter your message her" cols="50" rows="10"></textarea>
                    <div class="error"></div>
                </div>
            </div>
            <input type="hidden" name="towhich" value="<?php echo $towhich ?>">
            <div class="form-group mb-0">
                <input class="btn btn-primary btn-block" name="send" id="submit" type="submit" value="send"> 
            </div>
        </form> 
        <?php
            }
        ?>
    </div>
      <div class="messagebox">
        <input type="checkbox" id="btn1" hidden>
        <label for="btn1" class="menu-btn1">
          <span class="fa-stack fa-4x">
            <i class="fa fa-circle fa-stack-1x" style="color: white;">
              <span class="count" style="color: red; font-size: medium; position: absolute; left: 16px;">
                <?php echo $count ?> </span></i>
            <i class="fa fa-bell fa-stack-3x fa-inverse"></i>
          </span>
          <i class="fas fa-times"></i>
        </label>
        <nav id="sidebar1">
          <ul class="list-items">
            <div class="message">
              <li>&emsp;&emsp; messages</li><?php
              while($data22=mysqli_fetch_assoc($result22)){
                ?>
              <li><?php echo $data22['fromwhich']?>-> <?php echo $data22['fromname']?>:
                <?php echo $data22['message']?></li>
              <?php
            }
            ?>
            </div>
          </ul>
        </nav>
      </div>
    </body>
</html>
<?php
if(isset($_POST['send'])){
    ?>
    <script>
    const popup = document.getElementById("popup1");
    popup.classList.add("open-popup");                                       
    function closepopup(){
    popup.classList.remove("open-popup");
    window.open('profile.php','_self')
    }                                    
    function closepopup31(){
    popup.classList.remove("open-popup");
    window.open('index.php','_self')
    }                                 
    function closepopup12(){
    popup.classList.remove("open-popup");
    window.open('score.php','_self')
    }
    </script>
    <?php
$servername="localhost";
$username="root";
$passcode="";
$db_name="dahlak";
$dbcon=mysqli_connect($servername,$username,$passcode,$db_name);
    $toname = $_POST['toname'];
    $towhich = $_POST['towhich'];
    $message = $_POST['message'];
    $insertQ = "INSERT INTO `message`(`fromwhich`, `towhich`, `fromname`, `toname`, `message`) 
        VALUES ('admin','$towhich','$fromname','$toname','$message')";
    $query = mysqli_query($con,$insertQ);
}
?>
    