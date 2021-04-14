<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          //   ---===###===---   ---===###===---   ---===###===---   I. Update Activity   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.01. Update Activity Title   ---===###===---
          if((isset($_POST['uAcTButton'])) && (isset($_POST['uAcT'])) && (isset($_POST['uAcSelected']))) {
               $uAcTDate = "".date("m/d/Y");
               $uAcTTime = "".date("h:i:s a T");
               $uAcTSelected = $_POST['uAcSelected'];
               $uAcTitle = $_POST['uAcT'];

               mysqli_query($mysqli, "UPDATE activities SET actitle='$uAcTitle', acdate='$uAcTDate', actime='$uAcTTime' WHERE acid='$uAcTSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Activities.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02. Update Activity Body   ---===###===---
          if((isset($_POST['uAcBButton'])) && (isset($_POST['uAcB'])) && (isset($_POST['uAcSelected']))) {
               $uAcBDate = "".date("m/d/Y");
               $uAcBTime = "".date("h:i:s a T");
               $uAcBSelected = $_POST['uAcSelected'];
               $uAcBody = $_POST['uAcB'];

               mysqli_query($mysqli, "UPDATE activities SET acbody='$uAcBody', acdate='$uAcBDate', actime='$uAcBTime' WHERE acid='$uAcBSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Activities.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Add Activity   ---===###===---
          if((isset($_POST['aAcButton'])) && (isset($_POST['aAcT'])) && (isset($_POST['aAcB']))) {
               $aAcDate = "".date("m/d/Y");
               $aAcTime = "".date("h:i:s a T");
               $aAcTitle = $_POST['aAcT'];
               $aAcBody = $_POST['aAcB'];

               mysqli_query($mysqli, "INSERT INTO activities (actitle, acbody, acdate, actime) VALUES ('$aAcTitle', '$aAcBody', '$aAcDate', '$aAcTime');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Activities.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   III. Delete Activity   ---===###===---
          if((isset($_POST['dAcButton'])) && (isset($_POST['dAcSelected']))) {
               $dAcID = $_POST['dAcSelected'];

               mysqli_query($mysqli, "DELETE FROM activities WHERE acid='$dAcID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Activities.php");
          }
     }
?>
