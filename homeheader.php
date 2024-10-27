    <header class="header" >
        <div class="logo"> 
            <img src="asset/logo.png" >
        </div>
        <div class="navdiv">
            <nav class="navbar">
                <ul>
                    <li><a a href="index.php">Home</a></li>
                    <li><b>ABOUT</b>
                        <ul>
                            <li> <a href="history.php">history</a></li>
                            <li> <a href="vision.php">vision</a></li>
                    </li>
                        </ul>
                    <li><a href="service.php">service</a></li>
                    <li><a href="calender.php">calender</a></li>
                    <?php
                        session_start();
                            if(isset($_SESSION['uid'])){
                            $id=$_SESSION['uid'];
                            $type=$_SESSION['type'];
                            include('dbcon.php');
                            if($type=="student"){
                            $sqlstud="SELECT * FROM `student` WHERE `ID`='$id'";
                            $runstud=mysqli_query($con,$sqlstud);
                            if(mysqli_num_rows($runstud)>0){
                                $datastud=mysqli_fetch_assoc($runstud);
                                ?>
                                <li><a href="student/profile.php"><?php echo $datastud['fname']; ?></a></li>
                                <li><a href="logout.php">logout</a></li>
                                <?php
                              }
                            }
                            elseif($type=="parent"){
                            $sql="SELECT * FROM `parent` WHERE `id`='$id'";
                            $run=mysqli_query($con,$sql);
                            if(mysqli_num_rows($run)>0){
                                $data=mysqli_fetch_assoc($run);
                                ?>
                                <li><a href="parent/profile.php"><?php echo $data['fname']; ?></a></li>
                                <li><a href="logout.php">logout</a></li>
                                <?php
                                    }
                                }
                                elseif($type=="admin"){
                                $sql="SELECT * FROM `admin` WHERE `id`='$id'";
                                $run=mysqli_query($con,$sql);
                                if(mysqli_num_rows($run)>0){
                                    $data=mysqli_fetch_assoc($run);
                                    ?>
                                    <li><a href="admin/profile.php"><?php echo $data['Fname']; ?></a></li>
                                    <li><a href="logout.php">logout</a></li>
                                    <?php
                                        }
                                    }
                                elseif($type=="teacher"){
                                $sql="SELECT * FROM `teacher` WHERE `id`='$id'";
                                $run=mysqli_query($con,$sql);
                                if(mysqli_num_rows($run)>0){
                                    $data=mysqli_fetch_assoc($run);
                                    ?>
                                    <li><a href="teacher/profile.php"><?php echo $data['fname']; ?></a></li>
                                    <li><a href="logout.php">logout</a></li>
                                    <?php
                                        }
                                    }
                            }
                            else
                            {
                              ?>
                              <li><a href="login.php">login</a></li>
                              <li><a href="register.php">register</a></li>
                            <?php
                            }
                      ?>
                </ul>
            </nav>
        </div>
    </header>