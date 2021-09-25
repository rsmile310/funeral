<?php
    include("config.php");
    $id = $_GET['id'];
    $title = $_POST['title'];
    $summary =  $_POST['summary'];
    $matter =  $_POST['matter'];
    $img = $_POST['img'];
    $sql = "UPDATE news_tbl SET Title = '$title', Summary = '$summary', Matter = '$matter', Image = '$img' 
    WHERE Id = $id";
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