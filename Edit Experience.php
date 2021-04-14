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
                                   <button class='nButton02'>Education</button>
                              </a>

                              <a href='Edit Experience.php' class='nLink02'>
                                   <button class='aNButton02'>Experience</button>
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
                    //   ---===###===---   ---===###===---   ---===###===---   I. Update Experience   ---===###===---
                    if($q01 = mysqli_query($mysqli,"SELECT * FROM experience;")) {
                         echo "
                              <div class='box01'>
                                   <strong>Update Experience</strong>
                                   <form action='./Backend/Update Experience.php' method='post'>
                                        Select experience:
                                        <select name='uExSelected' class='iSelect' required>
                                             <option value=''>No experience selected.</option>
                         ";

                         while($row01 = mysqli_fetch_array($q01)) {
                              $uExID = $row01[exid];
                              $uJob = $row01[job];
                              $uCompany = $row01[company];
                              $uCLocation = $row01[clocation];
                              $uJEDate = $row01[enddate];
                              $uExDate = $row01[exdate];
                              $uExTime = $row01[extime];

                              echo "<option value='$uExID'>$uJob at $uCompany, $uCLocation - $uJEDate - Last updated on $uExDate at $uExTime</option>";
                         }

                         echo "
                                        </select>
                                        <br>

                                        <label for='uJ'>Update job title:</label>
                                        <input name='uJ' type='text' class='iText' placeholder='Enter job title.'>
                                        <button name='uJButton' class='sButtons'>Update</button>
                                        <br>

                                        <label for='uC'>Update company name:</label>
                                        <input name='uC' type='text' class='iText' placeholder='Enter company name.'>
                                        <button name='uCButton' class='sButtons'>Update</button>
                                        <br>

                                        <label for='uCL'>Update company location:</label>
                                        <input name='uCL' type='text' class='iText' placeholder='Enter location.'>
                                        <button name='uCLButton' class='sButtons'>Update</button>
                                        <br>

                                        <label for='uJED'>Update job end date:</label>
                                        <input name='uJED' type='text' class='iText' placeholder='Enter end date.'>
                                        <button name='uJEDButton' class='sButtons'>Update</button>
                                        <br>

                                        <label for='uJD'>Update job description:</label>
                                        <br>
                                        <textarea name='uJD' class='iTArea' autocomplete='on' placeholder='Enter description.'></textarea>
                                        <button name='uJDButton' class='sButtons'>Update</button>
                                   </form>
                              </div>
                         ";
                    }

                    //   ---===###===---   ---===###===---   ---===###===---   II. Add Experience   ---===###===---
                    echo "
                         <div class='box01'>
                              <strong>Add Experience</strong>
                              <form action='./Backend/Update Experience.php' method='post'>
                                   <label for='aJT'>Add job title:</label>
                                   <input name='aJT' type='text' class='iText' class='iText' placeholder='Enter job title.' required>
                                   <br>

                                   <label for='aC'>Add company name:</label>
                                   <input name='aC' type='text' class='iText' placeholder='Enter company name.' required>
                                   <br>

                                   <label for='aCL'>Add company location:</label>
                                   <input name='aCL' type='text' class='iText' placeholder='Enter location.' required>
                                   <br>

                                   <label for='aJED'>Add job end date:</label>
                                   <input name='aJED' type='text' class='iText' placeholder='Enter end date.' required>
                                   <br>

                                   <label for='aJD'>Add job description:</label>
                                   <br>
                                   <textarea name='aJD' class='iTArea' autocomplete='on' placeholder='Enter description.' required></textarea>
                                   <br>

                                   <button name='aExButton' class='sButtons'>Add</button>
                              </form>
                         </div>
                    ";

                    //   ---===###===---   ---===###===---   ---===###===---   III. Delete Experience   ---===###===---
                    if($q02 = mysqli_query($mysqli,"SELECT * FROM experience;")) {
                         echo "
                              <div class='box01'>
                                   <strong>Delete Experience</strong>
                                   <form action='./Backend/Update Experience.php' method='post'>
                                        Select experience:
                                        <select name='dExSelected' class='iSelect' required>
                                             <option value=''>No experience selected.</option>
                         ";

                         while($row02 = mysqli_fetch_array($q02)) {
                              $dExID = $row02[exid];
                              $dJob = $row02[job];
                              $dCompany = $row02[company];
                              $dCLocation = $row02[clocation];
                              $dJEDate = $row02[enddate];
                              $dExDate = $row02[exdate];
                              $dExTime = $row02[extime];

                              echo "<option value='$dExID'>$dJob at $dCompany, $dCLocation - $dJEDate - Last updated on $dExDate at $dExTime</option>";
                         }

                         echo "
                                        </select>
                                        <br>

                                        <label for='dExButton'>Delete selected experience:</label>
                                        <button name='dExButton' class='sButtons'>Delete</button>
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
