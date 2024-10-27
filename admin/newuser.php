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
include("../dbcon.php");
$id = $_SESSION['uid'];
$sql="SELECT * FROM `admin` WHERE `id`='$id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
$fromname=$data['Fname'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>messages</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/all.css">
    </head>
    <body>
        <div class="main">
        <?php
include ('header.php');
include ('notification.php');
      ?>
        <div style="margin-top:15%;">
          <div class="popup" id="popup">
              <img src="../asset/tick.png">
              <h2>Thanks for your suggestion</h2>
              <p>you have send the message succssfully <br> please clik ok to exit this page</p>
              <button name="send" type="button" onclick="closepopup31()">OK</button>
          </div>
          <div style="text-align:center"><h2>New entery students </h2></div>
          <table border="1" cellpadding="0" cellspacing="0" class="styled-table">
              <thead>
                  <tr>
                    <th scope="col">Id</th >
                    <th scope="col">Frist name</th >
                    <th scope="col">Second Name</th >
                    <th scope="col">sex</th >
                    <th scope="col">Grade</th >
                    <th scope="col">Nation</th >
                    <th scope="col">Age</th >
                    <th scope="col">Email</th >
                    <th scope="col">Phone</th >
                    <th scope="col">Parent Name</th >
                    <th scope="col">Parent Phone</th >
                    <th scope="col">opration</th >
                  </tr>
              </thead>
              <tbody>
                  <?php
                      $sql="SELECT *FROM student WHERE logintype = 0;";
                      $result=mysqli_query($con,$sql);
                      if($result){
                        include("../dbcon.php");
                        $id1=0;
                        $id2=0;
                        if(isset($_POST['delete'])){
                            $id1=$_POST['deleteid'];
                            $sql2="Delete FROM student WHERE ID = $id1;";
                            $result2=mysqli_query($con,$sql2);
                        }
                        elseif(isset($_POST['accept'])){
                            $id2=$_POST['deleteid'];
                            $sql3="UPDATE student SET logintype = 1 WHERE `ID`='$id2';";
                            $result3=mysqli_query($con,$sql3);
                        }
                        while($row=mysqli_fetch_assoc($result)){
                          if(($row['ID']==$id1)){
                            echo '<td colspan="12" style="text-align:center;">
                            <h3 style="color:red;">Deleted</h3>
                            </td>
                            </tr>
                            ';
                        }
                        elseif(($row['ID']==$id2)){
                            echo '<td colspan="12" style="text-align:center;">
                            <h3 style="color:green;">accepted</h3>
                            </td>
                            </tr>
                            ';
                        }
                        else{
                          echo '<tr>
                          <td>'.$row['ID'].'</td>
                          <td>'.$row['fname'].'</td>
                          <td>'.$row['sname'].'</td>
                          <td>'.$row['sex'].'</td>
                          <td>'.$row['grade'].'</td>
                          <td>'.$row['nation'].'</td>
                          <td>'.$row['age'].'</td>
                          <td>'.$row['email'].'</td>
                          <td>'.$row['phone'].'</td>
                          <td>'.$row['pname'].'</td>
                          <td>'.$row['pphone'].'</td>
                          <td>
                          <form action="newuser.php" method="post">
                          <input type="hidden" name="deleteid" value="'.$row['ID'].'">
                          <input type="submit" class="action delete" name="delete" value="DELETE">
                          <input type="submit" name="accept" class="action accept"value="ACCEPT">
                          </form>
                          </td>
                          </tr>';
                      }
                    }
                  }
            ?>
              </tbody>                
          </table>
        </div>
      </div><?php
include ('footer.php');
      ?>
  </body>
</html>
<?php
if(isset($_POST['submit'])){
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
    mysqli_close($con);
    ?>
    <script>
    alert('sent!!');
        window.open('message.php','_self');
    </script>
    <?php
}
?>