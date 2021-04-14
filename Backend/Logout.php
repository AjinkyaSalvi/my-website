<?php
     session_start();
     $lFlag = $_SESSION['lFlag'];

     if($lFlag == "1") {
          $_SESSION['lFlag'] = "0";
          session_destroy();
     }

     header("Location: ../Home.php");
?>
