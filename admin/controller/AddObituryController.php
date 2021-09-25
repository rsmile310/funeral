<?php
    include("config.php");
    $name = $_POST['name'];
    $age =  $_POST['age'];
    $occuringDate = $_POST['occuringDate'];
    $occuringDateStr = substr($occuringDate, 6, 4)."|".substr($occuringDate, 3, 2)."|".substr($occuringDate, 0, 2);
    $funeralPlace = $_POST['funeralPlace'];
    $funeralDate = $_POST['funeralDate'];
    // $funeralDateStr = substr($funeralDate, 8, 2)."|".substr($funeralDate, 5, 2)."|".substr($funeralDate, 0, 4);
    $funneralTime = $_POST['funneralTime'];
    $burialPlace = $_POST['burialPlace'];
    $burialDate = $_POST['burialDate'];
    // $burialDateStr = substr($burialDate, 8, 2)."|".substr($burialDate, 5, 2)."|".substr($burialDate, 0, 4);
    $burialTime = $_POST['burialTime'];
    $email = $_POST['email'];
    $img = $_POST['img'];
    $status = true;
    $sql = "INSERT INTO obitury_tbl (Name, Age, OccuringDate, FuneralPlace, FuneralDate, FuneralTime, BurialPlace,BurialDate, BurialTime, Email, Image, Status)
    VALUES ('$name', '$age', '$occuringDateStr', '$funeralPlace', '$funeralDate', '$funneralTime', '$burialPlace', '$burialDate', '$burialTime', '$email', '$img', '$status')";

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