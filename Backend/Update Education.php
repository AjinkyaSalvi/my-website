<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          //   ---===###===---   ---===###===---   ---===###===---   I. Update Education   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.01. Update Education Degree   ---===###===---
          if((isset($_POST['uDButton'])) && (isset($_POST['uD'])) && (isset($_POST['uEdSelected']))) {
               $uDDate = "".date("m/d/Y");
               $uDTime = "".date("h:i:s a T");
               $uDSelected = $_POST['uEdSelected'];
               $uDegree = $_POST['uD'];

               mysqli_query($mysqli, "UPDATE education SET degree='$uDegree', eddate='$uDDate', edtime='$uDTime' WHERE edid='$uDSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Education.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02. Update Education University   ---===###===---
          if((isset($_POST['uUButton'])) && (isset($_POST['uU'])) && (isset($_POST['uEdSelected']))) {
               $uUDate = "".date("m/d/Y");
               $uUTime = "".date("h:i:s a T");
               $uUSelected = $_POST['uEdSelected'];
               $uUniversity = $_POST['uU'];

               mysqli_query($mysqli, "UPDATE education SET university='$uUniversity', eddate='$uUDate', edtime='$uUTime' WHERE edid='$uUSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Education.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.03. Update University Location   ---===###===---
          if((isset($_POST['uULButton'])) && (isset($_POST['uUL'])) && (isset($_POST['uEdSelected']))) {
               $uULDate = "".date("m/d/Y");
               $uULTime = "".date("h:i:s a T");
               $uULSelected = $_POST['uEdSelected'];
               $uULocation = $_POST['uUL'];

               mysqli_query($mysqli, "UPDATE education SET ulocation='$uULocation', eddate='$uULDate', edtime='$uULTime' WHERE edid='$uULSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Education.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.04. Update Graduation Date   ---===###===---
          if((isset($_POST['uGDButton'])) && (isset($_POST['uGD'])) && (isset($_POST['uEdSelected']))) {
               $uGDDate = "".date("m/d/Y");
               $uGDTime = "".date("h:i:s a T");
               $uGDSelected = $_POST['uEdSelected'];
               $uGDate = $_POST['uGD'];

               mysqli_query($mysqli, "UPDATE education SET gdate='$uGDate', eddate='$uGDDate', edtime='$uGDTime' WHERE edid='$uGDSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Education.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Add Education   ---===###===---
          if((isset($_POST['aEdButton'])) && (isset($_POST['aD'])) && (isset($_POST['aU'])) && (isset($_POST['aUL'])) && (isset($_POST['aGD']))) {
               $aEdDate = "".date("m/d/Y");
               $aEdTime = "".date("h:i:s a T");
               $aDegree = $_POST['aD'];
               $aUniversity = $_POST['aU'];
               $aULocation = $_POST['aUL'];
               $aGDate = $_POST['aGD'];

               mysqli_query($mysqli, "INSERT INTO education (degree, university, ulocation, gdate, eddate, edtime) VALUES ('$aDegree', '$aUniversity', '$aULocation', '$aGDate', '$aEdDate', '$aEdTime');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Education.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   III. Delete Education   ---===###===---
          if((isset($_POST['dEdButton'])) && (isset($_POST['dEdSelected']))) {
               $dEdID = $_POST['dEdSelected'];

               mysqli_query($mysqli, "DELETE FROM education WHERE edid='$dEdID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Education.php");
          }
     }
?>
