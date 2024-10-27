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
$sql="SELECT * FROM `student` WHERE `id`='$id'";
$run=mysqli_query($con,$sql);
if(mysqli_num_rows($run)>0)
{
$row=mysqli_fetch_assoc($run);?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>student dashboard</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="jquery-3.6.0.min.js"></script>
      <script src="bootstrap.min.js"></script>
      <script defer src="../jsscript2.js"></script>
	</head>
	<body>
		<div class="main" style="overflow: visible;"><?php
         include('header.php');
         ?>
         <div class="page-wrapper" style="margin-top: 200px;">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col">
                        <h3 class="page-title">Profile</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Profile</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="profile-header">
                        <div class="row align-items-center">
                           <div class="col-auto profile-image">
                              <a href="#">
                              <img class="rounded-circle" alt="User Image" src="../dataimg/<?php echo $row['img'];?>">
                              </a>
                           </div>
                           <div class="col ml-md-n2 profile-user-info">
                              <h4 class="user-name mb-0"><?php echo $row['fname'].'  '.$row['lname'].'  '.$row['sname'];?></h4>
                              <h6 class="text-muted">Grade: <?php echo $row['grade'];?></h6>
                              <div class="user-Location"><i class="fas fa-map-marker-alt"></i> Dahlak high school student</div>
                              <div class="about-text">Lorem ipsum dolor sit amet.</div>
                              <div class="popup" id="popup">
                                 <img src="../asset/tick.png">
                                 <h2>succssful!!!</h2>
                                 <p>you have changed your password <br> please clik ok to exit this page</p>
                                 <button name="submit1" type="button" onclick="closepopup()">OK</button>
                              </div>
                              <div class="popup" id="popup1">
                                 <img src="../asset/tick.png">
                                 <h2>Thank you</h2>
                                 <p>you have send the message succssfully <br> please clik ok to exit this page</p>
                                 <button name="sendaa" type="button" onclick="closepopup()">OK</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                           <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#password_tab"><i class="far fa-edit mr-1"></i>Edit your profile</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content profile-tab-cont">
                        <div class="tab-pane fade show active" id="per_details_tab">
                           <div class="row">
                              <div class="col-lg-8">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Personal Details</span>
                                          <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="far fa-edit mr-1"></i>Edit</a>
                                       </h5>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                          <p class="col-sm-9"><?php echo $row['fname'].'  '.$row['lname'].'  '.$row['sname'];?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Age</p>
                                          <p class="col-sm-9"><?php echo $row['age'];?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                          <p class="col-sm-9"><?php echo $row['email']?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                          <p class="col-sm-9"><?php echo $row['phone']?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                          <p class="col-sm-9"><?php echo $row['nation']?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Primary-contact</p>
                                          <p class="col-sm-9"><?php echo $row['pname'].' '.$row['pfname'];?></p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0">Mothers Name</p>
                                          <p class="col-sm-9"><?php echo $row['mname'].' '.$row['mfname'];?></p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Your Documents</span>
                                       </h5>
                                       <div class="skill-tags">
                                          <embed src="../dataimg/<?php echo $row['document']?>" type="application/pdf" >
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Your subjects</span>
                                       </h5>
                                       <div class="skill-tags">
                                          <span>Amharic</span>
                                          <span>English</span>
                                          <span>Mathematics</span>
                                          <span>Physics</span>
                                          <span>Chemistry</span>
                                          <span>History</span>
                                          <span>Geography</span>
                                          <span>HPE</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="password_tab" class="tab-pane fade">
                           <div class="card">
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                       <h5 class="card-title">Change Password</h5>
                                       <form enctype="multipart/form-data" id="form" name="myform" onsubmit="return validatechange()" method="post" action="profile.php">
                                          <input type="hidden" id="reserve"  value="<?php echo $row['password'] ?>">
                                          <div class="input-control">
                                             <input type="password" id="oldpassword" name="oldpassword" placeholder="enter your old password" class="form-control">
                                             <div class="error"></div> <br>
                                          </div>
                                          <div class="input-control">
                                             <input id="password" type="password" name="newpassword" placeholder="enter your new password" class="form-control">
                                             <div class="error"></div><br>
                                          </div>
                                          <div class="input-control">
                                             <input type="password" id="password2" name="password2" placeholder="confirm your password" class="form-control">
                                             <div class="error"></div> <br>
                                          </div>
                                    </div>
                                    <div class="col-md-10 col-lg-6">
                                    <h5 class="card-title">Change profile image</h5>
                                       <input type="file" name="img" id="img">
                                    </div>
                                       <div class="col-md-10 col-lg-12">
                                          <input class="btn btn-primary" name="submit" type="submit" value="Save Changes">
                                       </div>
                                       <?php
                                          if(isset($_POST['submit']))
                                          {
                                             ?>
                                             <script>
                                             const popup = document.getElementById("popup");
                                             popup.classList.add("open-popup");                                       
                                             function closepopup(){
                                                popup.classList.remove("open-popup");
                                                window.open('profile.php','_self')
                                             }
                                             </script>
                                             <?php
                                             $oldpass=$_POST['oldpassword'];
                                             $newpassword=$_POST['newpassword'];
                                             $imagename=$_FILES['img']['name'];
                                             $imagetempname=$_FILES['img']['tmp_name'];
                                                $sqlchange="UPDATE `student` SET `password`='$newpassword' WHERE `ID`='$id';";
                                                $resultchange=mysqli_query($con,$sqlchange);
                                                if($_FILES['img']['name'] != ''){
                                                $sqlchangeimg="UPDATE `student` SET `img`='$imagename' WHERE `id`='$id';";
                                                $resultchangeimg=mysqli_query($con,$sqlchangeimg);
                                                   move_uploaded_file($imagetempname,"../dataimg/$imagename");
                                           }
                                             }
                                       ?>
                                       </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php
      include('notification.php');
      ?>
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
<?php
}
else{
    ?>
    <script>
        alert('your records has been deleted by the admin');
        window.open('login.php','_self');
    </script>
    <?php
}
?>