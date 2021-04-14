<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          //   ---===###===---   ---===###===---   ---===###===---   I. Major   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.01. Update Major   ---===###===---
          if((isset($_POST['uMButton'])) && (isset($_POST['uMName'])) && (isset($_POST['uMSelected']))) {
               $uMDate = "".date("m/d/Y");
               $uMTime = "".date("h:i:s a T");
               $uMMID = $_POST['uMSelected'];
               $uMName = $_POST['uMName'];

               mysqli_query($mysqli, "UPDATE majors SET mname='$uMName', mdate='$uMDate', mtime='$uMTime' WHERE mid='$uMMID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Skills.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02. Add Major   ---===###===---
          if((isset($_POST['aMButton'])) && (isset($_POST['aMName']))) {
               $aMDate = "".date("m/d/Y");
               $aMTime = "".date("h:i:s a T");
               $aMName = $_POST['aMName'];

               mysqli_query($mysqli, "INSERT INTO majors (mname, mdate, mtime) VALUES ('$aMName', '$aMDate', '$aMTime');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Skills.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.03. Delete Major   ---===###===---
          if((isset($_POST['dMButton'])) && (isset($_POST['dMSelected']))) {
               $dMMID = $_POST['dMSelected'];

               mysqli_query($mysqli, "DELETE FROM majors WHERE mid='$dMMID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Skills.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Skills   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   II.01. Update Skill   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   II.01.(i) Skill Name   ---===###===---
          if((isset($_POST['uSNButton'])) && (isset($_POST['uSName'])) && (isset($_POST['uSSelected']))) {
               $uSNDate = "".date("m/d/Y");
               $uSNTime = "".date("h:i:s a T");
               $uSNSID = $_POST['uSSelected'];
               $uSName = $_POST['uSName'];

               echo "sid".$uSNSID;
               echo "<br>name".$uSName;

               mysqli_query($mysqli, "UPDATE skills SET sname='$uSName', sdate='$uSNDate', stime='$uSNTime' WHERE ssid='$uSNSID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Skills.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II.01.(ii) Skill Major   ---===###===---
          if((isset($_POST['uSMButton'])) && (isset($_POST['uSMSelected'])) && (isset($_POST['uSSelected']))) {
               $uSMDate = "".date("m/d/Y");
               $uSMTime = "".date("h:i:s a T");
               $uSMSID = $_POST['uSSelected'];
               $uSMMID = $_POST['uSMSelected'];

               mysqli_query($mysqli, "UPDATE skills SET sdate='$uSMDate', stime='$uSMTime', smid='$uSMMID' WHERE ssid='$uSMSID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Skills.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II.02. Add Skill   ---===###===---
          if((isset($_POST['aSButton'])) && (isset($_POST['aSName'])) && (isset($_POST['aSMSelected']))) {
               $aSDate = "".date("m/d/Y");
               $aSTime = "".date("h:i:s a T");
               $aSName = $_POST['aSName'];
               $aSMSelected = $_POST['aSMSelected'];

               mysqli_query($mysqli, "INSERT INTO skills (sname, sdate, stime, smid) VALUES ('$aSName', '$aSDate', '$aSTime', '$aSMSelected');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Skills.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II.03. Delete Skill   ---===###===---
          if((isset($_POST['dSButton'])) && (isset($_POST['dSSelected']))) {
               $dSSID = $_POST['dSSelected'];

               mysqli_query($mysqli, "DELETE FROM skills WHERE ssid='$dSSID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Skills.php");
          }
     }
?>
