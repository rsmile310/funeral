<?php 
    session_start();
    $_SESSION['uname'] = true;
    header('Location: ../dash.php');
?>