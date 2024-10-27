
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="admin/css1.css">
	<!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script> -->
    <title>home page</title>
</head>
<body class="body">
  <div class="main">
  <?php
   include('homeheader.php')
  ?>
    


    <div class="container">
      <div class="row">
         <div class="col-md-4">
            <ul class="i-list medium">
               <li class="i-list-item">
                  <div class="icon"> <i class="fa fa-desktop"></i> </div>

                  <div class="icon-content">
                     <h3 class="title">Fully teaching learning proccess</h3>
                     <p class="sub-title">
                        We give servce to our students by giving them fully cuvord teaching learning proccess using our impowered teachers
                     </p>
                  </div>
                  <div class="iconlist-timeline"></div>
               </li>
               <li class="i-list-item">
                  <div class="icon"> <i class="fa fa-code"></i> </div>

                  <div class="icon-content">
                     <h3 class="title">Easy &amp; basic Coding services</h3>
                     <p>
                        we have fully funded coding teutorials for whose are selected by the government and send to our school.
                     </p>
                  </div>
                  <div class="iconlist-timeline"></div>
               </li>
               <li class="i-list-item">
            </ul>
         </div>
         <div class="col-md-4">
            <ul class="i-list medium">
               <li class="i-list-item">
                  <div class="icon"> <i class="fa fa-book"></i> </div>
                  <div class="icon-content">
                     <h3 class="title">Our Libraries</h3>
                     <p class="sub-title">We have 24 hour working library for our students and fr other societies.
                     </p>
                  </div>
                  <div class="iconlist-timeline"></div>
               </li>
               <li class="i-list-item">
                  <div class="icon"> <i class="fa fa-cloud"></i> </div>
                  <div class="icon-content">
                     <h3 class="title">In the summer time</h3>
                     <p>Our class rooms are used for teaching summer students of the suurounding summer studets.
                     </p>
                  </div>
                  <div class="iconlist-timeline"></div>
               </li>
            </ul>
         </div>
         <div class="col-md-4">
            <ul class="i-list medium">
               <li class="i-list-item">
                  <div class="icon"> <i class="fa fa-user"></i> </div>
                  <div class="icon-content">
                     <h3 class="title">For teachers</h3>
                     <p class="sub-title">we give afree webpage where the parents can see about only their childrens information and also communicate withe
                         their student teachers and staff members.
                     </p>
                  </div>
                  <div class="iconlist-timeline"></div>
               </li>
               <li class="i-list-item">
                  <div class="icon"> <i class="fa fa-users"></i> </div>
                  <div class="icon-content">
                     <h3 class="title">For our student parents</h3>
                     <p>We give afree webpage where the parents can see about only their childrens information and also communicate withe
                         their student teachers and staff members.
                     </p>
                  </div>
                  <div class="iconlist-timeline"></div>
               </li>
            </ul>
         </div>
      </div>
   </div>
    <div class="popup" id="popup1">
        <img src="asset/tick.png">
        <h2>Thank you</h2>
        <p>you have send the message succssfully <br> please clik ok to exit this page</p>
        <button name="sendaa" type="button" onclick="closepopup31()">OK</button>
    </div>
    <?php
      if(isset($_SESSION['uid'])){
        $type=$_SESSION['type'];
      if($type=="student"){
        include('student/notification.php');
      }
      if($type=="parent"){
        include('parent/notification.php');
      }
      if($type=="admin"){
        include('admin/notification.php');
      }
      if($type=="teacher"){
        include('teacher/notification.php');
      }
    }
    ?> 
    </div> 
    <?php
                include('footer.php');
                ?>
       <script type="text/javascript">
      var counter = 1;
      setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 5){
          counter = 1;
        }
      }, 3000);
      </script>
      <style type="text/css">
/* --------------------------------------------
    ICON LIST
-------------------------------------------- */
.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  margin-top: 200px;
  max-width: 800px;
}
.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.col-md-4 {
  -ms-flex: 0 0 33.333333%;
  flex: 0 0 33.333333%;
  max-width: 33.333333%;
}
ul.i-list {
   padding-left: 0;
   list-style: none;
}

ul.i-list .list-title {
   display: inline-block;
   position: absolute;
}

