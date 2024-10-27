<html>
    <head>
        <title>dahlak high school-developers</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="admin/css1.css">
    <style>
        .box-container1{
            width: 500px;
            display: flex;
        }
        .box1{
            float: left;
            width: 500px;
            margin-bottom: 10px;
            margin: 100px;
        }
        img{
            width: 400px;
            height: 400px;
        }
        .content1{

            text-align: center;
            color: black;
            flex: 1 1 30rem;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 1rem 2rem rgb(0 0 0 / 10%);
        }
    </style>
    </head>
    <body>
    <div class="main">
        <?php include('homeheader.php')?>
            <div class="choos-area">
                <div class="box-container1">
                    <div class="box1">
                        <img src="asset/tsega.jpg" alt="">
                        <div class="content1">
                            <h3>
                                Name: Tsega Tigneh Yifru
                            </h3>
                            <p>ID.: 1203186</p>
                            <p>Email: tseagatigneh08@gmail.com</p>
                        </div>
                    </div>
                    <div class="box1">
                        <img src="asset/yab.jpg" alt="">
                        <div class="content1">
                            <h3>
                                Name: Yeabsega Gashaw Tilahun
                            </h3>
                            <p>ID.: 1207817</p>
                            <p>Email: yeabtsegagashaw@gmail.com</p>
                        </div>
                    </div>
                </div>
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
include ('footer.php');
      ?>
    </body>
</html>