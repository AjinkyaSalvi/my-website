<?php include './Connection/Connection.php'; ?>

<!DOCTYPE html>
<html>
     <head>
          <title>Ajinkya Salvi</title>

          <meta charset="UTF-8">
          <meta name="description" content="My career website.">
          <meta name="keywords" content="Engineer,Developer,Software,Web,UI,Job,Career,JavaScript,PHP,HTML,HTML5,Java,Python,React,ReactJS,MapReduce,Hadoop,Spark,Pig,Hive,Node,MySQL,Laravel,Cascading,Style,Sheet,CSS,JDBC,HQL,HiveQL,Android,JSON,XML,C,Windows,Linux,Ubuntu,Database,PhpMyAdmin,Full,Stack,Development,Back,End,Apache,Studio,Eclipse,Workbench,Algorithm,Design,Leadership,Teamwork,Team,Management,Bright,Distributed,Systems,System,Website,LinkedIn,UTA,University,of,Texas,at,Arlington,California,New,York,Washington,Jersey,Analysis,Testing,Modelling,Techniques,Big,Data,Cloud,Computing,Artificial,Intelligence,Advanced,Secure,Program,Programs,Programming,Coding,Code,Codes,Management">
          <meta name="author" content="Ajinkya Salvi">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="icon" type="image/png" href="favicon.png">

          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Cantora+One&display=swap" rel="stylesheet">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">

          <link rel="stylesheet" href="./Style/Footer.css">
     </head>


     <footer class="fBox">
          <?php
               if($q01 = mysqli_query($mysqli, "SELECT * FROM likes")) {
                    while($row01 = mysqli_fetch_array($q01)) {
                         $tLikes = "$row01[lid]";
                    }

                    echo "
                         <div class='gLForm'>
                              Like this website? Press the like button!

                              <a href='./Backend/Give Like.php' style='text-decoration:none;'>
                                   <img src='All-Star Database/Ajinkya Salvi/Website/Like.png' class='lButton'>
                              </a>

                              Like count: $tLikes
                         </div>
                    ";

                    $year = "".date("Y");

                    echo "
                         <br>

                         <div class='cStatement'>
                              <small>Copyright &copy; $year Ajinkya Salvi. All Rights Reserved.</small>
                         </div>
                    ";
               }
          ?>
     </footer>
</html>
