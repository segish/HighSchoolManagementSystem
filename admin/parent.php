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
    <div style="text-align:center"><h2>Legacy Parent </h2></div>
        <table border="1" cellpadding="0" cellspacing="0" class="styled-table">
              <thead>
                  <tr>
                    <th scope="col">Id</th >
                    <th scope="col">Frist name</th >
                    <th scope="col">Second Name</th >
                    <th scope="col">sex</th >
                    <th scope="col">Child</th >
                    <th scope="col">Email</th >
                    <th scope="col">Phone</th >
                    <th scope="col">opration</th >
                  </tr>
              </thead>
              <tbody>
                    <?php
                        $sql="SELECT *FROM Parent";
                        $result=mysqli_query($con,$sql);
                        if($result){
                                include("../dbcon.php");
                                $id1=0;
                                if(isset($_POST['delete'])){
                                    $id1=$_POST['deleteid'];
                                    $sql2="Delete FROM parent WHERE ID = $id1;";
                                    $result2=mysqli_query($con,$sql2);
                                }
                                while($row=mysqli_fetch_assoc($result)){
                                  if(($row['id']==$id1)){
                                    echo '<td colspan="12" style="text-align:center;">
                                    <h3 style="color:red;">Deleted</h3>
                                    </td>
                                    </tr>
                                    ';
                                }
                                else{
                                  echo '<tr>
                                  <td>'.$row['id'].'</td>
                                  <td>'.$row['fname'].'</td>
                                  <td>'.$row['mname'].'</td>
                                  <td>'.$row['sex'].'</td>
                                  <td>'.$row['studid'].'</td>
                                  <td>'.$row['email'].'</td>
                                  <td>'.$row['phone'].'</td>
                                  <td>
                                  <form action="" method="post">
                                  <input type="hidden" name="deleteid" value="'.$row['id'].'">
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