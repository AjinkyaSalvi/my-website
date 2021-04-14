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
                                   <button class='nButton02'>Experience</button>
                              </a>

                              <a href='Edit Recommendations.php' class='nLink02'>
                                   <button class='nButton02'>Recommendations</button>
                              </a>

                              <a href='Edit Activities.php' class='nLink02'>
                                   <button class='nButton02'>Activities</button>
                              </a>

                              <a href='Edit About.php' class='nLink02'>
                                   <button class='aNButton02'>About</button>
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
                    //   ---===###===---   ---===###===---   ---===###===---   I. About Me   ---===###===---
                    //   ---===###===---   ---===###===---   ---===###===---   I.01. Photo   ---===###===---
                    if($q01 = mysqli_query($mysqli,"SELECT * FROM photo WHERE phid='1';")) {
                         if($row01 = mysqli_fetch_array($q01)) {
                              $pFName = $row01[pfname];
                              $phDate = $row01[phdate];
                              $phTime = $row01[phtime];

                              echo "
                                   <div class='box01'>
                                        <strong>Update Photo</strong>
                                        <form action='./Backend/Update About.php' method='post' enctype='multipart/form-data'>
                                             Current resume file: $pFName
                                             <br>
                                             Last updated on $phDate at $phTime.
                                             <br>

                                             <label for='uPh'>Upload Photo:</label>
                                             <input name='uPh' type='file' class='iTFile' accept='.png' required>
                                             <button name='uPhButton' class='sButtons'>Upload</button>
                                        </form>
                                   </div>
                              ";
                         }
                    }

                    //   ---===###===---   ---===###===---   ---===###===---   I.02. My Details   ---===###===---
                    //   ---===###===---   ---===###===---   ---===###===---   I.02.(i) Update My Details   ---===###===---
                    echo "<div class='box01'>";

                    if($q02 = mysqli_query($mysqli,"SELECT * FROM ame;")) {
                         echo "
                              <div class='box02'>
                                   <strong>Update my details</strong>
                                   <form action='./Backend/Update About.php' method='post'>
                                        Select detail:
                                        <select name='uAMSelected' class='iSelect' required>
                                             <option value=''>No detail selected.</option>
                         ";

                         while($row02 = mysqli_fetch_array($q02)) {
                              $uAMID = $row02[amid];
                              $uAMTitle = $row02[amtitle];
                              $uAMDate = $row02[amdate];
                              $uAMDate = $row02[amtime];

                              echo "<option value='$uAMID'>$uAMTitle - Last updated on $uAMDate at $uAMDate.</option>";
                         }

                         echo "
                                        </select>
                                        <br>

                                        <label for='uAMT'>Add title:</label>
                                        <input name='uAMT' type='text' class='iText' placeholder='Enter title.'>
                                        <button name='uAMTButton' class='sButtons'>Update</button>
                                        <br>

                                        <label for='uAMB'>Add body:</label>
                                        <input name='uAMB' type='text' class='iText' placeholder='Enter body.'>
                                        <button name='uAMBButton' class='sButtons'>Update</button>
                                   </form>
                              </div>
                              <br>
                         ";
                    }

                    //   ---===###===---   ---===###===---   ---===###===---   I.02.(ii) Add My Details   ---===###===---
                    echo "
                         <div class='box02'>
                              <strong>Add my details</strong>
                              <form action='./Backend/Update About.php' method='post'>
                                   <label for='aAMT'>Add title:</label>
                                   <input name='aAMT' type='text' class='iText' placeholder='Enter title.' required>
                                   <br>

                                   <label for='aAMB'>Add body:</label>
                                   <input name='aAMB' type='text' class='iText' placeholder='Enter body.' required>
                                   <br>

                                   <button name='aAMBButton' class='sButtons'>Add</button>
                              </form>
                         </div>
                         <br>
                    ";

                    //   ---===###===---   ---===###===---   ---===###===---   I.02.(iii) Delete My Details   ---===###===---
                    if($q03 = mysqli_query($mysqli,"SELECT * FROM ame;")) {
                         echo "
                              <div class='box02'>
                                   <strong>Delete my details</strong>
                                   <form action='./Backend/Update About.php' method='post'>
                                        Select Detail:
                                        <select name='dAMSelected' class='iSelect' required>
                                             <option value=''>No detail selected.</option>
                         ";

                         while($row03 = mysqli_fetch_array($q03)) {
                              $dAMID = $row03[amid];
                              $dAMTitle = $row03[amtitle];
                              $dAMDate = $row03[amdate];
                              $dAMDate = $row03[amtime];

                              echo "<option value='$dAMID'>$dAMTitle - Last updated on $dAMDate at $dAMDate.</option>";
                         }

                         echo "
                                        </select>
                                        <br>

                                        <label for='dAMButton'>Delete details:</label>
                                        <button name='dAMButton' class='sButtons'>Delete</button>
                                   </form>
                              </div>
                         ";
                    }
                    echo "</div>";

                    //   ---===###===---   ---===###===---   ---===###===---   II. Update Website Details   ---===###===---
                    if($q04 = mysqli_query($mysqli,"SELECT * FROM asw.awebsite WHERE awid='1';")) {
                         if ($q04->num_rows == 1) {
                              if($row04 = mysqli_fetch_array($q04)) {
                                   $aWBody = $row04[awbody];
                                   $aWDate = $row04[awdate];
                                   $aWTime = $row04[awtime];

                                   echo "
                                        <div class='box01'>
                                             <strong>Website details</strong>
                                             <form action='./Backend/Update About.php' method='post'>
                                                  Last updated on $aWDate at $aWTime.
                                                  <br>

                                                  <label for='aWBody'>Edit website detail body:</label>
                                                  <br>
                                                  <textarea name='aWBody'  class='iTArea' autocomplete='on' placeholder='Enter body.'>$aWBody</textarea>
                                                  <button name='aWButton' class='sButtons'>Edit</button>
                                             </form>
                                        </div>
                                   ";
                              }
                         }
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
