<?php
    include("config.php");
    $id = $_POST['id'];
    $status =  $_POST['status'];

    if($status)
        $sql = "UPDATE news_tbl SET Status ='' WHERE Id =  $id";
    else
        $sql = "UPDATE news_tbl SET Status ='1' WHERE Id =  $id";

    $sql2 = "SELECT * FROM news_tbl WHERE  Id = $id";
    $conn->query($sql);
    $result = $conn->query($sql2);

    if($conn->query($sql))
    foreach($result as $result){
        $response = $result['Status'];
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    mysqli_close($conn);
?>