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
$id=$_SESSION['uid'];
$search="SELECT * FROM teacher WHERE id = $id;";
$quer=mysqli_query($con,$search);
$data=mysqli_fetch_assoc($quer);
$grade=$data['grade'];
$subject=$data['subject']
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>my students</title>
    <link rel="stylesheet" href="../admin/style.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button{
        -webkit-appearance: none;
        margin: 0;
    }
    input[type=number]{
        width: 100%;
        height: 100%;
        background:inherit;
        border: none;
    }styled-table th, .styled-table td {
        padding: 0;
    }
    </style>
  </head>
    <body>
        <div class="main"><?php
        include('header.php');
        include('notification.php');
?>
    <div style="margin-top:10rem;max-width: 800px;margin-left: auto;margin-right: auto;">
        <table border="1" cellpadding="0" cellspacing="0" class="styled-table">
              <thead>
                  <tr>
                    <th rowspan="2">id</th>
                    <th rowspan="2">First Name</th>
                    <th rowspan="2">Last Name</th>
                    <th rowspan="2">Sur Name</th>
                    <th colspan="5">Score</th>
                  </tr>
                  <tr>
                      <th>20%</th>
                      <th >30%</th>
                      <th>Final</th>
                      <th>Sum</th>
                      <th>Update</th>
                    </tr>


              </thead>
              <tbody>
                    <?php
                        $sql="SELECT * FROM `student` WHERE grade= $grade;";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            
                            if(isset($_POST['save'])){
                                $id2=$_POST['saved'];
                                $Assignment=$_POST['Assignment'];
                                $MidExam=$_POST['MidExam'];
                                $FinalExam=$_POST['FinalExam'];
                                $sql3="INSERT INTO `$subject`(`STUDID`, `Assignment`, `MidExam`, `FinalExam`) VALUES ('$id2','$Assignment','$MidExam','$FinalExam');";
                                $result2=mysqli_query($con,$sql3);
                            }
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<tr>
                                <td>'.$row['ID'].'</td>
                                <td>'.$row['fname'].'</td>
                                <td>'.$row['lname'].'</td>
                                <td>'.$row['sname'].'</td>
                                ';
                                if(isset($_POST['update'])){
                                    $id1=$_POST['updated'];
                                    $Assignment=$_POST['Assignment'];
                                    $MidExam=$_POST['MidExam'];
                                    $FinalExam=$_POST['FinalExam'];
                                    $sql2="UPDATE `$subject` SET `Assignment`='$Assignment',`MidExam`='$MidExam',`FinalExam`='$FinalExam' WHERE STUDID=$id1;";
                                    $result2=mysqli_query($con,$sql2);
                                }
                                $STUDID=$row['ID'];
                                $sqlstud="SELECT * FROM `$subject` WHERE STUDID=$STUDID";
                                $querScore=mysqli_query($con,$sqlstud);
                                if(mysqli_num_rows($querScore)>0){
                                    $dataScore=mysqli_fetch_assoc($querScore);
                                    
                                    echo'
                                    <form method="post" action="">
                                        <td>
                                            <input type="number" name="Assignment" id="Assignment" value="'.$dataScore['Assignment'].'">
                                        </td>
                                        <td>
                                            <input type="number" name="MidExam" id="MidExam" value="'.$dataScore['MidExam'].'">
                                        </td>
                                        <td>
                                            <input type="number" name="FinalExam" id="FinalExam" value="'.$dataScore['FinalExam'].'">
                                        </td>
                                        <td>
                                            '.$dataScore['Assignment']+$dataScore['MidExam']+$dataScore['FinalExam'].'
                                        </td>
                                        <td>
                                            <input type="hidden" name="updated" value="'.$row['ID'].'">
                                            <input type="submit" value="update" name="update">
                                        </td>
                                    </form>';
                                    

                                }
                                else{
                                    
                                    echo'
                                    <form method="post" action="">
                                        <td>
                                            <input type="number" name="Assignment" id="Assignment" value="">
                                        </td>
                                        <td>
                                            <input type="number" name="MidExam" id="MidExam" value="">
                                        </td>
                                        <td>
                                            <input type="number" name="FinalExam" id="FinalExam" value="">
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <input type="hidden" name="saved" value="'.$row['ID'].'">
                                            <input type="submit" value="Save" name="save">
                                        </td>
                                    </form>';
                                    

                                }
                                
                                

                                echo'

                                </tr>
                            
                                ';
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
</html>