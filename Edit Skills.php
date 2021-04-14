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
                                   <button class='aNButton02'>Skills</button>
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
               </div>
          </header>

          <div>
               <?php
                    //   ---===###===---   ---===###===---   ---===###===---   I. Major   ---===###===---
                    //   ---===###===---   ---===###===---   ---===###===---   I.01. Update Major   ---===###===---

                    echo "<div class='box01'>";

                    if($q01 = mysqli_query($mysqli,"SELECT * FROM asw.majors;")) {
                         echo "
                              <div class='box02'>
                                   <strong>Update Major</strong>
                                   <form action='./Backend/Update Skills.php' method='post'>
                                        <label for='uMSelected'>Select major:</label>
                                        <select name='uMSelected' class='iSelect' required>
                                             <option value=''>No major selected.</option>
                         ";

                         while($row01 = mysqli_fetch_array($q01)) {
                              $uMID = $row01[mid];
                              $uMName = $row01[mname];
                              $uMDate = $row01[mdate];
                              $uMTime = $row01[mtime];

                              echo "<option value='$uMID'>$uMName - Last updated on $uMDate at $uMTime.</option>";
                         }

                         echo "
                                        </select>
                                        <br>

                                        <label for='uMName'>Enter new major name:</label>
                                        <input name='uMName' type='text' class='iText' placeholder='Enter major name.'>
                                        <button name='uMButton' class='sButtons'>Rename</button>
                                   </form>
                              </div>
                         ";
                    }

                    //   ---===###===---   ---===###===---   ---===###===---   I.02. Add Major   ---===###===---
                    echo "
                         <div class='box02'>
                              <strong>Add Major</strong>
                              <form action='./Backend/Update Skills.php' method='post'>
                                   <label for='aMName'>Enter major name:</label>
                                   <input name='aMName' type='text' class='iText' placeholder='Enter major name.'>
                                   <button name='aMButton' class='sButtons'>Add</button>
                              </form>
                         </div>
                    ";

                    //   ---===###===---   ---===###===---   ---===###===---   I.03. Delete Major   ---===###===---
                    if($q02 = mysqli_query($mysqli,"SELECT * FROM asw.majors;")) {
                         echo "
                              <div class='box02'>
                                   <strong>Delete Major</strong>
                                   <form action='./Backend/Update Skills.php' method='post'>
                                        <label for='dMSelected'>Select major:</label>
                                        <select name='dMSelected' class='iSelect' required>
                                             <option value=''>No major selected.</option>
                         ";

                         while($row02 = mysqli_fetch_array($q02)) {
                              $dMID = $row02[mid];
                              $dMName = $row02[mname];
                              $dMDate = $row02[mdate];
                              $dMTime = $row02[mtime];

                              echo "<option value='$dMID'>$dMName - Last updated on $dMDate at $dMTime.</option>";
                         }

                         echo "
                                        </select>
                                        <br>

                                        <label for='dMButton'>Delete selected major:</label>
                                        <button name='dMButton' class='sButtons'>Delete</button>
                                   </form>
                              </div>
                         ";
                    }

                    echo "
                         </div>
                         <div class='box01'>
                    ";

                    //   ---===###===---   ---===###===---   ---===###===---   II. Skills   ---===###===---
                    //   ---===###===---   ---===###===---   ---===###===---   II.01. Update Skill   ---===###===---
                    if($q03 = mysqli_query($mysqli,"SELECT * FROM asw.skills;")) {
                         echo "
                              <div class='box02'>
                                   <strong>Update Skill</strong>
                                   <form action='./Backend/Update Skills.php' method='post'>
                                        Select skill:
                                        <select name='uSSelected' class='iSelect' required>
                                             <option value=''>No skill selected.</option>
                         ";

                         while($row03 = mysqli_fetch_array($q03)) {
                              $uSID = $row03[ssid];
                              $uSName = $row03[sname];
                              $uSDate = $row03[sdate];
                              $uSTime = $row03[stime];
                              $uSSMID = $row03[smid];

                              if($q04 = mysqli_query($mysqli,"SELECT * FROM asw.majors WHERE mid='$uSSMID';")) {
                                   if($row04 = mysqli_fetch_array($q04)) {
                                        $uSMName = $row04[mname];
                                        echo "<option value='$uSID'>$uSName - Major: $uSMName - Last updated on $uSDate at $uSTime.</option>";
                                   }
                              }
                         }

                         echo "
                              </select>
                              <br>

                              <label for='uSName'>Enter new skill name:</label>
                              <input name='uSName' type='text' class='iText' placeholder='Enter skill name.'>
                              <button name='uSNButton' class='sButtons'>Rename</button>
                              <br>
                         ";

                         if($q05 = mysqli_query($mysqli,"SELECT * FROM asw.majors;")) {
                              echo "
                                   Select major:
                                   <select name='uSMSelected' class='iSelect'>
                                        <option value=''>No major selected.</option>
                              ";

                              while($row05 = mysqli_fetch_array($q05)) {
                                   $uSMName = $row05[mname];
                                   $uSMID = $row05[mid];

                                   echo "<option value='$uSMID'>".$uSMName."</option>";
                              }
                         }

                         echo "
                                        </select>
                                        <button name='uSMButton' class='sButtons'>Update</button>
                                   </form>
                              </div>
                         ";
                    }

                         /*   ---===###===---   ---===###===---   ---===###===---   II.02. Add Skill   ---===###===---  */
                         echo "
                              <div class='box02'>
                                   <form action='./Backend/Update Skills.php' method='post'>
                                        <strong>Add Skill</strong>
                                        <br>

                                        <label for='aSName'>Skill title:</label>
                                        <input name='aSName' type='text' class='iText' placeholder='Enter skill title.'>
                                        <br>
                         ";

                         if($q06 = mysqli_query($mysqli,"SELECT * FROM majors;")) {
                              echo "
                                   Select major:
                                   <select name='aSMSelected' class='iSelect' required>
                                        <option value=''>No major selected.</option>
                              ";

                              while($row06 = mysqli_fetch_array($q06)) {
                                   $aSMName = $row06[mname];
                                   $aSMID = $row06[mid];

                                   echo "<option value='$aSMID'>".$aSMName."</option>";
                              }
                         }

                         echo "
                                        </select>
                                        <br>

                                        <button name='aSButton' class='sButtons'>Add</button>
                                        <br>

                                   </form>
                              </div>
                         ";

                         /*   ---===###===---   ---===###===---   ---===###===---   II.03. Delete Skill   ---===###===---   */
                         if($q07 = mysqli_query($mysqli,"SELECT * FROM skills;")) {
                         echo "
                              <div class='box02'>
                                   <strong>Delete Skill</strong>
                                   <form action='./Backend/Update Skills.php' method='post'>
                                        Select skill:
                                        <select name='dSSelected' class='iSelect' required>
                                             <option value=''>No skill selected.</option>
                         ";

                         while($row07 = mysqli_fetch_array($q07)) {
                              $dSName = $row07[sname];
                              $dSDate = $row07[sdate];
                              $dSTime = $row07[stime];
                              $dSID = $row07[ssid];
                              $dSSMID = $row07[smid];

                              if($q08 = mysqli_query($mysqli,"SELECT * FROM majors WHERE mid='$dSSMID';")) {
                                   $row08 = mysqli_fetch_array($q08);
                                   $dSMName = $row08[mname];
                                   echo "<option value='$dSID'>".$dSName." - Major: ".$dSMName." - Last updated on ".$dSDate." at ".$dSTime.".</option>";
                              }
                         }

                         echo "
                                   </select>
                                   <br>

                                   <label for='dSButton'>Delete skill:</label>
                                   <button name='dSButton' class='sButtons'>Delete</button>
                              </form>
                         </div>
                    ";
                    }

                    echo "</div>";
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
