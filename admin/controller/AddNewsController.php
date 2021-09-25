<?php
    include("config.php");
    $title = $_POST['title'];
    $summary =  $_POST['summary'];
    $matter = $_POST['matter'];
    $img = $_POST['img'];
    $status = 1;
    
    $sql = "INSERT INTO news_tbl (Title, Summary, Matter, Image, Status)
    VALUES ('$title', '$summary', '$matter', '$img', '$status')";

    if ($conn->query($sql) === TRUE) {
        $response = true;
    } 
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header('Content-Type: application/json');
    echo json_encode($response);
    mysqli_close($conn);
?>