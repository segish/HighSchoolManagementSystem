<html>
    <head>
        <title>vision and mission</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="fontawesome-free-6.1.1-web/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="admin/css1.css">
    </head>
    <body>
        <div class="main">
        <?php include('homeheader.php')?>
        <div class="visionarea">
            <div class="vision">
                <p><strong>VISION</strong> <br> Our vision is to have an educational institute that is built on
                    decipline,educational excellence and character buldiing.
                    As such we aim to give best and be in service of the school.
                    Our vision is to develop well rounded, confident and responsible individuals who 
                    aspire to achieve their full potential. We will do this by providing a welcoming, 
                    happy, safe, and supportive learning environment in which everyone is equal and all 
                    achievements are celebrated</p>
            </div>
            <div class="mission">
                <p><b>MISSION</b><br> Our mission is to be an out standding and peace full institute,
                    which provides lerning for life and adress the change in the educational.
                    effctivelyWe aim to provide a safe learning environment with a welcoming atmosphere 
                    which creates a sense of belonging amongst the families. We maintain an inclusive 
                    environment which acknowledges and respects children from diverse family and cultural
                     backgrounds.
                </p>
            </div>
            <div class="goal">
                <p><strong> GOAL</strong><br> Our goal is to munufacture students that are deciplined
                    ,responcible and patriot students also having high knowledge.
                    and wisdom that is use full for their life.Our goal is to support and nurture the children’s 
                    and our own natural desire to be life-long learners. We are committed to the families we serv
                    e, providing support and encouragement.
                    <h4 class="ephasize"> Our goal is not to create top scorer students
                        but rather we want to creat a sagacious student.</h4></p>
            </div>
            <div class="summary">
                <p>In attempting to realize the above, we pledge to:

                    Equip ourselves as teachers with the skills required to meet the demands of the new and changing
                    curriculum. Create an environment for positive learning. Keep abreast of new developments in the
                    curriculum in order to transfer relevant content to our pupils and to maintain education of
                    excellent quality.Respect the individual needs of all learners, parents and educators and non-educators 
                    Expose to build a good relation amongst all South Africans. Utilize the capacity of the
                    parents and the Governing Body extensively for the good of the education process. Uphold
                    the provisions as contained in the Constitution of South Africa to particularly enhance peaceful 
                    co-existence within our school and community. Seek the grace of our Creator at all times as we go 
                    about our daily duties and tasks. We are and will remain firmly committed to the above principles and 
                    will seek to ensure that these ideals may live within us as well as within our communities.</p>
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
    </body>
</html>