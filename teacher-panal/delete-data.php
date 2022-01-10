<?php
    require '../main-files/.php';
    require '../main-files/.php';

    $id = $_GET['id'];

    if(isset($_GET['id'])) {
        $sql = "DELETE FROM `student-data` WHERE id = $id";
        mysqli_query($conn, $sql);

        header('location: display-data.php');
    }
    
?>