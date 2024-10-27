
      <div class="page-wrapper">
         <div class="content container-fluid">
            <div class="page-header">
               <div class="row">
                  <div class="col">
                     <h3 class="page-title">Profile</h3>
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
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
                        </div>
                     </div>
                  </div>
                  <div class="profile-menu">
                     <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                           <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
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
                              <h5 class="card-title">Change Password</h5>
                              <div class="row">
                                 <div class="col-md-10 col-lg-6">
                                    <form  id="form" name="myform" onsubmit="return validatechange()" method="post" action="profile.php">
                                       <div class="input-control">
                                          <input type="password" id="oldpassword" name="oldpassword" placeholder="enter your old password" class="form-control">
                                          <div class="error"></div>
                                       </div>
                                       <div class="input-control">
                                          <input id="password" type="password" name="newpassword" placeholder="enter your new password" class="form-control">
                                          <div class="error"></di>
                                       </div>
                                       <div class="input-control">
                                          <input type="password" id="password2" name="password2" placeholder="confirm your password" class="form-control">
                                          <div class="error"></di>
                                       </div>
                                       <input class="btn btn-primary" name="submit" type="submit" value="Save Changes">
                                    </form>
                                       <?php
                                       if(isset($_POST['submit']))
                                       {
                                          $oldpass=$_POST['oldpassword'];
                                          $newpassword=$_POST['newpassword'];
                                          if($row['password'] != $oldpass)
                                          {
                                             echo '       '.'<h4 style="color:red;">Incorect old password</h4>';
                                          }
                                          else{
                                             $sqlchange="UPDATE `student` SET `password`='$newpassword' WHERE `ID`='$id';";
                                             $resultchange=mysqli_query($con,$sqlchange);
                                             if($resultchange){
                                                ?>
                                                <script>
                                                   alert('password Updated!!');
                                                   window.open('profile.php','_self');
                                                </script>
                                                <?php
                                             }
                                          }
                                       }
                                    ?>
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
   </div>