ul.i-list li {
   padding: 2px 0px;
}

ul.i-list i.fa {
   margin-right: 7px;
}

ul.i-list .list-item {
   margin-top: 3px;
   display: inline-block;
}

ul.i-list.filled i.fa {
   color: white;
   font-size: 9px;
   padding: 5px;
   border-radius: 50%;
}

ul.e-icon-list.filled li {
   padding: 2px 0px;
   line-height: 24px;
}

ul.i-list.underline li {
   padding: 6px 0px;
   border-bottom: 1px solid #eee;
}

ul.i-list.medium li {
   padding-bottom: 25px;
   position: relative;
}

ul.i-list.medium .icon {
   margin-right: 25px;
   color: white;
   font-size: 25px;
   text-align: center;
   line-height: 68px;
   width: 68px;
   height: 68px;
   border-radius: 50%;
   box-shadow: 0 5px 16px rgba(0,0,0,.28);
   position: relative;
   z-index: 1;
   /*background-image: url(../img/crease.svg) !important;
   -moz-background-size: 100% 100% !important;
   background-size: 100% 100% !important;
   background-position: center center !important;*/
}

ul.i-list.medium .icon i.fa {
   margin: 25;
}

ul.i-list.medium.bordered .icon {
   background: white;
   color: inherit;
   border: 2px solid #8fc135;
   font-size: 26px;
   color: #8fc135;
   position: relative;
   z-index: 1;
   box-shadow: 0 8px 22px rgba(0,0,0,.28);
}

ul.i-list.medium .list-item {
   text-transform: uppercase;
}

ul.i-list.large .icon {
   margin-right: 30px;
   background: #d0d0d0;
   color: white;
   font-size: 30px;
   text-align: center;
   line-height: 80px;
   width: 80px;
   height: 80px;
   border-radius: 50%;
   box-shadow: 0 8px 22px rgba(0,0,0,.28);
}

ul.i-list.large .icon i.fa {
   margin: 0;
}

ul.i-list.large.bordered .icon {
   background: inherit;
   color: inherit;
   border: 2px solid #8fc135;
   font-size: 30px;
   color: #8fc135;
}

ul.i-list.large .list-item {
   text-transform: uppercase;
}

ul.i-list .icon {
   float: left;
}

ul.i-list.right {
   text-align: right;
}

ul.i-list.right .icon {
   float: right;
}

ul.i-list.right .icon {
   float: right;
   margin-right: 0;
   margin-left: 25px;
}

ul.i-list.large.right .icon {
   float: right;
   margin-right: 0;
   margin-left: 30px;
}

ul.i-list.large li {
   margin-bottom: 25px;
}

ul.i-list .icon-content {
   overflow: hidden;
}

ul.i-list .icon-content .title {
   margin-top: 5px;
   margin-bottom: 10px;
}

.left-line .iconlist-timeline {
   left: auto;
   right: 35px;
}

.iconlist-timeline {
   position: absolute;
   top: 1%;
   left: 32px;
   width: 1px;
   height: 99%;
   border-right-width: 1px;
   border-right-style: dashed;
   height: 100%;
   border-color: #ccc;
}
.icon{
        background-color: #0cb4ce;
}
separator, .testimonial-two, .exp-separator-inner {
    border-color: #0cb4ce;
}
.exp-separator {
    border-color: #0cb4ce;
    border-top-width: 2px;
    margin-top: 10px;
    margin-bottom: 2px;
    width: 100%;
    max-width: 55px;
    border-top-style: solid;
    height: auto;
    clear: both;
    position: relative;
    z-index: 11;
}
.section-sub-title {
    font-size: 18px;
    margin-bottom: 20px;
    font-weight: 400;
    font-family: Poppins;
}
.section-title {
    font-size: 32px;
    font-weight: 600;
    margin-top: 0.45em;
    margin-bottom: 0.35em;
    color: #303133;
    font-family: Poppins;
    letter-spacing: -0.02em;
}
.pb-20 {
    padding-bottom: 20px !important;
}
.text-center {
    text-align: center!important;
}
.center-separator .exp-separator-inner, .center-separator.exp-separator {
    margin-left: auto;
    margin-right: auto;
}
</style>
</body>
</html>
