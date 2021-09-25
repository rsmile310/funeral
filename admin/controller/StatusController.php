<?php
    include("config.php");
    $id = $_GET['id'];
    $status =  $_GET['status'];

    if($status)
        $sql = "UPDATE obitury_tbl SET Status ='' WHERE Id =  $id";
    else
        $sql = "UPDATE obitury_tbl SET Status ='1' WHERE Id =  $id";
    $conn->query($sql);
    mysqli_close($conn);
    header('Location: ../dash.php');
?>