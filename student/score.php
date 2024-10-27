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
include('../dbcon.php');
$id=$_SESSION['uid'];
$sql="SELECT *FROM `student` WHERE `ID`='$id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
$studg=$data['grade'];
if($studg==10){
    $studg=9;
}if($studg==12){
    $studg=1;
}
?>
<html>
    <head>
        <title>
            student score 
        </title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link href="../fontawesome-free-5.15.4-web/css1/all.css" rel="stylesheet">
    </head>
    <body>
        <div class="main">
            <?php
                include('header.php');
            ?>
            <div class="popup" id="popup1">
                <img src="asset/tick.png">
                <h2>Thank you</h2>
                <p>you have send the message succssfully <br> please clik ok to exit this page</p>
                <button name="sendaa" type="button" onclick="closepopup31()">OK</button>
            </div>
            <div style="margin-top: 10rem;">
               
                <table border="1" cellpadding="0" cellspacing="0" class="styled-table"
                style="
                    margin: auto;
                    min-width: 450px;
                    margin-bottom: 50px;
                ">
                    <thead>
                        <tr>
                            <th scope="col">Subject</th >
                            <th scope="col">20%</th >
                            <th scope="col">30%</th >
                            <th scope="col">50%</th >
                            <th scope="col">Sum</th >
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql="SELECT * FROM `$studg`";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<tr>
                                <td>'.$row['Subject'].'</td>
                                ';
                                $subject=$row['Subject'];
                                $sqlstud="SELECT * FROM `$subject` WHERE STUDID=$id";
                                $querScore=mysqli_query($con,$sqlstud);
                                if(mysqli_num_rows($querScore)>0){
                                    $dataScore=mysqli_fetch_assoc($querScore);
                                    echo'
                                    <td>'.$dataScore['Assignment'].'</td>
                                    <td>'.$dataScore['MidExam'].'</td>
                                    <td>'.$dataScore['FinalExam'].'</td>
                                    <td>'.$dataScore['FinalExam']+$dataScore['MidExam']+$dataScore['Assignment'].'</td>
                                    ';
                                }else{
                                    echo'
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    ';
                                }
                            }
                        }
                        echo '
                        <tr>
                            
                        </tr>
                        ';
                        ?>
                    </tbody>                
                </table> 
            <?php
            include('notification.php');
            ?> 
            </div>
        </div>
    <?php
include ('footer.php');
      ?>
    </body>
</html>
<?php
if(mysqli_num_rows($run)==0){
    ?>
    <script>
        alert('your records has been deleted by the admin');
        window.open('login.php','_self');
    </script>
    <?php
}