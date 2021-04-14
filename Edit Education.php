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
                                   <button class="nButton01">Experience</button>
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

                    <?php include './Connection/Connection.php';
                         session_start();
                         $lFlag = $_SESSION['lFlag'];

                         if($lFlag=="1") {
                    ?>

                    <div style="background-color: transparent;">
                         <form action='./Backend/Logout.php' method='post'>
                              <button name='loButton' class='loButton'>Logout</button>
                         </form>
                    </div>

                    <div></div>
               </div>
          </div>

               <div class="sBorder"></div>

               <div>
                    <!--   -===###===-   -===###===-   -===###===-   Navigation Bar 02   -===###===-   -->
                    <div class="nBar02">
                         <div class="nBTitle02">Edit Pages:</div>

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
                                   <button class='aNButton02'>Education</button>
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
               </div>
          </header>

          <div>
               <br>

               <?php
                    //   ---===###===---   ---===###===---   ---===###===---   I. Update Education   ---===###===---
                    if($q01 = mysqli_query($mysqli,"SELECT * FROM education;")) {
                         echo "
                              <div class='box01'>
                                   <strong>Update Education</strong>
                                   <form action='./Backend/Update Education.php' method='post'>
                                        Select education:
                                        <select name='uEdSelected' class='iSelect' required>
                                             <option value=''>No education selected.</option>
                         ";

                         while($row01 = mysqli_fetch_array($q01)) {
                              $uEdID = $row01[edid];
                              $uDegree = $row01[degree];
                              $uUniversity = $row01[university];
                              $uULocation = $row01[ulocation];
                              $ugDate = $row01[gdate];
                              $uEdDate = $row01[eddate];
                              $uEdTime = $row01[edtime];

                              echo "<option value='$uEdID'>".$uDegree." from the ".$uUniversity.", ".$uULocation." - ".$ugDate." - Last updated on ".$uEdDate." at ".$uEdTime.".</option>";
                         }

                         echo "
                                        </select>
                                        <br>

                                        <label for='uD'>Update education degree:</label>
                                        <input name='uD' type='text' class='iText' placeholder='Enter degree.'>
                                        <button name='uDButton' class='sButtons'>Update</button>
                                        <br>

                                        <label for='uU'>Update university:</label>
                                        <input name='uU' type='text' class='iText' placeholder='Enter university.'>
                                        <button name='uUButton' class='sButtons'>Update</button>
                                        <br>

                                        <label for='uUL'>Update university location:</label>
                                        <input name='uUL' type='text' class='iText' placeholder='Enter location.'>
                                        <button name='uULButton' class='sButtons'>Update</button>
                                        <br>

                                        <label for='uGD'>Update graduadtion date:</label>
                                        <input name='uGD' type='text' class='iText' placeholder='Enter graduation date.'>
                                        <button name='uGDButton' class='sButtons'>Update</button>
                                   </form>
                              </div>
                         ";
                    }

                    //   ---===###===---   ---===###===---   ---===###===---   II. Add Education   ---===###===---
                    echo "
                         <div class='box01'>
                              <strong>Add Education</strong>
                              <form action='./Backend/Update Education.php' method='post'>
                                   <label for='aD'>Add education degree:</label>
                                   <input name='aD' type='text' class='iText' placeholder='Enter degree.' required>
                                   <br>

                                   <label for='aU'>Add university:</label>
                                   <input name='aU' type='text' class='iText' placeholder='Enter university.' required>
                                   <br>

                                   <label for='aUL'>Add university location:</label>
                                   <input name='aUL' type='text' class='iText' placeholder='Enter location.' required>
                                   <br>

                                   <label for='aGD'>Add graduation date:</label>
                                   <input name='aGD' type='text' class='iText' placeholder='Enter graduation date.' required>
                                   <br>

                                   <button name='aEdButton' class='sButtons'>Add</button>
                              </form>
                         </div>
                    ";

                    //   ---===###===---   ---===###===---   ---===###===---   III. Delete Project   ---===###===---
                    if($q02 = mysqli_query($mysqli,"SELECT * FROM education;")) {
                         echo "
                              <div class='box01'>
                                   <strong>Delete Education</strong>
                                   <form action='./Backend/Update Education.php' method='post'>
                                        Select education:
                                        <select name='dEdSelected' class='iSelect' required>
                                             <option value=''>No education selected.</option>
                         ";

                         while($row02 = mysqli_fetch_array($q02)) {
                              $dEdID = $row02[edid];
                              $dDegree = $row02[degree];
                              $dUniversity = $row02[university];
                              $dULocation = $row02[ulocation];
                              $dgDate = $row02[gdate];
                              $dEdDate = $row02[eddate];
                              $dEdTime = $row02[edtime];

                              echo "<option value='$dEdID'>".$dDegree." from the ".$dUniversity.", ".$dULocation." - ".$dgDate." - Last updated on ".$dEdDate." at ".$dEdTime.".</option>";
                         }

                         echo "
                                   </select>
                                   <br>

                                   <label for='dEdButton'>Delete selected education:</label>
                                   <button name='dEdButton' class='sButtons'>Delete</button>
                              </form>
                              </div>
                         ";
                    }
               ?>
          </div>

          <?php
               }

               else
               echo "
                         </div></div>

                         <div class='sBorder'></div>
                    </header>

                    <br><br><br>

                    <div class='box01' style='text-align: center;'>
                         <span style='font-size:108px;'>&#128041;</span>
                         <br><br>

                         Error: Page not found.
                    </div>

                    <br><br><br><br>
               ";
          ?>

          <button onclick="bTTopFunction()" id="bTTop" class="bTTop">
               <strong>&#11014;</strong>
          </button>

          <!--   -===###===-   -===###===-   -===###===-   Footer   -===###===-   -->
          <?php
               include('Like.php');
          ?>

          <script>
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
