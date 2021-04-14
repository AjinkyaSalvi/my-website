<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          //   ---===###===---   ---===###===---   ---===###===---   I. Update Contact  ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.01. Update Contact Title   ---===###===---
          if((isset($_POST['uCTButton'])) && (isset($_POST['uCT'])) && (isset($_POST['uCSelected']))) {
               $uCTDate = "".date("m/d/Y");
               $uCTTime = "".date("h:i:s a T");
               $uCTSelected = $_POST['uCSelected'];
               $uCTitle = $_POST['uCT'];

               mysqli_query($mysqli, "UPDATE contact SET ctitle='$uCTitle', cdate='$uCTDate', ctime='$uCTTime' WHERE cid='$uCTSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Contact.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02. Update Activity Body   ---===###===---
          if((isset($_POST['uCBButton'])) && (isset($_POST['uCB'])) && (isset($_POST['uCSelected']))) {
               $uCBDate = "".date("m/d/Y");
               $uCBTime = "".date("h:i:s a T");
               $uCBSelected = $_POST['uCSelected'];
               $uCBody = $_POST['uCB'];

               mysqli_query($mysqli, "UPDATE contact SET cbody='$uCBody', cdate='$uCBDate', ctime='$uCBTime' WHERE cid='$uCBSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Contact.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Add Activity   ---===###===---
          if((isset($_POST['aCButton'])) && (isset($_POST['aCT'])) && (isset($_POST['aCB']))) {
               $aCDate = "".date("m/d/Y");
               $aCTime = "".date("h:i:s a T");
               $aCTitle = $_POST['aCT'];
               $aCBody = $_POST['aCB'];

               mysqli_query($mysqli, "INSERT INTO contact (ctitle, cbody, cdate, ctime) VALUES ('$aCTitle', '$aCBody', '$aCDate', '$aCTime');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Contact.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   III. Delete Activity   ---===###===---
          if((isset($_POST['dCButton'])) && (isset($_POST['dCSelected']))) {
               $dCID = $_POST['dCSelected'];

               mysqli_query($mysqli, "DELETE FROM contact WHERE cid='$dCID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Contact.php");
          }
     }
?>
