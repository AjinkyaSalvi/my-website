<?php include '../Connection/Connection.php';

     session_start();
     $lFlag = $_SESSION['lFlag'];

     if(($_SERVER["REQUEST_METHOD"] == "POST") && ($lFlag == "1")) {
          //   ---===###===---   ---===###===---   ---===###===---   I. Add Recommendation   ---===###===---
          if(isset($_POST['aRecButton']))
          {
               $recommendation = $_FILES['uRecommendation'];
               $recFName = $_FILES['uRecommendation']['name'];
               $recFULocation = $_FILES['uRecommendation']['tmp_name']; // User file location
               $recFSLocation = "../All-Star Database/Ajinkya Salvi/Recommendations/$recFName"; // Server file location
               $recDate = "".date("m/d/Y");
               $recTime = "".date("h:i:s a T");

               if(move_uploaded_file($recFULocation, $recFSLocation))
                    mysqli_query($mysqli, "INSERT INTO recommendations (recfname, recdate, rectime) VALUES ('$recFName', '$recDate', '$recTime');") or die("Error: ".mysqli_error($mysqli));

               header("Location: ../Edit Recommendations.php");
          }

          //   ---===###===---   ---===###===---   ---===###===---   II. Delete Recommendation   ---===###===---
          if((isset($_POST['dRecButton'])) && (isset($_POST['dRecSelected']))) {
               $dRSelected = $_POST['dRecSelected'];

               if ($q01 = mysqli_query($mysqli,"SELECT * FROM recommendations WHERE recid='$dRSelected';")) {
                    $row01 = mysqli_fetch_array($q01);
                    $recFName = $row01[recfname];
                    $recLocation = "../All-Star Database/Ajinkya Salvi/Recommendations/$recFName";

                    if(unlink($recLocation))
                         mysqli_query($mysqli, "DELETE FROM recommendations WHERE recid='$dRSelected';") or die("Error: ".mysqli_error($mysqli));
               }

               header("Location: ../Edit Recommendations.php");
          }
     }
?>
