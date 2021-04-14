<?php include '../Connection/Connection.php';

     //   ---===###===---   ---===###===---   ---===###===---   Like   ---===###===---
     $lFlag = "1";
     mysqli_query($mysqli, "INSERT INTO asw.likes (lflag) VALUES ('$lFlag');") or die("Error: ".mysqli_error($mysqli));

     header('Location: ' . $_SERVER['HTTP_REFERER']);
     exit;
?>
