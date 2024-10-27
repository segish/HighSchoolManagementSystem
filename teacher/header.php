<header class="header" >
            <div class="logo col1"> 
                <img src="../asset/logo.png" >
            </div>
        <div class="name">
            <h2><?php echo'Teacher'.':  '.$data['fname'].'  '.$data['lname']?></h2>
        </div>
        </header>
    <div class="wrapper">
      <input type="checkbox" id="btn" hidden>
      <label for="btn" class="menu-btn">
        <i class="fas fa-bars"></i>
        <i class="fas fa-times"></i>
      </label>
      <nav id="sidebar">
        <div class="title">Side Menu</div>
        <ul class="list-items">
          <li><a href="../index.php"><i class="fas fa-home"style='font-size:30px'></i>Home</a></li>
          <li><a href="mystudents.php"><i class="fas fa-user-friends"style='font-size:30px'></i>my students</a></li>
          <li><a href="profile.php"><i class="	fas fa-user-clock"style='font-size:30px'></i>profile</a></li>
          <li><a href="../logout.php"><i class='fas fa-sign-out-alt' style='font-size:30px;color:red'></i>logout</a></li>
        </ul>
      </nav>
    </div>