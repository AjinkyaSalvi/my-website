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

          <link rel="stylesheet" href="./Style/Header.css">
          <link rel="stylesheet" href="./Style/Body.css">
     </head>

     <body class="body">
          <div class="blur" id="blur"></div>

          <header class="h">
               <div class="hBox">
                    <h1>
                         <div class="heading">Ajinkya Salvi</div>
                    </h1>

                    <!--   -===###===-   -===###===-   -===###===-   Navigation Bar 01   -===###===-   -->
                    <div class="nGrid">
                         <nav class="nLAdjust">
                              <a href="Home.php" class="nLink01">
                                   <button class="nButton01">Home</button>
                              </a>

                              <a href="Skills.php" class="nLink01">
                                   <button class="nButton01">Skills</button>
                              </a>

                              <a href="Projects.php" class="nLink01">
                                   <button class="nButton01">Projects</button>
                              </a>

                              <a href="Education.php" class="nLink01">
                                   <button class="nButton01">Education</button>
                              </a>

                              <a href="Experience.php" class="nLink01">
                                   <button class="aNButton01">Experience</button>
                              </a>

                              <a href="Recommendations.php" class="nLink01">
                                   <button class="nButton01">Recommendations</button>
                              </a>

                              <a href="Activities.php" class="nLink01">
                                   <button class="nButton01">Activities</button>
                              </a>

                              <a href="About Me.php" class="nLink01">
                                   <button class="nButton01">About</button>
                              </a>

                              <a href="Contact.php" class="nLink01">
                                   <button class="nButton01">Contact</button>
                              </a>
                         </nav>

                         <?php
                              session_start();
                              $lFlag = $_SESSION['lFlag'];

                              if($lFlag != "1") {
                                   //   ---===###===---   ---===###===---   ---===###===---   Login   ---===###===---
                                   echo "
                                        <button class='oLFButton' onclick='oLForm()'>Login</button>
                                   ";
                              }

                              if($lFlag == "1") {
                                   //   ---===###===---   ---===###===---   ---===###===---   Logout   ---===###===---
                                   echo "
                                        <div style='background-color: transparent;'>
                                             <form action='./Backend/Logout.php' method='post'>
                                                  <button name='loButton' class='loButton'>Logout</button>
                                             </form>
                                        </div>
                                   ";
                              }
                         ?>

                         <div></div>
                    </div>
               </div>

               <div class="sBorder"></div>

               <div>
                    <?php
                         if($lFlag == "1") {
                              //   ---===###===---   ---===###===---   ---===###===---   Navigation Bar 02   ---===###===---
                              echo "
                                   <div class='nBar02'>
                                        <div class='nBTitle02'>Edit Pages:</div>

                                        <nav class='nLAdjust'>
                                             <a href='Edit Home.php' class='nLink02'>
                                                  <button class='nButton02'>Home</button>
                                             </a>

                                             <a href='Edit Skills.php' class='nLink02'>
                                                  <button class='nButton02'>Skills</button>
                                             </a>

                                             <a href='Edit Projects.php' class='nLink02'>
                                                  <button class='nButton02'>Projects</button>
                                             </a>

                                             <a href='Edit Education.php' class='nLink02'>
                                                  <button class='nButton02'>Education</button>
                                             </a>

                                             <a href='Edit Experience.php' class='nLink02'>
                                                  <button class='nButton02'>Experience</button>
                                             </a>

                                             <a href='Edit Recommendations.php' class='nLink02'>
                                                  <button class='nButton02'>Recommendations</button>
                                             </a>

                                             <a href='Edit Activities.php' class='nLink02'>
                                                  <button class='nButton02'>Activities</button>
                                             </a>

                                             <a href='Edit About.php' class='nLink02'>
                                                  <button class='nButton02'>About</button>
                                             </a>

                                             <a href='Edit Contact.php' class='nLink02'>
                                                  <button class='nButton02'>Contact</button>
                                             </a>
                                        </nav>
                                   </div>
                              ";
                         }
                    ?>
               </div>

               <div class="aCenter">
                    <div class="lF" id="lForm">
                         <form action="Login.php" method="post" class="lFContainer">
                              <button type="button" class="cLFButton" onclick="cLForm()">Close</button>
                              <div class="lFTitle">Administrator Login</div>

                              <label for="lUsername" class="lFLabel">Username:</label>
                              <input type="text" id="lUsername" name="lUsername" class="lFTInput01" placeholder="Enter username." required>
                              <br>

                              <label for="lPassword" class="lFLabel">Password:</label>
                              <input type="password" id="lPassword" name="lPassword" class="lFTInput02" placeholder="Enter password." required>
                              <br>

                              <button type="submit" name="liButton" class="liButton">Login</button>
                         </form>
                    </div>
               </div>
          </header>

          <div>
               <?php
                    if($q01 = mysqli_query($mysqli,"SELECT * FROM experience;")) {
                         while($row01 = mysqli_fetch_array($q01)){
                              $Job = $row01[job];
                              $Company = $row01[company];
                              $cLocation = $row01[clocation];
                              $jEDate = $row01[enddate];
                              $jDescription = $row01[jdescription];

                              echo "
                                   <div class='box01'>
                                        $Job at $Company, $cLocation - $jEDate

                                        <div class='box02'>$jDescription</div>
                                   </div>
                              ";
                         }
                    }
               ?>

               <div class='eBRight'>&#129429;</div>
          </div>
          <button onclick="bTTopFunction()" id="bTTop" class="bTTop">
               <strong>&#11014;</strong>
          </button>

          <!--   -===###===-   -===###===-   -===###===-   Footer   -===###===-   -->
          <?php
               include('Like.php');
          ?>

          <script>
               function oLForm() {
                    document.getElementById("blur").style.display = "block";
                    document.getElementById("lForm").style.display = "block";
               }

               function cLForm() {
                    document.getElementById("blur").style.display = "none";
                    document.getElementById("lForm").style.display = "none";
               }

               var bTTButton = document.getElementById("bTTop");

               window.onscroll = function() {scrollFunction()};

               // Scrolls down 20px from the top of the document to show the button
               function scrollFunction() {
                    if ((document.body.scrollTop > 20) || (document.documentElement.scrollTop > 20)) {
                         bTTButton.style.display = "block";
                    }

                    else {
                         bTTButton.style.display = "none";
                    }
               }

               // Go back to the top of the document
               function bTTopFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
               }
          </script>
          </body>
          </html>
