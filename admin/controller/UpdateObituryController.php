<?php
    include("config.php");
    $id = $_GET['id'];
    $name = $_POST['name'];
    $age =  $_POST['age'];
    $occuringDate = $_POST['occuringDate'];
    $occuringDateStr = substr($occuringDate, 6, 4)."|".substr($occuringDate, 3, 2)."|".substr($occuringDate, 0, 2);
    $funeralPlace = $_POST['funeralPlace'];
    $funeralDate = $_POST['funeralDate'];
    $funneralTime = $_POST['funneralTime'];
    $burialPlace = $_POST['burialPlace'];
    $burialDate = $_POST['burialDate'];
    $burialTime = $_POST['burialTime'];
    $email = $_POST['email'];
    $img = $_POST['img'];
    $status = true;
    $sql = "UPDATE obitury_tbl SET Name = '$name', Age = '$age', OccuringDate = '$occuringDateStr', FuneralPlace = '$funeralPlace', FuneralDate = '$funeralDate', FuneralTime = '$funneralTime', BurialPlace = '$burialPlace',BurialDate='$burialDate', BurialTime='$burialTime', Email='$email', Image='$img' 
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