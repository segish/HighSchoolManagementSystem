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
    <title>dahlak school students</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>
    <body>
        <div class="main">
      <?php
include ('header.php');
include ('notification.php');
      ?>
    </div>
    <div style="text-align:center;margin-bottom: 50px;margin-top: 10rem;">
    <div style="text-align:center"><h2>Legacy students </h2></div>
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
                        $sql="SELECT *FROM student WHERE logintype = 1;";
                        $result=mysqli_query($con,$sql);
                        if($result){
                                include("../dbcon.php");
                                $id1=0;
                                if(isset($_POST['delete'])){
                                    $id1=$_POST['deleteid'];
                                    $sql2="Delete FROM student WHERE ID = $id1;";
                                    $sql1="Delete FROM grade9score WHERE studid = $id1;";
                                    $result2=mysqli_query($con,$sql2);
                                    $result1=mysqli_query($con,$sql1);
                                }
                                while($row=mysqli_fetch_assoc($result)){
                                  if(($row['ID']==$id1)){
                                    echo '<td colspan="12" style="text-align:center;">
                                    <h3 style="color:red;">Deleted</h3>
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
                                  <form action="" method="post">
                                  <input type="hidden" name="deleteid" value="'.$row['ID'].'">
                                  <input type="submit" class="action delete" name="delete" value="DELETE">
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
    </div>
      <?php
include ('footer.php');
      ?>
    </div>
</html>