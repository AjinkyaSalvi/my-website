<!DOCTYPE html>
<html>
     <head>
          <title>Ajinkya Salvi</title>

          <meta charset="UTF-8">
          <meta name="description" content="My career website.">
          <meta name="keywords" content="Engineer,Developer,Software,Web,UI,Job,Career,JavaScript,PHP,HTML,HTML5,Java,Python,React,ReactJS,MapReduce,Hadoop,Spark,Pig,Hive,Node,MySQL,Laravel,Cascading,Style,Sheet,CSS,JDBC,HQL,HiveQL,Android,JSON,XML,C,Windows,Linux,Ubuntu,Database,PhpMyAdmin,Full,Stack,Development,Back,End,Apache,Studio,Eclipse,Workbench,Algorithm,Design,Leadership,Teamwork,Team,Management,Bright,Distributed,Systems,System,Website,LinkedIn,UTA,University,of,Texas,at,Arlington,California,New,York,Washington,Jersey,Analysis,Testing,Modelling,Techniques,Big,Data,Cloud,Computing,Artificial,Intelligence,Advanced,Secure,Program,Programs,Programming,Coding,Code,Codes,Management">
          <meta name="author" content="Ajinkya Salvi">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

                         if($_SERVER["REQUEST_METHOD"] == "POST") {
                              if(((isset($_POST['liButton'])) && (isset($_POST['lUsername'])) && (isset($_POST['lPassword']))) || ($lFlag == "1")) {

                                   $lUsername = $_POST['lUsername'];
                                   $lPassword = $_POST['lPassword'];

                                   if($q01 = mysqli_query($mysqli,"Select * from users where username='$lUsername' and upassword='$lPassword';")) {
                                        if ($q01->num_rows == 1) {
                                             $row = mysqli_fetch_array($q01);

                                             if(($row[username]==$lUsername) && ($row[upassword]==$lPassword)) {
                                                  $_SESSION['lFlag'] = "1";
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
          </header>

          <div>
               <?php
                    echo "
                         <div class='lUTitle'>*** $lUsername's Dashboard ***</div>
                    ";
               ?>

               <!--   -===###===-   -===###===-   -===###===-   Navigation Bar 02   -===###===-   -->
               <div class="box01">
                    <strong>Select a page to edit:</strong>

                    <div class="dGrid">
                         <a href="Edit Home.php" class="dButton">
                              <strong>Home</strong>
                         </a>

                         <a href="Edit Skills.php" class="dButton">
                              <strong>Skills</strong>
                         </a>

                         <a href="Edit Projects.php" class="dButton">
                              <strong>Projects</strong>
                         </a>

                         <a href="Edit Education.php" class="dButton">
                              <strong>Education</strong>
                         </a>

                         <a href="Edit Experience.php" class="dButton">
                              <strong>Experience</strong>
                         </a>

                         <a href="Edit Recommendations.php" class="dButton">
                              <strong>Recommendations</strong>
                         </a>

                         <a href="Edit Activities.php" class="dButton">
                              <strong>Activities</strong>
                         </a>

                         <a href="Edit About.php" class="dButton">
                              <strong>About</strong>
                         </a>

                         <a href="Edit Contact.php" class="dButton">
                              <strong>Contact</strong>
                         </a>
                    </div>
                    <br>
               </div>

               <?php
                                             }

                                             else
                                             {
                                                  session_destroy();
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
                                             }
                                        }

                                        else
                                        {
                                             session_destroy();
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
                                        }
                                   }

                                   else
                                   {
                                        session_destroy();
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
                                   }
                              }

                              else
                              {
                                   session_destroy();
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
                              }
                         }

                         else
                         {
                              session_destroy();
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
                         }
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
