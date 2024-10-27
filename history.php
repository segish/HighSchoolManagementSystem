<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="admin/css1.css">
        <script defer src="jsscript2.js"></script>
        <link href="fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <title>our history</title>
    </head>
    <body class="body"> 
        <div class="main">
            <?php include('homeheader.php')?>
            <div class="container">
                <div class="row" >
                    <div class="history-wrapper">
                        <div class="timeline-box one-of-two">
                            <img class="mb-1-6 rounded" src="asset/index.jpg" alt="...">
                            <div class="content">
                                <h3 class="h4 mb-2 mb-md-3">Dhlak High School was established on 27 April 1995. The school consisted of approximately 600 pupils 
                and 24 teachers. Despite humble beginnings, the school grew in size and number, and excelled in the 
                academic and sporting spheres. During that time the school were named Belhar Nr 2.</p>
                            </div>
                            <div class="year">1995</div>
                        </div>
                        <div class="timeline-box one-of-two">
                            <img class="mb-1-6 rounded" src="asset/employee.jpg" alt="">
                            <div class="content">
                                <h3 class="h4 mb-2 mb-md-3">Increase employee by 6 members</h3>
                                <p class="mb-0">This was an 
                unforgettable year for Belhar Nr 2.-unrest spread through South Africa. Police stormed the school and 
                many pupils and teachers were injured. Little did pupils, and especially teachers know this was 
                merely the start of things to come.-boycotts, stay-aways, placard demonstrations, marches etc during
                1982-1985.m</p>
                            </div>
                            <div class="year">2003</div>
                        </div>
                        <div class="timeline-box one-of-two">
                            <img class="mb-1-6 rounded" src="asset/award.jpg" alt="...">
                            <div class="content">
                                <h3 class="h4 mb-2 mb-md-3">We win the national awards</h3>
                                <p class="mb-0">Things could only get better for Excelsior High School. We received the award from The 
                National Education Department for excellence. Under Vraagom`s capable leadership, support of the 
                teaching staff Excelsior finally came of age, and could seek competition with the best schools in 
                South Africa.</p>
                            </div>
                            <div class="year">2018</div>
                        </div>
                        <div class="timeline-box one-of-two">
                            <img class="mb-1-6 rounded" src="asset/2.jpg" alt="..." height= "300px">
                            <div class="content">
                                <h3 class="h4 mb-2 mb-md-3">Branches open in International</h3>
                                <p class="mb-0"> Our school has grown on more ways than one since its humbling beginnings and now rates 
                as one of the top schools in the Western Cape. Evidence of this can be found no matter where one 
                looks at the school.</p>
                            </div>
                            <div class="year">2021</div>
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
                include('footer.php');
                ?>
        <style type="text/css">
            .container{
                max-width: 1300px;
                margin-top:450px
            }
            .container,
            .container-fluid, 
            .container-lg, 
            .container-md, 
            .container-sm, 
            .container-xl, 
            .container-xxl {
                width: 100%;
                padding-right: var(--bs-gutter-x,.75rem);
                padding-left: var(--bs-gutter-x,.75rem);
                margin-right: auto;
                margin-left: auto;
            }
            .history-wrapper {
                position: relative;
                padding: 50px 0 50px;
            }
            .history-wrapper:after {
                content: "";
                width: 3px;
                height: 100%;
                background: #ededed;
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
                top: 0;
            }
            .history-wrapper .title-wrap {
                opacity: 0.2;
                padding: 100px 0 0 45px;
            }
            .history-wrapper .timeline-box {
                position: relative;
            }
            .one-of-two {
                width: 50%;
                float: left;
            }
            .history-wrapper .timeline-box:not(:last-child) {
                margin-bottom: 140px;
            }
            .timeline-box:nth-child(2n) {
                padding: 0 0 0 140px;
            }
            .history-wrapper .timeline-box:nth-child(2n) {
                margin-bottom: 140px;
            }
            .history-wrapper .timeline-box:nth-child(2n + 1) {
                margin-top: -24%;
                text-align: right;
            }
            .timeline-box:nth-child(2n + 1) {
                padding: 0 140px 0 0;
            }
            .year {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                position: absolute;
                background: #fff;
                top: 30%;
                color: #3b3b3b;
                transform: translateY(-50%);
                border: 1px solid #dbdbdb;
                line-height: 100px;
                text-align: center;
                font-size: 24px;
                font-weight: 700;
            }
            .timeline-box:nth-child(2n) .year {
                left: 25px;
            }
            .timeline-box:nth-child(2n + 1) .year {
                right: 32px;
            }
            .year:before {
                content: "";
                width: 15px;
                height: 15px;
                border-left: 1px solid #dbdbdb;
                border-bottom: 1px solid #dbdbdb;
                background: #ffffff;
                position: absolute;
                top: 50%;
                margin-top: -7.5px;
            }
            .timeline-box:nth-child(2n) .year:before {
                left: -8px;
                transform: rotate(45deg);
            }
            .timeline-box:nth-child(2n + 1) .year:before {
                right: -8px;
                transform: rotate(-135deg);
            }
            .timeline-box:after {
                content: "";
                width: 3px;
                height: 0;
                background: #ffa200;
                position: absolute;
                top: 30%;
                transform: translateY(-50%);
                z-index: 1;
                transition: all 0.3s ease-in-out;
            }
            .timeline-box:nth-child(2n):after {
                left: -1.5px;
            }
            .timeline-box:nth-child(2n + 1):after {
                right: -1.5px;
            }
            .timeline-box:hover:after {
                height: 97px;
            }
            .timeline-box:before {
                content: "";
                width: 21px;
                height: 21px;
                border-radius: 50%;
                border: 5px solid #ededed;
                position: absolute;
                background: #fff;
                z-index: 2;
                top: 30%;
                transform: translateY(-50%);
                transition: all 0.3s ease-in-out;
            }
            .timeline-box:nth-child(2n):before {
                left: -10.5px;
            }
            .timeline-box:nth-child(2n + 1):before {
                right: -10.5px;
            }
            .timeline-box:hover:before {
                border: 5px solid #ffa200;
            }
            @media screen and (max-width: 1199px) {
                .year {
                    width: 90px;
                    height: 90px;
                    line-height: 90px;
                    font-size: 22px;
                }
            }
            @media screen and (max-width: 991px) {
                .history-wrapper {
                    padding: 30px 0 30px;
                }
                .history-wrapper .title-wrap {
                    padding: 0;
                    margin-bottom: 30px;
                }
                .title-wrap.one-of-two {
                    width: 100%;
                }
                .history-wrapper:after {
                    left: 0;
                }
                .history-wrapper .timeline-box:nth-child(2n) {
                    padding: 0 0 0 140px;
                }
                .history-wrapper .timeline-box:not(:last-child) {
                    margin-bottom: 40px;
                }
                .timeline-box.one-of-two,
                .timeline-box .img img {
                    width: 100%;
                }
                .history-wrapper .timeline-box:nth-child(2n + 1) {
                    margin-top: 0;
                    text-align: left;
                }
                .timeline-box:nth-child(2n + 1) .year {
                    left: 32px;
                }
                .timeline-box:nth-child(2n + 1):before {
                    left: -10.5px;
                }
                .timeline-box:nth-child(2n + 1) .year:before {
                    left: -8px;
                    transform: rotate(45deg);
                }
                .timeline-box:nth-child(2n + 1):after {
                    left: -1.5px;
                }
                .history-wrapper .timeline-box:nth-child(2n + 1) {
                    margin-top: 0;
                    text-align: left;
                }
                .timeline-box:nth-child(2n + 1) {
                    padding: 0 0 0 140px;
                }
            }
            @media screen and (max-width: 767px) {
                .history-wrapper:after,
                .year,
                .timeline-box:before {
                    display: none;
                }
                .history-wrapper {
                    padding: 0;
                }
                .history-wrapper .timeline-box:nth-child(2n),
                .history-wrapper .timeline-box:nth-child(2n + 1) {
                    padding: 0 15px;
                }
                .history-wrapper .timeline-box:not(:last-child) {
                    margin-bottom: 30px;
                }
                .timeline-box .content {
                    text-align: center;
                }
                .timeline-box:nth-child(2n):after,
                .timeline-box:nth-child(2n + 1):after {
                    display: none;
                }
            }

            .mb-1-6, .my-1-6 {
                margin-bottom: 1.6rem;
            }
</style>

    </body>
</html>