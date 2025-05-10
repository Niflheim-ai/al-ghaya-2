<?php
    session_start();
    require_once 'dbConnection.php';
    require_once 'functions.php';

    $teacherID = $_SESSION['teacher_id'] ?? null;
    $result = handleCreateProgram($conn, $_POST, $teacherID);

    if ($result['success']) {
        header("Location: faculty-dashboard.php?message=" . urlencode($result['message']));
        exit();
    } else {
        echo $result['message'];
    }
?>
