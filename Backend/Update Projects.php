<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          //   ---===###===---   ---===###===---   ---===###===---   I. Update Project   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.01. Update Project Title   ---===###===---
          if((isset($_POST['uPrTButton'])) && (isset($_POST['uPrTitle'])) && (isset($_POST['uPrSelected']))) {
               $uPrTDate = "".date("m/d/Y");
               $uPrTTime = "".date("h:i:s a T");
               $uPrTSelected = $_POST['uPrSelected'];
               $uPrTitle = $_POST['uPrTitle'];

               mysqli_query($mysqli, "UPDATE projects SET prtitle='$uPrTitle', prdate='$uPrTDate', prtime='$uPrTTime' WHERE prid='$uPrTSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Projects.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02. Update Project Body   ---===###===---
          if((isset($_POST['uPrBButton'])) && (isset($_POST['uPrBody'])) && (isset($_POST['uPrSelected']))) {
               $uPrBDate = "".date("m/d/Y");
               $uPrBTime = "".date("h:i:s a T");
               $uPrBSelected = $_POST['uPrSelected'];
               $uPrBody = $_POST['uPrBody'];

               mysqli_query($mysqli, "UPDATE projects SET prbody='$uPrBody', prdate='$uPrBDate', prtime='$uPrBTime' WHERE prid='$uPrBSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Projects.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.03. Update Project Majors   ---===###===---
          if((isset($_POST['uPrMButton'])) && (isset($_POST['uPrMajors'])) && (isset($_POST['uPrSelected']))) {
               $uPrMDate = "".date("m/d/Y");
               $uPrMTime = "".date("h:i:s a T");
               $uPrMSelected = $_POST['uPrSelected'];
               $uPrMajors = $_POST['uPrMajors'];

               mysqli_query($mysqli, "UPDATE projects SET prmajors='$uPrMajors', prdate='$uPrMDate', prtime='$uPrMTime' WHERE prid='$uPrMSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Projects.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.04. Update Project Languages   ---===###===---
          if((isset($_POST['uPrLButton'])) && (isset($_POST['uPrLanguages'])) && (isset($_POST['uPrSelected']))) {
               $uPrLDate = "".date("m/d/Y");
               $uPrLTime = "".date("h:i:s a T");
               $uPrLSelected = $_POST['uPrSelected'];
               $uPrLanguages = $_POST['uPrLanguages'];

               mysqli_query($mysqli, "UPDATE projects SET prlanguages='$uPrLanguages', prdate='$uPrLDate', prtime='$uPrLTime' WHERE prid='$uPrLSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Projects.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Add Project   ---===###===---
          if((isset($_POST['aPrButton'])) && (isset($_POST['aPrTitle'])) && (isset($_POST['aPrBody'])) && (isset($_POST['aPrMajors'])) && (isset($_POST['aPrLanguages']))) {
               $aPrDate = "".date("m/d/Y");
               $aPrTime = "".date("h:i:s a T");
               $aPrTitle = $_POST['aPrTitle'];
               $aPrBody = $_POST['aPrBody'];
               $aPrMajors = $_POST['aPrMajors'];
               $aPrLanguages = $_POST['aPrLanguages'];

               mysqli_query($mysqli, "INSERT INTO projects (prtitle, prbody, prmajors, prlanguages, prdate, prtime) VALUES ('$aPrTitle', '$aPrBody', '$aPrMajors', '$aPrLanguages', '$aPrDate', '$aPrTime');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Projects.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   III. Delete Project   ---===###===---
          if((isset($_POST['dPrButton'])) && (isset($_POST['dPrSelected']))) {
               $dPrID = $_POST['dPrSelected'];

               mysqli_query($mysqli, "DELETE FROM projects WHERE prid='$dPrID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Projects.php");
          }
     }
?>
