<?php
    require '../main-files/conn.php';
    require '../main-files/messages.php';

    $id = $_GET['id'];

    if(isset($_GET['id'])) {
        $sql = "DELETE FROM `student-accounts` WHERE id = $id";
        mysqli_query($conn, $sql);

        header('location: display-student.php');
    }
    
?>