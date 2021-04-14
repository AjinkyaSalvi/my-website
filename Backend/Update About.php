<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          //   ---===###===---   ---===###===---   ---===###===---   I. About Me   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.01. Photo   ---===###===---
          if(isset($_POST['uPhButton'])) {
               $recommendation = $_FILES['uPh'];
               $recFName = $_FILES['uPh']['name'];
               $recFULocation = $_FILES['uPh']['tmp_name']; // User file location
               $recFSLocation = "../All-Star Database/Ajinkya Salvi/Photo/$recFName"; // Server file location
               $recDate = "".date("m/d/Y");
               $recTime = "".date("h:i:s a T");

               if(move_uploaded_file($recFULocation, $recFSLocation))
                    mysqli_query($mysqli, "UPDATE asw.photo SET pfname='$recFName', phdate='$recDate', phtime='$recTime' WHERE phid='1';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit About.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02. My Details   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.02.(i) Update My Details   ---===###===---
          //   ---===###===---   ---===###===---   ---===###===---   I.02.(i)a) Update About Title   ---===###===---
          if((isset($_POST['uAMTButton'])) && (isset($_POST['uAMT'])) && (isset($_POST['uAMSelected']))) {
               $uAMTDate = "".date("m/d/Y");
               $uAMTTime = "".date("h:i:s a T");
               $uAMTSelected = $_POST['uAMSelected'];
               $uAMTitle = $_POST['uAMT'];

               mysqli_query($mysqli, "UPDATE ame SET amtitle='$uAMTitle', amdate='$uAMTDate', amtime='$uAMTTime' WHERE amid='$uAMTSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit About.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02.(i)b) Update About Body   ---===###===---
          if((isset($_POST['uAMBButton'])) && (isset($_POST['uAMB'])) && (isset($_POST['uAMSelected']))) {
               $uAMBDate = "".date("m/d/Y");
               $uAMBTime = "".date("h:i:s a T");
               $uAMBSelected = $_POST['uAMSelected'];
               $uAMBody = $_POST['uAMB'];

               mysqli_query($mysqli, "UPDATE ame SET ambody='$uAMBody', amdate='$uAMBDate', amtime='$uAMBTime' WHERE amid='$uAMBSelected';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit About.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02.(ii) Add My Details   ---===###===---
          if((isset($_POST['aAMBButton'])) && (isset($_POST['aAMT'])) && (isset($_POST['aAMB']))) {
               $aAMDate = "".date("m/d/Y");
               $aAMTime = "".date("h:i:s a T");
               $aAMTitle = $_POST['aAMT'];
               $aAMBody = $_POST['aAMB'];

               mysqli_query($mysqli, "INSERT INTO ame (amtitle, ambody, amdate, amtime) VALUES ('$aAMTitle', '$aAMBody', '$aAMDate', '$aAMTime');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit About.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   I.02.(iii) Delete My Details   ---===###===---
          if((isset($_POST['dAMButton'])) && (isset($_POST['dAMSelected']))) {
               $dAMID = $_POST['dAMSelected'];

               mysqli_query($mysqli, "DELETE FROM ame WHERE amid='$dAMID';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit About.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Update Website Body   ---===###===---
          if((isset($_POST['aWButton'])) && (isset($_POST['aWBody']))) {
               $uAWDate = "".date("m/d/Y");
               $uAWTime = "".date("h:i:s a T");
               $uAWBody = $_POST['aWBody'];

               mysqli_query($mysqli, "UPDATE awebsite SET awbody='$uAWBody', awdate='$uAWDate', awtime='$uAWTime' WHERE awid='1';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit About.php");
          }
     }
?>
