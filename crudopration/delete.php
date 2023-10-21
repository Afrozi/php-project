<?php
 include 'connect.php';
if (isset($_GET['deleteid'])) {
    $sno=$_GET['deleteid'];
    $sql = "DELETE FROM `bollybood` WHERE `bollybood`.`sno` = '$sno'";
    $result = mysqli_query($conn,$sql);
    if ($result) {
        header("location: display.php");
    }
    else {
        echo "your data has been not deleted";
    }
}
?>