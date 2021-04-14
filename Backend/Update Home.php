<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     echo "1";
     //   ---===###===---   ---===###===---   ---===###===---   I. Home Body   ---===###===---
     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          echo "2";
          if((isset($_POST['hBButton'])) && (isset($_POST['hBody']))) {
               echo "3";
               $hBody = $_POST['hBody'];
               $hDate = "".date("m/d/Y");
               $hTime = "".date("h:i:s a T");

               mysqli_query($mysqli, "UPDATE asw.home SET hbody='$hBody', hdate='$hDate', htime='$hTime' WHERE hid='1';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Home.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Resume   ---===###===---
          if(isset($_POST['uResButton'])) {
               $resume = $_FILES['uResume'];
               $resFName = $_FILES['uResume']['name'];
               $resFULocation = $_FILES['uResume']['tmp_name']; // User file location
               $resFSLocation = "../All-Star Database/Ajinkya Salvi/Resume/".$resFName; // Server file location
               $resDate = "".date("m/d/Y");
               $resTime = "".date("h:i:s a T");

               if(move_uploaded_file($resFULocation, $resFSLocation))
                    mysqli_query($mysqli, "UPDATE asw.resumef SET resfname='$resFName', resdate='$resDate', restime='$resTime' WHERE resid='1';") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Home.php");
          }
     }
?>
