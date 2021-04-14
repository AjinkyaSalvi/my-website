<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          //   ---===###===---   ---===###===---   ---===###===---   I. Update Experience   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.01. Update Job   ---===###===---
          if((isset($_POST['uJButton'])) && (isset($_POST['uJ'])) && (isset($_POST['uExSelected']))) {
               $uJDate = "".date("m/d/Y");
               $uJTime = "".date("h:i:s a T");
               $uJSelected = $_POST['uExSelected'];
               $uJob = $_POST['uJ'];

               mysqli_query($mysqli, "UPDATE experience SET job='$uJob', exdate='$uJDate', extime='$uJTime' WHERE exid='$uJSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Experience.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02. Update Company   ---===###===---
          if((isset($_POST['uCButton'])) && (isset($_POST['uC'])) && (isset($_POST['uExSelected']))) {
               $uCDate = "".date("m/d/Y");
               $uCTime = "".date("h:i:s a T");
               $uCSelected = $_POST['uExSelected'];
               $uCompany = $_POST['uC'];

               mysqli_query($mysqli, "UPDATE experience SET company='$uCompany', exdate='$uCDate', extime='$uCTime' WHERE exid='$uCSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Experience.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.03. Update Company Location   ---===###===---
          if((isset($_POST['uCLButton'])) && (isset($_POST['uCL'])) && (isset($_POST['uExSelected']))) {
               $uCLDate = "".date("m/d/Y");
               $uCLTime = "".date("h:i:s a T");
               $uCLSelected = $_POST['uExSelected'];
               $uCLocation = $_POST['uCL'];

               mysqli_query($mysqli, "UPDATE experience SET clocation='$uCLocation', exdate='$uCLDate', extime='$uCLTime' WHERE exid='$uCLSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Experience.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.04. Update Job End Date   ---===###===---
          if((isset($_POST['uJEDButton'])) && (isset($_POST['uJED'])) && (isset($_POST['uExSelected']))) {
               $uJEDDate = "".date("m/d/Y");
               $uJEDTime = "".date("h:i:s a T");
               $uJEDSelected = $_POST['uExSelected'];
               $uJEDate = $_POST['uJED'];

               mysqli_query($mysqli, "UPDATE experience SET enddate='$uJEDate', exdate='$uJEDDate', extime='$uJEDTime' WHERE exid='$uJEDSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Experience.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.05. Update Job Description   ---===###===---
          if((isset($_POST['uJDButton'])) && (isset($_POST['uJD'])) && (isset($_POST['uExSelected']))) {
               $uJDDate = "".date("m/d/Y");
               $uJDTime = "".date("h:i:s a T");
               $uJDSelected = $_POST['uExSelected'];
               $uJDescription = $_POST['uJD'];

               mysqli_query($mysqli, "UPDATE experience SET jdescription='$uJDescription', exdate='$uJDDate', extime='$uJDTime' WHERE exid='$uJDSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Experience.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Add Experience   ---===###===---
          if((isset($_POST['aExButton'])) && (isset($_POST['aJT'])) && (isset($_POST['aC'])) && (isset($_POST['aCL'])) && (isset($_POST['aJED'])) && (isset($_POST['aJD']))) {
               $aExDate = "".date("m/d/Y");
               $aExTime = "".date("h:i:s a T");
               $aJob = $_POST['aJT'];
               $aCompany = $_POST['aC'];
               $aCLocation = $_POST['aCL'];
               $aJEDate = $_POST['aJED'];
               $aJDescription = $_POST['aJD'];

               mysqli_query($mysqli, "INSERT INTO experience (job, company, clocation, enddate, jdescription, exdate, extime) VALUES ('$aJob', '$aCompany', '$aCLocation', '$aJEDate', '$aJDescription', '$aExDate', '$aExTime');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Experience.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   III. Delete Experience   ---===###===---
          if((isset($_POST['dExButton'])) && (isset($_POST['dExSelected']))) {
               $dExID = $_POST['dExSelected'];

               mysqli_query($mysqli, "DELETE FROM experience WHERE exid='$dExID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Experience.php");
          }
     }
?>
